<?
    session_start();
    require 'config.php';
    
    if(isset($_POST['email']) && !empty($_POST['email'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':senha',md5($senha));
        $sql->execute();

        if($sql->rowCount() > 0 ){
            $sql =  $sql->fetch();
            $id = $sql['id'];
            $ip = $_SERVER['REMOTE_ADDR']; //pegar o ip

            $_SESSION['lg'] = $id;

            $sql = "UPDATE usuarios SET ip= :ip WHERE id = :id";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(':id', $id);
            $sql->bindValue(':ip', $ip);
            $sql->execute();

            header("Location: index.php");
            exit;
        }
    }
?>

<h1>Login</h1>

<form method="POST">
    Email: <br>
    <input type="email" name="email"> <br><br>

    Senha: <br>
    <input type="password" name="senha"> <br> <br>

    <input type="submit" value="Entrar">
</form>