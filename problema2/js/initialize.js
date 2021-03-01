 $( document ).ready(function() {

	 //inicializa carregamento dos livros ============================
	$.get( "controllers/bring_books.php", function( data ) {
		//existe 
		if (data.indexOf("no-value") == -1){
			var jsdata = JSON.parse(data);

			for(var z=0; z<jsdata.length; z++){
				
													
				$("#hold-book-items").prepend('<a href="#modal-see-book" class="modal-trigger book-item collection-item" bookid="'+jsdata[z].Id+'" bookname="'+jsdata[z].book_name+'" author="'+jsdata[z].book_author+'"><span class="booklistinfo">'+jsdata[z].book_name+' - '+jsdata[z].book_author+'</span></a>');

	
			} 
			
				//onclick itens livro
				$(".book-item").click(function() {
					var book_id = $(this).attr("bookId");
					$("#book_id").val(book_id);
				});	
			

		}
	});
	
	
	 //inicializa carregamento de locacoes ============================
	$.get( "controllers/bring_rents.php", function( data ) {
		//existe 
		if (data.indexOf("no-value") == -1){
			var jsdata = JSON.parse(data);

			for(var z=0; z<jsdata.length; z++){
				
													
				$("#hold-rent-items").append('<a href="#modal-see-rent" class="modal-trigger rent-item collection-item" rentId="'+jsdata[z].Id+'" bookname="'+jsdata[z].book_name+'" username="'+jsdata[z].renter_name+'" usertype="'+jsdata[z].renter_type+'"><span class="booklistinfo">'+jsdata[z].renter_name+' | '+jsdata[z].book_name+'</span></a>');

	
			} 
			
				//onclick itens aluguel
				$(".rent-item").click(function() {
					var book_id = $(this).attr("rentId");
					$("#rent_id").val(book_id);
				});	
			

		}
	});
	
	 
 });