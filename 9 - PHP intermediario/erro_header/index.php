<h1>Página 1</h1>

<form method="POST">
    Digite "renato" para passar: <br><br>

    <input type="text" name="codigo" id="">
    <br><br>

    <input type="submit" value="Enviar">
</form>

<?php
    if(!empty($_POST['codigo'])) {
        $codigo = $_POST['codigo'];

        if($codigo =='renato') {
            header("Location: pagina2.php");
        } else {
            echo 'Acesso negado!';
        }
    }


?>