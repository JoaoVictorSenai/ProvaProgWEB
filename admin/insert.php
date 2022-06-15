<?php  

	include_once('../config/connection.php');

	$title = $_POST['title'];
	$description = $_POST['description'];

	$stmt = $connect->prepare("INSERT INTO posts (title, description) VALUES(:TITLE, :DESCRIPTION)");

	$stmt->bindParam(':TITLE', $title);
	$stmt->bindParam(':DESCRIPTION', $description);

	$stmt->execute();

	echo "Cadastrado com sucesso! cheque o banco de dados!";

?>