$( document ).ready(function() {
 
		//form novo livro  ================================
		$('#form-new-book').submit(function(){	
			
			var bookName = $(this).find('#book-name').val();
			var authorName = $(this).find('#book-author').val();
			
			var dados = jQuery( this ).serialize();
			
				$.ajax({
				url: 'controllers/insert_book.php',
				cache: false,
				data: dados,
				type: "POST",  

					success: function(response){ 
						if (response.indexOf('err') != -1){
							Materialize.toast('Erro! Tente novamente', 5000);


						}else{
									
							$("#hold-book-items").prepend('<a href="#modal-see-book" class="modal-trigger book-item collection-item" bookid="'+response+'" bookname="'+bookName+'" author="'+authorName+'"><span class="booklistinfo">'+bookName+' - '+authorName+'</span></a>');

							
							//onclick itens livro
							$(".book-item").click(function() {
								var book_id = $(this).attr("bookId");
								$("#book_id").val(book_id);
							});	
							
							Materialize.toast('Livro adicionado!', 5000);							
							$("#modal-new-book").modal('close');	

						}


					}

				})

			
			return false

		});
		
		//form nova locacao/aluguel de livro  ================================
		$('#form-new-rent').submit(function(){	
			
			var bookName = $(this).find('#new-book-name').val();
			var renterName = $(this).find('#new-renter-name').val();
			var renterType = $(this).find('#new-renter-type option:selected').val();
			var renterTypeNominal = $(this).find('#new-renter-type option:selected').html();
			var rentDays = $(this).find('#new-renter-type option:selected').attr("days");
			
			var dados = jQuery( this ).serialize();
			
				$.ajax({
				url: 'controllers/insert_rent.php',
				cache: false,
				data: dados,
				type: "POST",  

					success: function(response){ 
						if (response.indexOf('err') != -1){
							Materialize.toast('Erro! Tente novamente', 5000);
						

						}else{
									
							$("#hold-rent-items").prepend('<a href="#modal-see-rent" class="modal-trigger rent-item collection-item" rentId="'+response+'" bookname="'+bookName+'" username="'+renterName+'" usertype="'+renterType+'"><span class="booklistinfo">'+renterName+' | '+bookName+'</span></a>');

							
							//onclick itens aluguel
							$(".rent-item").click(function() {
								var book_id = $(this).attr("rentId");
								$("#rent_id").val(book_id);
							});	
						
						
							//adiciona ticket na tela
							$("#result_rent").show();
							
							$("ul#ticket_rent").empty();
							
							$("ul#ticket_rent").append('<li><strong>Livro:</strong> '+bookName+'</li>');
							$("ul#ticket_rent").append('<li><strong>Nome do locatário:</strong> '+renterName+'</li>');
							$("ul#ticket_rent").append('<li><strong>Tipo de locatário:</strong> '+renterTypeNominal+'</li>');
							$("ul#ticket_rent").append('<li><strong>Duração:</strong> <text>'+rentDays+'</text> dias</li>');

							
							Materialize.toast('Empréstimo registrado! Veja recibo de locação', 5000);							
							$("#modal-new-rent").modal('close');	

						}

					}

				})
				
				//reseta form
				$(this).trigger("reset");
			
			
			return false

		});
		
		
});