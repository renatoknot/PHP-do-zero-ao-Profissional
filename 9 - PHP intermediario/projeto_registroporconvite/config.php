<?php
try {
	$pdo = new PDO("mysql:dbname=projeto_registroporconvite;charset=utf8;host=localhost", "root", "");
} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}