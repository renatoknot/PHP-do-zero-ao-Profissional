<?php
    $nome = 'Renato Gonçalves';

    $x = explode(' ',$nome);

    echo $x[1].'<br><br>';

    $nomecompleto = implode(' ',$x);
    echo $nomecompleto;
?>

<?php
    
    echo'<br><br>';
    $y = number_format(8.287654781, 2);
    echo $y;
?>

<?php
    
    echo'<br><br>';
    $texto = 'O rato roeu a roupa!';
    $string = str_replace('roeu','comeu',$texto);/*primeiro parametro o que quero trocar
                                          o segundo é a palavra o que eu quero substituir*/
    echo $string;                                     
?>

<?php
    
    echo'<br><br>';
    $texto2 = 'Bonieky';
    $z = substr($texto2, 0,3);
    echo $z;
?>
