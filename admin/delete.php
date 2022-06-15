<?php  

	require_once('../config/connection.php');

	$stmt = $connect->prepare("DELETE FROM posts WHERE id = :ID");

	$id = 5;

	$stmt->bindParam(":ID", $id);

	$stmt->execute();

?>