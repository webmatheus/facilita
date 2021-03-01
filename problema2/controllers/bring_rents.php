<?php

include('../incs/functions.php');
include('../incs/db_connect.php'); 

		//traz dados dos colaboradores
		$_bring_rents = $_CONNECTION->query("SELECT * FROM rents ORDER BY Id Desc");
		$_quantity_rents = $_bring_rents->num_rows;

	//verifica se existe pelo menos 1
	if($_quantity_rents > 0){

		$p = 0;
		
		//monta vetor com locacoes a serem retornadas
		while($_value = $_bring_rents->fetch_assoc()){

			$JsoNed[$p] = [
				"Id" => $_value["Id"],
				"book_name" => utf8_encode($_value["book_name"]),
				"renter_name" => utf8_encode($_value["renter_name"]),
				"renter_type" => $_value["renter_type"],
			];
						
			$p++;
		}
		
		
	}else{
		echo "no-value";
	}
	

	echo json_encode($JsoNed);


$_CONNECTION->close();