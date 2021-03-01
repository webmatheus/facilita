<?php

include('../incs/functions.php');
include('../incs/db_connect.php'); 

		//traz dados dos colaboradores
		$_bring_books = $_CONNECTION->query("SELECT * FROM books ORDER BY Id Desc");
		$_quantity_books = $_bring_books->num_rows;

	//verifica se existe pelo menos 1
	if($_quantity_books > 0){

		$p = 0;
		
		//monta vetor com livros a serem retornados
		while($_value = $_bring_books->fetch_assoc()){

			$JsoNed[$p] = [
				"Id" => $_value["Id"],
				"book_name" => utf8_encode($_value["book_name"]),
				"book_author" => utf8_encode($_value["book_author"]),
			];
						
			$p++;
		}
		
		
	}else{
		echo "no-value";
	}
	

	echo json_encode($JsoNed);


$_CONNECTION->close();