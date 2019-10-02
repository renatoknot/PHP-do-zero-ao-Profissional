<?php
    session_start();
    if(!empty($_POST['resultado'])) {
        $resultado = $_SESSION['r'];
        $usuarioresultado = intval($_POST['resultado']);

        if($resultado == $usuarioresultado) {
            echo "<h1>Humano!</h1>";
        } else {
            echo "<h1>Fake!</h1>";
        }
    } else {
        header("Location: index.php");
    }
?>