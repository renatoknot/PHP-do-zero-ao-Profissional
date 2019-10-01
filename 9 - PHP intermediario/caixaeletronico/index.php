<?php
    session_start();
    require 'config.php';

    if(isset($_SESSION['banco']) && !empty($_SESSION['banco'])) {
        $id = $_SESSION['banco'];

        $sql = $pdo->prepare("SELECT * FROM contas WHERE id = :id");
        $sql->bindValue(":id",$id);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $info = $sql->fetch();            
        } else {
            header('Location: login.php');
            exit;
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Caixa Eletrônico</title>
</head>
<body>
    <h1>Banco Santander</h1>
    Titular: <?= $info['titular']; ?> <br>
    Agência: <?= $info['agencia']; ?> <br>
    Conta: <?= $info['conta']; ?> <br>
    Saldo: <?= $info['saldo']; ?> <br>
    <a href="sair.php">Sair</a>
    
    <hr>

    <h3>Movimentação/Extrato</h3>

    <a href="add-transacao.php">Adicionar Transações</a> <br> <br>

    <table border="1" width="400px">
        <tr>
            <th>Data</th>
            <th>Valor</th>
        </tr>
        <?
            $sql = $pdo->prepare("SELECT * FROM historico WHERE id_conta = :id_conta");
            $sql->bindValue(":id_conta",$id);
            $sql->execute();

            if($sql->rowCount() > 0) {
                foreach($sql->fetchAll() as $item) {
                 ?> <tr>
                      <td><?= date('d/m/y H:i', strtotime($item['data_operacao'])); ?></td>
                      <td>
                        <?php if($item['tipo'] == '0'): ?>
                        <font color="green">R$ <?=$item['valor'] ?></font>
                        <? else: ?>
                            <font color="red">- R$<?=$item['valor']?></font>
                        <? endif; ?>
                      </td> 
                         
                    </tr>  
                    <?
                }
            }
        ?>
    </table>
</body>
</html>