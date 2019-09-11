<?php
$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
    $pdo = new PDO($dsn,$dbuser,$dbpass);
    $nome = 'Testador3';
    $email ='renato@gmail.com';
    $senha = md5('slip515');
    
    $sql = "INSERT INTO usuarios SET nome='$nome', email='$email', senha='$senha'";
    $sql = $pdo->query($sql);

    echo 'Usuário inserido: '.$pdo->lastInsertId();

} catch(PDOException $e) {
     echo "falhou: ".$e->getMessage();
}


?>