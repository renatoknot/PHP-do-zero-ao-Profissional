<?php
    if(isset($_POST['nome']) && !empty($_POST['nome'])){
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $msg = addslashes($_POST['mensagem']);

        $para ="renatoslip@hotmail.com";
        $assunto = "Formulário de contato";
        $corpo = "Nome: ${nome} - E-mail: ${email} - Mensagem: ${msg}";
        $cabecalho = "From: renatoknot18@gmail.com"."\r\n".
                       "Reply-to: ".$email."\r\n"."X-Mailer: PHP/".phpversion();

        mail($para, $assunto, $corpo, $cabecalho);
        echo "<h2>Email enviado com sucesso!</h2>";
        exit;
    }
?>
<form action="" method="post">
    Nome: <br>
    <input type="text" name="nome" id=""> <br><br>
    E-mail:  <br>
    <input type="email" name="email" id=""> <br><br>

    Mensagem: <textarea name="mensagem" id="" cols="50" rows="10"></textarea><br><br>

    <input type="submit" value="Enviar">
</form>