<?php
    session_start();

    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);

        $dsn = "mysql:dbname=blog;host:localhost";
        $dbuser ="root";
        $dbpass ="";

        try {
            $db = new PDO($dsn,$dbuser,$dbpass);

            $sql = $db->query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");

            if($sql->rowCount() > 0) {
                $dado = $sql->fetch();
                $_SESSION['id'] = $dado['id'];

                header("Location: index.php");
            }

        } catch(PDOException $e) {
            echo "Falhou: ".$e->getMessage();
        }
    }
?>

Página de login

<form method="POST">
    Email: <br>
    <input type="email" name="email"> <br><br>

    Senha: <br>
    <input type="password" name="senha"> <br><br>

    <input type="submit" value="Entrar">
</form>