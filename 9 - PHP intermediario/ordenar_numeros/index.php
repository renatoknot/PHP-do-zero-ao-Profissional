<h3>Ordenador de números</h3>

<form  method="post">
    Escreva um número: <br>
    <input type="text" name="nums" id=""><br>
    <input type="submit" value="Enviar">
</form>

<?
 if(!empty($_POST['nums'])) {
    $nums = $_POST['nums'];
    $nums = explode(' ', $nums); //separa as string pelo espaço em branco
    sort($nums); // ordena os arrays pelos valores

    echo '<pre>';
    print_r($nums);
 }
 


?>
