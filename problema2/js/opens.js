$( document ).ready(function() {
	
	//modal ver cadastro de livro
	$('#modal-see-book').modal({ 

	 dismissible: true,

      ready: function(modal, trigger) {
			var id_book = $("#book_id").val();
			var author =   $('.book-item[bookId="'+id_book+'"]').attr("author");
			var book_name =   $('.book-item[bookId="'+id_book+'"]').attr("bookname");

			$('#book-name-see').val(book_name);
			$('#book-author-see').val(author);
			
			//refresh campos
			Materialize.updateTextFields();
      },

      complete: function() { 


	  } // Callback for Modal close
	});	
	
	
	//modal ver locacao de livro
	$('#modal-see-rent').modal({ 

	 dismissible: true,

      ready: function(modal, trigger) {
			var id_rent = $("#rent_id").val();
			var user_type =   $('.rent-item[rentId="'+id_rent+'"]').attr("usertype");
			var user_name =   $('.rent-item[rentId="'+id_rent+'"]').attr("username");
			var book_name =   $('.rent-item[rentId="'+id_rent+'"]').attr("bookname");

			$('#rent-book-name').val(book_name);
			$('#rent-renter-name').val(user_name);
			
			//refresh campos
			Materialize.updateTextFields();
			
			//marca select tipo
			$("#renter-type option").each(function() {

			  if ($(this).val() == user_type){
				  $(this).attr("selected", "selected");
				  $(this).prop("selected", true);
				  $(this).val(user_type);
				  $('select').material_select();

			  }

			});
      },

      complete: function() { 


	  } // Callback for Modal close
	});	
	
});


