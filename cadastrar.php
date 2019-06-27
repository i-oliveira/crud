<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastrar - CRUD</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body class="container">
	<?php include 'menu.php'; ?>
	
	
	<form action="cadastro.php" method="post">

		
		<h2>Cadastro de Contato</h2>
		
		<div class="form-group">
			<label>Nome:</label><br>
			<input type="text" name="nome">
		</div>

		 <div class="form-group">
			<label>Idade:</label><br>
			<input type="number" name="idade" min="1">
		</div>

		 <div class="form-group">
			<label>E-mail:</label><br>
			<input type="email" name="email">
		</div>

		<button class="btn btn-primary" type="submit">Salvar</button>

	</form>

</div>

</body>
</html>