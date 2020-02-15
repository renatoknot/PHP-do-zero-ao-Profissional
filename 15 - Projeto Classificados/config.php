<?php
    session_start();
    global $pdo;
    
    try{
        $pdo = new PDO("mysql:dbname=classificados;host=localhost;charset=utf8;", "root", "");
    }catch(PDOException $e){
        echo "Falhou: ".$e->getMessage();
        exit;
    }

?>