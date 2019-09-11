<?php
$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
    $pdo = new PDO($dsn,$dbuser,$dbpass);
    
    $nome ='Pedro';
    $id = 7;

    $sql = "UPDATE usuarios  SET nome = :novonome WHERE id = :iddousuario";
    
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':novonome',$nome);     //binds values => troca o nome dos apelidos na query pelas variaveis
    $sql->bindValue(':iddousuario',$id);
    $sql->execute(); // mesma coisa que pdo->query()

    echo 'Usuário atualizado com sucesso!';
} catch(PDOException $e) {
     echo "falhou: ".$e->getMessage();
}


?>