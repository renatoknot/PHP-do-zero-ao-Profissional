<?
    session_start();
    $n1 = random_int(0,10);
    $n2 = random_int(0,10);
    $_SESSION['r'] = $n1 + $n2;
?>
<h1>Verificado de Humanos</h1>

<form method="POST" action="verificador.php">
    <?=$n1?> + <?=$n2?> = <input type="number" name="resultado" id="">
    <input type="submit" value="Verificar">
</form>