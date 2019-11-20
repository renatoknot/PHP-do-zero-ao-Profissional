<?php
try {
	$pdo = new PDO("mysql:dbname=projeto_lixeiradeitens;host=localhost;charset=utf8", "root", "");
} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}