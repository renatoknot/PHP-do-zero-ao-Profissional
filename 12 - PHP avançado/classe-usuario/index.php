<?
    require 'usuario.php';
    $usuario = new Usuario();
    $usuario->setEmail('teste@hotmail.com');
    $usuario->setSenha('123');
    $usuario->setNome('Testador');
    $usuario->salvar();

    echo "Usuário criado com sucesso!";
?>    