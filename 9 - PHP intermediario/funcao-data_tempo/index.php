<?php

 $dataatual =   date("d/m/Y \à\s H:i:s");

echo $dataatual;

?>

<?php
echo'<br><br>';
 
    $x = time();
    echo $x;
?>

<?php
    echo'<br><br>';
    $dataproxima = date('d/m/Y', strtotime('+2 days', 0));
 
    echo $dataproxima.'<br>';

    echo date ('d/m/Y', strtotime('2017/07/31'));

?>