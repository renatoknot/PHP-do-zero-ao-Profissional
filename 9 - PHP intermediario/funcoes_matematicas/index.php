<?php
    echo abs(-10).'<br>';
    echo round (2.3).'<br>';
    echo ceil (2.9).'<br>';
    echo floor(2.9).'<br>';

    echo rand(1, 10).'<br><br>';

    //exemplo de sorteio

    $lista = array('Renato','Renata', 'Thiago','Rodrigo','Felipe');
    $x = rand(0,4);

    echo "E a pessoa sorteada é: ".$lista[$x];
?>