<?php	include ("configs.php");	
	$_CONNECTION = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	if ($_CONNECTION->connect_errno) {
		printf("Falha, contate o Administrador: %s\n", $_CONNECTION->connect_error);
		exit();
	}

?>