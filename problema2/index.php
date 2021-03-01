<?php include ("tmpl/header.php"); ?>
<body>
<div class="container">
<section class="sectItens" id="top">
<img src="img/bibliteca_facilita.jpg" />
</section>
<!-- menu lateral-->
  <ul id="slide-out" class="side-nav">
    <li><div class="user-view">
      <div class="background">
        <img src="img/office.jpg">
      </div>
      <a href="#!user"><img class="circle" src="img/yuna.jpg"></a>
      <a href="#!name"><span class="white-text name">Operador de teste</span></a>
      <a href="#!email"><span class="white-text email">operador1@biblitecafacilita.com.br</span></a>
    </div></li>
    <li><a href="#!"><i class="material-icons">person</i>Minha conta</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Biblioteca</a></li>
    <li><a class="waves-effect" href="#!">Livros</a></li>
    <li><a class="waves-effect" href="#!">Empréstimos</a></li>
  </ul>
  <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
  <section id="main" class="sectItens row">
  <div class="col s6">
    <h2 class="maintitle">Livros disponíveis</h2>
		<div class="collection" id="hold-book-items">
		

      </div>
	  
  </div>
  <div class="col s6">
  <h2 class="maintitle">Locações recentes</h2>
		<div class="collection" id="hold-rent-items">
		

      </div>
	   
  </div>

	    <div class="row">
			
			<div class="col s12" id="result_rent">
			<h2 class="maintitle">Recibo de locação</h2>
			<ul id="ticket_rent">
				<li><strong>Nome do locatário:</strong> Matheus Rocha cardoso</li>
				<li><strong>Tipo de locatário:</strong> Professor</li>
				<li><strong>Duração:</strong> <text>12</text> dias</li>
			</ul>
			</div>
		</div>
		<div class="row center">
<a class="btn-floating btn-large waves-effect waves-light red modal-trigger" href="#modal-new-rent"><i class="material-icons">add</i></a>
  </div>
  </section>
</div>

<?php include ("tmpl/modals.php"); ?>
</body>
</html>