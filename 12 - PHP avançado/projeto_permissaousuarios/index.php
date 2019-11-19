 <?
    session_start();
    require 'config.php';
    require 'classes/usuarios.class.php';
    require 'classes/documentos.class.php';

    if(!isset($_SESSION['logado'])){
        header("Location: login.php");
        exit;
    }
?>
    <h1>Sistema Logado</h1>
<?    
    $usuarios = new Usuarios($pdo);
    $usuarios->setUsuario($_SESSION['logado']);

    $documentos = new Documentos($pdo);
    $lista = $documentos->getDocumentos();
?>
<? if($usuarios->temPermissao('ADD')): ?>
    <a href="">Adicionar Documento</a><br><br>
<? endif;?> 
<?if($usuarios->temPermissao('SECRET')): ?>
    <a href="secreto.php">Página secreta</a> <br><br>
<? endif;?> 
<table border="1" width="100%">
    <tr>
        <th>Nome do Arquivo</th>
        <th>Ações</th>
    </tr>
    <? 
        foreach($lista as $item) : ?>
           <tr>
               <td><?=$item['titulo'];?></td>
               <td>
                <? if($usuarios->temPermissao('EDIT')): ?>
                   <a href="">Editar</a>
                <? endif;?>
                <? if($usuarios->temPermissao('DEL')): ?>
                   <a href="">Excluir</a>
                <? endif;?>
               </td>
           </tr> 
        <?endforeach;
    ?>
</table>
