<?php
$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
    $pdo = new PDO($dsn,$dbuser,$dbpass);
    $novasenha = md5('teste123');

    $sql = "UPDATE usuarios SET senha = '$novasenha' WHERE email = 'abc@hotmail.com';";
    $pdo->query($sql);

    echo "Usuário alterado com sucesso!";

} catch(PDOException $e) {
     echo "falhou: ".$e->getMessage();
}


?>