<?
    try {
        global $pdo;
        $pdo = new PDO("mysql:dbname=projeto_mmn;host=localhost;charset=utf8;", "root","");
    } catch(PDOException $e){
        echo "Erro: ".$e->getMessage();
        exit;
    }

    $limite = 3;

    $patentes = array(
        
    );