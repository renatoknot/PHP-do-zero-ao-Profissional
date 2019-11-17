<?
    session_start();
    require 'config.php';
    require 'classes/usuarios.class.php';

    if(!empty($_POST['email'])){
        $email = addslashes($_POST['email']);
        $senha = md5($_POST['senha']);

        $usuario = new Usuarios($pdo);

        if($usuario->login($email, $senha)){
            header("Location: index.php");
            exit;
        } else {
            echo "Usuário e/ou senha inválidos";
        }
        
    }
?>
<h1>Login</h1>
<form method="post">
    E-mail: <br>
    <input type="email" name="email"><br><br>
    Senha: <br>
    <input type="password" name="senha"><br><br>
    <input type="submit" value="Login">
</form>