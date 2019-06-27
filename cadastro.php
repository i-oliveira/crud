<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastro - CRUD</title>
	<meta charset="utf-8">
</head>
<body>


	<?php


	if(empty($_POST['nome']) || empty($_POST['idade']) || empty($_POST['email']))
	{

		echo '<h2>ATENÇÃO: Preencha todos os campos para continuar.</h2>';

	}
	else
	{
		$nome	= $_POST['nome'];
		$idade	= $_POST['idade'];
		$email	= $_POST['email'];


		include 'conn.php';


		$sql = "INSERT INTO tb_contatos (nome, idade, email)
		 		VALUES ('$nome', $idade, '$email')";
		$result = mysqli_query($conn, $sql);
		$linhas = mysqli_affected_rows($conn);


		if($linhas > 0)
		{
			echo '<h3>Contato cadastrado com sucesso!</h3>';
		}
		else
		{
			echo '<h3>Erro ao cadastrar contato. Tente novamente ou contate o suporte</h3>';
		}


	}



	?>

</body>
</html>
