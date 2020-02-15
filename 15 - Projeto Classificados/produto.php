<?php 
    require 'pages/header.php';
    require 'classes/anuncios.class.php';
    require 'classes/usuarios.class.php';

    $a = new Anuncios();
    $u = new Usuarios();

    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = addslashes($_GET['id']);
    } else {
        ?>
        <script type="text/javascript">window.location.href='index.php'</script>
        <?php
        exit;
    }
    
    $info = $a->getAnuncio($id);
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <div class="carousel slide" data-ride="carousel" id="meuCarousel">
                    <div class="carousel-inner" role="listbox">
                        <? foreach($info['fotos'] as $chave => $foto) : ?>
                            <div class="item <?= ($chave == '0') ? 'active' : '';?>">
                                <img src="assets/images/anuncios/<?=$foto['url'];?>" >
                            </div>
                        <? endforeach;?>
                    </div>
                    <a href="#meuCarousel" class="left carousel-control" role="button" data-slide="prev">
                        <span><</span>
                    </a>
                    <a href="#meuCarousel" class="right carousel-control" role="button" data-slide="next">
                        <span>></span>
                    </a>
                    
                </div>
            </div>
            <div class="col-sm-8">
                <h1><?=$info['titulo'];?></h1>
                <h4><?=$info['categoria'];?></h4>
                <p><?=$info['descricao'];?></p> <br><br>

                <h3>R$ <?=number_format($info['valor'],2);?></h3>
                <h4>Telefone: <?=$info['telefone'];?></h4>
            </div>
        </div>
    </div>

<?php require 'pages/footer.php';?>
   