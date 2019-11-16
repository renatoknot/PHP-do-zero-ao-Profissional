<?
    try {
        $pdo = new PDO("mysql:dbname=projeto_esqueciasenha;host=localhost;charset=utf8","root","");

    } catch(PDOException $e) {
        echo "Erro: ".$e->getMessage();    
    }
?>