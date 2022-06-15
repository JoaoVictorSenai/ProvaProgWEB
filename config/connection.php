<?php  

	$host ="localhost";
	$user = "root";
	$password = "";
	$dbname = "atividade";

	try {

		$connect = new PDO("mysql:host=" . $host . "; dbname=" . $dbname, $user, $password);

		//echo "Conexão realizada com sucesso!";
		
	} catch (Exception $e) {
		
		//echo "Erro de conexão: " . $e;

	}

?>