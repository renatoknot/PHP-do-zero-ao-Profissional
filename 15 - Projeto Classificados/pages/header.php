<? require 'config.php';?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Classificados</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="./" class="navbar-brand">Classificados</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])): ?>
                    <li><a href="#" style="cursor:default;color:white;">Olá <?php echo $_SESSION['name'];?></a></li>
                    <li><a href="meus-anuncios.php">Meus Anúncios</a></li> <!--Menu quando usuário estiver logado-->
                    <li><a href="sair.php">Sair</a></li>
                <? else : ?>
                    <li><a href="cadastre-se.php">Cadastre-se</a></li><!--Menu quando usuário estiver deslogado-->
                    <li><a href="login.php">Login</a></li>
                <? endif;?>
            </ul>
        </div>
    </nav>