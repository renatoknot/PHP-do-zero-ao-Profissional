<?
    $array = array(1,2,1,10,43,8,4,77,6);
    $maior = 0;
    foreach($array as $numero){
        if($numero>$maior){
            $maior = $numero;
        }
    }
    echo implode(",", $array)."<br>";
    echo "Maior: ".$maior;

?>