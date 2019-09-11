<?php
$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
    $pdo = new PDO($dsn,$dbuser,$dbpass);
    
    $sql = "DELETE FROM usuarios WHERE id='4';";
    $sql = $pdo->query($sql);

    echo "Usuário deletado com sucesso!";

} catch(PDOException $e) {
     echo "falhou: ".$e->getMessage();
}


?>