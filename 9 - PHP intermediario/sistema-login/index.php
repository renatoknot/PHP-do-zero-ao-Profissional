<?php
    session_start();

    if(isset($_SESSION['id']) && !empty($_SESSION['id'])) {
        echo "área restrista";
    } else {
        header("Location: login.php");
    }





?>