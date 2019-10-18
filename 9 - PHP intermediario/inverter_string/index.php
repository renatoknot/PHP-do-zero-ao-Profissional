<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
</head>

    <h2>Inverter String</h2><br><br>
    
    <form method="POST">
        Palavra/frase: <br>
        <input type="text" name="frase" id=""><br><br>
        <input type="submit" value="Inverter"> <br><br>
    </form>
    
    <?php
        if(!empty($_POST['frase'])) {
            $invertida = strrev($_POST['frase']);
            echo "Frase invertida: ".$invertida;
        }
    ?>

</html> 