<?php
    try {
        $pdo = new PDO("mysql:dbname=projeto_ordenar;host=localhost", "root","");
    } catch(PDOException $e) {
        echo "Erro: ".$e->getMessage();
        exit;
    }
?>
<form action="" method="GET" >
    <select name="ordem" onchange="this.form.submit()">  <!--esse comando envia o form -->
        <option value="" disabled selected>Selecione seu filtro</option>
        <option value="nome">Pelo nome</option>
        <option value="idade">Pela idade</option>
    </select>
</form>
<table border="1" width="400">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php

        $sql = "SELECT * FROM usuarios ORDER BY nome ASC"; // continuar mudando aqui  que e o filtro do select
        $sql = $pdo->query($sql);

        if ($sql->rowCount()>0) {
            foreach($sql->fetchAll() as $usuario) :
                ?>
                <tr>
                    <td><?php echo $usuario['nome']?></td>
                    <td><?php echo $usuario['idade']?></td>
                </tr>
            <?php    
            endforeach;
        }
    ?>
</table>