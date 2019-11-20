<?
    try {
        $pdo = new PDO("mysql:dbname=projeto_reservas;host=localhost;charset=utf8;", "root", "");
    } catch(PDOException $e){
        echo "Erro: ".$e->getMessage();
        exit;
    }