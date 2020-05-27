<?
include 'contato.class.php';
$contato = new Contato();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud - Modal</title>
    <link rel="stylesheet" href="assets/css/estilo.css">
</head>

<body>
    <h1>Contatos</h1>

    <a href="adicionar.php" class="modal_ajax">[ ADICIONAR ]</a><br><br>

    <table border="1" width="600">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>E-MAIL</th>
            <th>AÇÕES</th>
        </tr>
        <?php
        $lista = $contato->getALL();
        foreach ($lista as $item) :
            ?>

            <tr>
                <td><?= $item['id']; ?></td>
                <td><?= $item['nome']; ?></td>
                <td><?= $item['email']; ?></td>
                <td>
                    <a href="editar.php?id=<?= $item['id']; ?>" class="modal_ajax">[ EDITAR ]</a>
                    <a href=" excluir.php?id=<?= $item['id']; ?>">[ EXCLUIR]</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <div class="modal_bg">
        <div class="modal"> </div>
        <button id="back">Voltar</button>
    </div>

    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
</body>

</html>