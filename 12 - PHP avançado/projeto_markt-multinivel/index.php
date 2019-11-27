<?
    session_start();
    require 'config.php';
    require 'funcoes.php';

    if(empty($_SESSION['mmnlogin'])){
       header("Location: login.php");
       exit; 
    }

    $id = $_SESSION['mmnlogin'];

    $sql = $pdo->prepare("SELECT 
    usuarios.nome,
    patentes.nome as p_nome
    FROM usuarios 
    LEFT JOIN patentes ON patentes.id = usuarios.patente
    WHERE usuarios.id =:id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount() >0){
        $sql = $sql->fetch();
        $nome = $sql['nome'];
        $p_nome = $sql['p_nome'];
    } else {
        header("Location: login.php");
        exit; 
    }

    $lista = listar($id, $limite);
?>

<h1>Sistema de Marketing Multinivel</h1><br><br>

<h2><?="Usuário logado: ".$nome.'('.$p_nome.')';?></h2> <br>

<a href="cadastro.php">Cadastrar novo Usuário</a>
<br>
<a href="sair.php">Sair</a>

<hr>

<h4>Lista de cadastros</h4>


<? exibir($lista);?>