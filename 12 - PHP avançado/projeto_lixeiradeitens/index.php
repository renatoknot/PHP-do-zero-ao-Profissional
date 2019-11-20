<?php
require 'config.php';
?>
<h1>Lista de usuários</h1>
<table border="1" width="100%">
	<tr>
		<th>Nome</th>
		<th>E-mail</th>
		<th>Ações</th>
	</tr>
	<?php
	$sql = "SELECT * FROM usuarios WHERE status = '1'";
	$sql = $pdo->query($sql);
	if($sql->rowCount() > 0) {
		foreach($sql->fetchAll() as $usuario):
			?>
			<tr>
				<td><?=$usuario['nome']; ?></td>
				<td><?=$usuario['email']; ?></td>
				<td><a href="excluir.php?id=<?=$usuario['id'];?>">Excluir</a></td>
			</tr>
			<?php
		endforeach;
	}
	?>
</table>