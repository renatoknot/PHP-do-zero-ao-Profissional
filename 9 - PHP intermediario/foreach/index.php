<?php
$aluno = array (
    'nome' =>'Bonieky',
    'idade'=> 90,
    'estado'=>'PB',
    'pais' => "Brasil"
);

foreach($aluno as $chave => $dado) {
        echo $chave.' = '.$dado.'<br>';
    }
