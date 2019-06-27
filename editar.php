<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Editar -  CRUD</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body class="container">
	<?php include 'menu.php';

	$form = false; //ainda nao sei se o formulário será carregado ou nao

	if(empty($_GET['id']))
	{
		echo '<h3 class="alert-warning">Não foi possível carregar o formulário</h3>';
	}else{
		include 'conn.php';
		$id = $_GET['id'];
		$sql = "Select nome,idade,email FROM tb_contatos WHERE id = $id";
		$result = mysqli_query($conn, $sql);

		if (mysqli_affected_rows($conn) > 0){
			$contato = mysqli_fetch_assoc($result);
			// o formulário poderá ser carregado, será usada em teste futuro
			$form = true;
		}
	} if ($form == true); {
?>
	<form action="editado.php" method="post">


		<h2>Cadastro de Contato</h2>

		<div class="form-group">
			<label>Nome:</label><br>
			<input type="text" name="nome"
			value="<?php echo $contato['nome']?>">
		</div>

		 <div class="form-group">
			<label>Idade:</label><br>
			<input type="number" name="idade" min="1"
			value="<?php echo $contato['idade']?>">
		</div>

		 <div class="form-group">
			<label>E-mail:</label><br>
			<input type="email" name="email"
			value="<?php echo $contato['email']?>">
		</div>

		<input type ="hidden" name="id
		value="<?php echo $id?>>

		<button type="submit">Salvar</button>

	</form>
 <?php } ?>
</div>

</body>
</html>
