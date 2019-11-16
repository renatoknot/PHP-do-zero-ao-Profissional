<?
    require 'config.php';
    if(!empty($_POST['email'])){
        $email = $_POST['email'];

        $sql = "SELECT * FROM usuarios where email = :email";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":email", $email);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $sql = $sql->fetch();
            $id = $sql['id'];

            $token = md5(time().rand(0, 99999).rand(0, 99999));

            $sql = "INSERT INTO usuarios_token (id_usuario, hash, expira_em) VALUES (:id_usuario, :hash, :expira_em)";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(":id_usuario", $id);
            $sql->bindValue(':hash', $token);
            $sql->bindValue(':expira_em', date('Y-m-d H:i', strtotime('+1 day')));
            $sql->execute();

            $link = "http://localhost/phpavancado/esqueci-senha/redefinir.php?token=".$token; 
            $mensagem = "Acesse seu e-mail, e clique no link para redefinir sua senha:<br>".$link;

            $assunto = "Redefinição de senha";
            $headers = "From: seuemail@seusite.com.br"."\r\n".
                       'X-Mailer: PHP/'.phpversion();
            
            // mail($email, $assunto, $mensagem, $headers);
            echo $mensagem;
            exit;
        }
    }
?>

<form method="post">
    Informe o e-mail cadastrado: <br>
    <input type="email" name="email" id=""><br><br>

    <input type="submit" value="Enviar">
</form>