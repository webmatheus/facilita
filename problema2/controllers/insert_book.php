<?php

include('../incs/functions.php');
include('../incs/db_connect.php'); 

	//dados recebidos do form
	$_book_name = utf8_decode(antiInjection($_POST["book-name"]));
	$_book_author = utf8_decode(antiInjection($_POST["book-author"]));
	
	//insere livro
	if ($_CONNECTION->query("INSERT INTO books SET book_name='".$_book_name."', book_author='".$_book_author."'")){

		
		//retorna sucesso
		echo mysqli_insert_id($_CONNECTION);
		
		
	}else{

		echo mysqli_errno($_CONNECTION)." error"; 

	}
	

$_CONNECTION->close();