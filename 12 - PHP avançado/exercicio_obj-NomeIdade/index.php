<?php
    require 'pessoa.class.php';

    $pessoa = new Pessoa('Renato', '27/04/1988');

    echo $pessoa->getNome(). ' tem '.$pessoa->getIdade().' anos.';