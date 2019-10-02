<?
    $array = array(1,2,1,6,8,4,6,9);

    $novoarray =array();

    foreach($array as $numero){
        if(!in_array($numero, $novoarray)) {
            $novoarray[] =$numero; 
        }
    }
    echo implode(",",$novoarray);
?>