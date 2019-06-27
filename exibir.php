<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Exibir - CRUD</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body class="container">

	<?php

	include 'menu.php';
	include 'conn.php';

	$sql = "SELECT * FROM tb_contatos";
	$result = mysqli_query($conn, $sql);
	$linhas = mysqli_affected_rows($conn);


	if($linhas > 0)
	{

		while ($registros = mysqli_fetch_assoc($result))
		{
			echo '<p>';
			foreach ($registros as $indice => $valor)
			{

				echo "<strong>$indice</strong>: " . $valor . "<br>";
			}

			echo '</p>';
		}
	}
	else
	{
		echo '<h3>Não há contatos cadastrados.</h3>';
	}


	?>


</body>
</html>
