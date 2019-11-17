<?
session_start();

if(!empty($_GET['lang'])){
    $_SESSION['lang'] = $_GET['lang'];
}

require 'Language.class.php';
$lang = new Language();
?>

<a href="index.php?lang=en">English</a>
<a href="index.php?lang=pt-br">Português</a>
<a href="index.php?lang=es">Español</a>
<hr>
Linguagem difinida: <?=$lang->getLanguage();?><br>
<button><?=$lang->get('BUY');?></button><br><br>
<a href="#"><?=$lang->get('LOGOUT');?></a>