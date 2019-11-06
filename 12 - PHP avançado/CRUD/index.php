<?
    include 'contato.class.php';

    $contato = new Contato();  
?>

<h1>Contatos</h1>

<a href="adicionar.php">[ ADICIONAR ]</a><br><br>

<table border="1" width="600">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
    <?
    $lista = $contato->getAll();
    foreach ($lista as $contato) :
    ?>
    <tr>
        <td><?=$contato['id']?></td>
        <td><?=$contato['nome']?></td>
        <td><?=$contato['email']?></td>
        <td>
            <a href="editar.php?id=<?=$contato['id'];?>">[ EDITAR ]</a>
            <a href="excluir.php?id=<?=$contato['id'];?>">[ EXCLUIR ]</a>
        </td>
    </tr>
    <? endforeach; ?>

</table>