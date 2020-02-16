<?
    include 'contato.class.php';
    $contato = new Contato();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Contatos</h1>

    <a href="adicionar.php">[ ADICIONAR ]</a><br><br>

    <table border="1" width="600">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>E-MAIL</th>
            <th>AÇÕES</th>
        </tr>

        <?
        $lista = $contato->getAll();
        foreach($lista as $item):
        ?>
        <tr>
            <td><?=$item['id'];?></td>
            <td><?=$item['nome'];?></td>
            <td><?=$item['email'];?></td>
            <td>
                <a href="editar.php?id=<?=$item['id'];?>">[ EDITAR ]</a>
                <a href="excluir.php?id=<?=$item['id'];?>">[ EXCLUIR ]</a>
            </td>
        </tr>
        <?endforeach; ?>
    </table>
</body>
</html>
