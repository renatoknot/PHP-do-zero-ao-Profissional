<?php
// require 'classes/Cavalo.php';
// require 'classes/Pessoa.php';

// $cavalo = new Cavalo();
// $cavalo->falar();

// $p = new Pessoa();
// $p->andarFrente();




//COM AUTOLOAD NÃO É NECESSARIO O REQUIRE

spl_autoload_register(function ($class) {
    require 'classes/' . $class . '.php';
});

$cavalo = new Cavalo();
$cavalo->falar();

$pessoa = new Pessoa();
$pessoa->andarFrente();
