<h1>Digite o e-mail ou cpf do usuário</h1><br>

<form action="" method="get">
    <input type="text" name="campo" id="">
    <input type="submit" value="Pesquisar">
</form>
<hr>

<?
    if(!empty($_GET['campo'])){
        $campo = $_GET['campo'];

        try {
            $pdo = new PDO("mysql:dbname=projeto_pesquisacolunas;host=localhost;charset=utf8","root","");
        } catch(PDOException $e){
            echo "Erro: ".$e->getMessage();
        }

        $sql = "SELECT * FROM usuarios WHERE email = :email OR cpf = :cpf";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(':email', $campo);
        $sql->bindValue(':cpf', $campo);
        $sql->execute();

        if($sql->rowCount() > 0){
            $sql = $sql->fetch();

            echo "Nome: ".$sql['nome'];
        }
    }
?>