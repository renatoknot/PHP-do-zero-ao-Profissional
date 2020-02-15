<?php require 'pages/header.php';?>
<?php
    if(empty($_SESSION['cLogin'])){
        ?>
        <script type="text/javascript">window.location.href='login.php'</script>
        <?php
        exit;
    }


    //adicionando anuncio
    require 'classes/anuncios.class.php';
    $a = new Anuncios();
    
    if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
        $titulo = addslashes($_POST['titulo']);
        $categoria = addslashes($_POST['categoria']);
        $valor = addslashes($_POST['valor']);
        $descricao = addslashes($_POST['descricao']);
        $estado = addslashes($_POST['estado']);
        if(isset($_FILES['fotos'])){
            $fotos = $_FILES['fotos'];
        }else {
            $fotos = [];
        }
        

        $a->editAnuncio($titulo, $categoria, $valor, $descricao, $estado, $fotos, $_GET['id']);
        ?>
        <div class="alert alert-success">
            Anúncio editado com sucesso!
        </div>
        <?php
    }

    //editando anuncio
    if(isset($_GET['id']) && !empty($_GET['id'])){
        $info = $a->getAnuncio($_GET['id']);
    } else {
        ?>
        <script type="text/javascript">window.location.href='login.php'</script>
        <?php
        exit;
    }
    
?>
<div class="container">
    <h1>Meus Anúncios - Editar Anúncio</h1>

    <form  method="POST" enctype="multipart/form-data"  >
        <div class="form-group">
            <label for="categoria">Categoria</label>
            <select name="categoria" id="categoria" class="form-control">
                <?php 
                    require 'classes/categorias.class.php';
                    $c = new Categorias();
                    $categorias = $c->getCategorias();
                    foreach($categorias as $categoria) :
                ?>
                    <option value="<?=$categoria['id'];?>" <?=($info['id_categoria'] == $categoria['id']) ? 'selected="selected"' : ''; ?>><?=$categoria['nome'];?></option>
                <?php endforeach;?>
            </select>
        </div>

        
        <div class="form-group">
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" id="titulo" class="form-control" value="<?=$info['titulo'];?>">
        </div>
        <div class="form-group">
            <label for="valor">Valor</label>
            <input type="text" name="valor" id="valor" class="form-control" value="<?=$info['valor'];?>">
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea  name="descricao" id="descricao" class="form-control"><?=$info['descricao'];?></textarea>
        </div>
        <div class="form-group">
            <label for="estado">Estado de Conservação</label>
            <select name="estado" id="estado" class="form-control" >
                <option value="0" <?=($info['estado'] == 0) ? 'selected="selected"' : ''; ?>>Ruim</option>
                <option value="1" <?=($info['estado'] == 1) ? 'selected="selected"' : ''; ?>>Bom</option>
                <option value="2" <?=($info['estado'] == 2) ? 'selected="selected"' : ''; ?>>Ótimo</option>
            </select>
        </div>
        <div class="form-group">
            <label for="add_foto">Fotos do anúncio</label>
            <input type="file" name="fotos[]" multiple> <br>

            <div class="panel panel-default">
                <div class="panel-heading">Fotos do Anúncio</div>
                <div class="panel-body">
                        <?php foreach($info['fotos'] as $foto) : ?>
                        <div class="foto_item">
                            <img src="assets/images/anuncios/<?=$foto['url'];?>" class="img-thumbnail" border="0"><br> <br>
                            <a href="excluir-foto.php?id=<?=$foto['id'];?>" class="btn btn-default">Excluir imagem</a> <br>
                        </div>
                        <?php endforeach;?>
                </div>
            </div>
        </div>

        <input type="submit" value="Salvar" class="btn btn-default">
    </form>
</div>
<?php require 'pages/footer.php';?>