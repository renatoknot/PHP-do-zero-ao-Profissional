<?php
    try {
        $pdo = new PDO("mysql:dbname=galeria;host=localhost", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "FALHA: ".$e->getMessage();
    }

    $sql = "SELECT * FROM fotoss";
    $sql = $pdo->query($sql);

    echo "Total de fotos: ".$sql->rowCount();


?>