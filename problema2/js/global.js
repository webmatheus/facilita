$( document ).ready(function() {

	//inicializa select
	$('select').material_select();
	
	//inicializa menu lateral
	$('.button-collapse').sideNav();

	//inicializa modal
	$('.modal').modal();
	
	//oculta ticket padrao
	$("#result_rent").hide();
	
	//inicializa autocomplete
  $('input.autocomplete').autocomplete({
    data: {
      "Senhor dos anéis - J.R.R Tolkien": null,
      "Vida de droga - Walcyr carrasco": null,
      "Harry Potter - JK Rowling": null,
      "Um curso de Cálculo - Hamilton Luis": null
    },
    limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
    onAutocomplete: function(val) {
      // Callback function when value is autcompleted.
    },
    minLength: 1, // The minimum length of the input for the autocomplete to start. Default: 1.
  });
  
  
});