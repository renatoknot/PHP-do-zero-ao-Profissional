<?
    try {
        $pdo = new PDO("mysql:dbname=projeto_caixaeletronico;charset=utf8;host=localhost",'root','');
    } catch(PDOException $e){
        echo "Erro: ".$e->getMessage();
    }
?>