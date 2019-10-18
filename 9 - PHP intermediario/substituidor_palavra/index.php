<h2>Substituidor Palavra</h2><br>
<form method="POST">
    Frase: <br>
    <input type="text" name="frase" id=""><br>
    Procurar por: <br>
    <input type="text" name="procurar" id=""><br>
    Substituir por: <br>
    <input type="text" name="substituir" id=""><br>
    <input type="submit" value="Enviar"><br><br>
</form>

<?
    if(!empty($_POST['frase']) && !empty($_POST['procurar']) && !empty($_POST['substituir'])) {
        $frase = $_POST['frase'];
        $procurar = $_POST['procurar'];
        $substituir = $_POST['substituir'];
        
        $novafrase = str_replace($procurar, $substituir, $frase );
        
        echo $novafrase;
    }

?>