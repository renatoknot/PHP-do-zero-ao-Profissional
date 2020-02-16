<?php 
    require 'pages/header.php';
    require 'classes/anuncios.class.php';
    require 'classes/usuarios.class.php';
    require 'classes/categorias.class.php';

    $a = new Anuncios();
    $u = new Usuarios();
    $c = new Categorias();

    $filtros = array(
        'categoria' => '',
        'preco' => '',
        'estado' => ''
    );

    if(isset($_GET['filtros'])){
        $filtros = $_GET['filtros'];
    }

    $total_anuncios = $a->getTotalAnuncios($filtros);
    $total_usuarios = $u->getTotalUsuarios();
    $categorias = $c->getCategorias();
    
    

    //paginação
    $p =1;
    if(isset($_GET['p']) && !empty($_GET['p'])){
        $p = addslashes($_GET['p']);
    }
    
    $por_pagina = 2;
    $total_paginas = ceil($total_anuncios / $por_pagina);
    $anuncios = $a->getUltimosAnuncios($p, $por_pagina, $filtros);
?>
    <div class="container-fluid">
        <div class="jumbotron">
            <h2>Nós temos hoje <?=$total_anuncios;?> anúncios</h2>
            <p>E mais de <?=$total_usuarios;?> usuários cadastrados</p>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <h4>Pesquisa Avançada</h4>
                <form method="GET">
                    <div class="form-group">
                        <label for="categoria">Categoria:</label>
                        <select name="filtros[categoria]" class="form-control" id="categoria">
                            <option ></option>
                            <?foreach($categorias as $categoria) : ?>
                                <option value="<?=$categoria['id'];?>" <?=($categoria['id'] == $filtros['categoria']) ? 'selected = "selected"' : '';?>><?=$categoria['nome'];?></option>
                            <?endforeach;?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="preco">Preço:</label>
                        <select name="filtros[preco]" class="form-control" id="preco">
                            <option ></option>
                            <option value="0-50" <?=($filtros['preco'] == "0-50") ? 'selected = "selected"' : '';?>>R$ 0 - 50</option>
                            <option value="51-100" <?=($filtros['preco'] == "51-100") ? 'selected = "selected"' : '';?>>R$ 51 - 100</option>
                            <option value="101-200" <?=($filtros['preco'] == "101-200") ? 'selected = "selected"' : '';?>>R$ 101 - 200</option>
                            <option value="201-500" <?=($filtros['preco'] == "201-500") ? 'selected = "selected"' : '';?>>R$ 201 - 500</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="estado">Estado de conservação:</label>
                        <select name="filtros[estado]" class="form-control" id="estado">
                            <option ></option>
                            <option value="0" <?=($filtros['estado'] == "0") ? 'selected = "selected"' : '';?>>Ruim</option>
                            <option value="1" <?=($filtros['estado'] == "1") ? 'selected = "selected"' : '';?>>Bom</option>
                            <option value="2" <?=($filtros['estado'] == "2") ? 'selected = "selected"' : '';?>>Ótimo</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Filtrar" class="btn btn-default">
                    </div>
                </form>
            </div>
            <div class="col-sm-9">
                <h4>Últimos Anúncios</h4>
                <table class="table table-striped">
                    <tbody>
                        <?php foreach($anuncios as $anuncio) : ?>
                        <tr>
                            <td>
                                <?php if(!empty($anuncio['url'])) : ?>
                                    <img src="assets/images/anuncios/<?=$anuncio['url'];?>" border="0" height="50">
                                <?php else :?>
                                    <img src="assets/images/default.jpg" height="50" border="0">
                                <?php endif;?>
                            </td>
                            <td>
                                <a href="produto.php?id=<?=$anuncio['id'];?>"><?=$anuncio['titulo'];?></a> <br>
                                <?=$anuncio['categoria'];?>
                            </td>
                            <td>
                                R$<?=number_format($anuncio['valor'],2);?>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
                <ul class="pagination">
                <?php for($q=1; $q<=$total_paginas; $q++) : ?>
                    <li class="<?=($p == $q) ? 'active': '';?>"><a href="index.php?
                    <? $w = $_GET;
                        $w['p'] = $q;
                        echo http_build_query($w);// inserido para remover o bug da paginação ao ter resultados filtrados
                    ?>
                    "><?=$q;?></a></li>
                <?php endfor;?>
                </ul>
            </div>
        </div>
    </div>

<?php require 'pages/footer.php';?>
   