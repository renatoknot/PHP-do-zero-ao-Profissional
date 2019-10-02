<form method="POST">
    <h1>Qual seu nome?</h1><br><br>
    <input type="text" name="nome"><br>
    <input type="submit" value="Enviar">
</form>

<?php 
    if(!empty($_POST['nome'])) {
        echo "Olá ".$_POST['nome'].", tudo bem?";
    }
?>