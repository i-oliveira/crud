<?php
	if(!empty($_GET['id']))
	{
		$id = $_GET['id'];
		
		include 'conn.php';
		
		$sql = "DELETE FROM tb_contatos WHERE id = $id";
		
		$result = mysqli_query($conn,$sql);
	
	}

	header('location:gerenciar.php');
?>