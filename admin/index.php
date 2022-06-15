<?php include_once('../config/connection.php') ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulário</title>
</head>
<body>
	<h1>Postar</h1>
	<form action="insert.php" method="POST">
		<div>
			<label>Digite o título</label>
			<input type="text" name="title" required>
		</div>
		<div>
			<label>Digite a descrição</label>
			<input type="text" name="description" required>
		</div>
		<div>
			<input type="submit" name="ENVIAR">
		</div>
	</form>
</body>
</html>