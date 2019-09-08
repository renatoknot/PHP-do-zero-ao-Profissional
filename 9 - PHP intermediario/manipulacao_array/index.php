<?php
    $array = array (
        'nome' => 'Renato',
        'idade' => 90,
        'cidade' => 'Campina grande',
        'pais' => 'Brasil'
    );

    $array2 = array_keys ($array);
    print_r($array2);

    echo '<br><br>';

    array_pop($array);

?>