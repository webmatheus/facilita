<?php

include('../incs/functions.php');
include('../incs/db_connect.php'); 

	//dados recebidos do form
	$_book_name = utf8_decode(antiInjection($_POST["new-book-name"]));
	$_book_renter_name = utf8_decode(antiInjection($_POST["new-renter-name"]));
	$_book_renter_type = antiInjection($_POST["new-renter-type"]);
	
	//insere emprestimo
	if ($_CONNECTION->query("INSERT INTO rents SET book_name='".$_book_name."', renter_name='".$_book_renter_name."', renter_type='".$_book_renter_type."'")){

		
		//retorna sucesso
		echo mysqli_insert_id($_CONNECTION);
		
		
	}else{

		echo mysqli_errno($_CONNECTION)." error"; 

	}
	

$_CONNECTION->close();