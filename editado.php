<?php

if (empty($_POST['nome']) || empty($_POST['idade'] || empty($_POST['email'] || empty($_POST['id'])){

	header('location:gerenciar.php');
}else{

	$id = $_POST['id'];
	$idade = $_POST['idade'];
	$email = $_POST['email'];
	$nome = $_POST['nome'];

	include  'conn.php';

	$sql = "UPDATE tb_contatos SET nome = '$nome', idade = $idade, email = '$email' WHERE id = $id";

	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0){

		header('location:gerenciar.php');
	}else{

		header('location:gerenciar.php');
	}
}
?>