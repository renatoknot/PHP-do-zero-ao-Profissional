<?
    if(!empty($_GET['n1'])&& !empty($_GET['n2'])&& !empty($_GET['operacao'])) {
        $n1 = floatval($_GET['n1']);
        $n2 = floatval($_GET['n2']);

        $operacao = $_GET['operacao'];

        switch ($operacao) {
            case "-":
                $resultado = $n1-$n2;
                echo "$n1 $operacao $n2 = $resultado";
                break;
            case "+":
                $resultado = $n1+$n2;
                echo "$n1 $operacao $n2 = $resultado";
                break;
            case "/":
                $resultado = $n1/$n2;
                $resultado = floatval($resultado);
                echo "$n1 $operacao $n2 = $resultado";
                break;
            case "*":
                $resultado = $n1*$n2;
                echo "$n1 $operacao $n2 = $resultado";
                break;
        }
            // default :
            //     echo "Operação inválida";
            //     break;
    } else {
        header("Location: index.php");
    }
    
?>