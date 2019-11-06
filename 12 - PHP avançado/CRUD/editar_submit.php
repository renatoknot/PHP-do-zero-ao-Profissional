<?
    include 'contato.class.php';
    $contato = new Contato();

    if(!empty($_POST['id'])) {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        if(!empty($email)) {
            $contato->editar($nome,$email, $id);
        }
        
        header("Location: index.php");
    }