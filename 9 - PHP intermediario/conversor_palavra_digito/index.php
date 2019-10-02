<form method="POST">
    <h1>Conversor Palavra em dígito</h1><br><br>
    <input type="text" name="input" ><input type="submit" value="Enviar">
</form>

<?php
    if (!empty($_POST['input'])) {
        $palavras =$_POST['input'];
        $p = explode(",",$palavras);

        $nums = array();

        foreach($p as $palavra){
            switch($palavra) {
                case 'zero':
                    $nums[] = 0;
                    break;
                case 'um':
                    $nums[] = 1;
                    break;
                case 'dois':
                    $nums[] = 2;
                    break;
                case 'três':
                    $nums[] = 3;
                    break;
                case 'quatro':
                    $nums[] = 4;
                    break;
                case 'cinco':
                    $nums[] = 5;
                    break;
                case 'seis':
                    $nums[] = 6;
                    break;
                case 'sete':
                    $nums[] = 7;
                    break;
                case 'oito':
                    $nums[] = 8;
                    break;
                case 'nove':
                    $nums[] = 9;
                    break; 
            }
        }
        echo $palavras."<br>";
        echo implode(",",$nums);
    }
?>