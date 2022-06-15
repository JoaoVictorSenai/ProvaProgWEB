<?php  

	include_once('../config/connection.php');

	$id = 3;

	$title = "Post feito com método atualizar";
	$description = "descrevendo o post feito com o método atualizar no PHP.";

	$stmt = $connect->prepare("UPDATE posts SET title = :TITLE, description = :DESCRIPTION WHERE id = :ID");

	$stmt->bindParam(":ID", $id);
	$stmt->bindParam(":TITLE", $title);
	$stmt->bindParam(":DESCRIPTION", $description);

	$stmt->execute();

	echo "Cadastro atualizado";

?>