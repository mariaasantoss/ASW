<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
	<title>ReFood FCUL</title>
	<link rel="icon" type="image/png" href="./images/logo2.png"/>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="preconnect" href="https://fonts.googleapis.com"> 
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Unica+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Unica+One&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../main_style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/style.css">
  </head>

  <body>
	<div class="w3-top">

		<div class = " w3-bar w3-white w3-padding w3-card w3-dark-gray" style = "letter-spacing:4px;"; >
		  <img src="../images/logo.png" width="120" height="50" >
		 
		  <div class="w3-right w3-hide-small">
			

			<a href="../sobre.html" class="w3-bar-item w3-button">Sobre</a>
			<a href="../update/updateInstituicao.html" class="w3-bar-item w3-button">A instituição</a>
			<a href="../Login_v1/index.html" class="w3-bar-item w3-button">Logout</a>

			<?php
                    if (isset($_SESSION['utilizador'])) {
						return isset($_SESSION['utilizador']);
                         // echo "<a href='../update/update.html' class='w3-bar-item w3-button'>$_SESSION['utilizador']</a>";
                    }
            ?>
			<?php
            if (isset($_SESSION['utilizador'])) {
                echo "<a class='btn btn-outline-danger' href='sair.php'>sair</a>";
            }
            ?>
  		
  		</div>
		</div>
            
		  </div>
          
	  
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="active">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
				<div class="p-4">
		  		
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#about"><span class="fa fa-home mr-3"></span> Página Inicial</a>
	          </li>
			  <li class="active">
	            <a href="#about"><span class="fa fa-home mr-3"></span> Página Inicial</a>
	          </li>
	          <li>
	              <a href="Register/register.html"><span class="fa fa-user mr-3"></span> Inscrever-me</a>
	          </li>
	          <li>
              <a href="#"><span class="fa fa-briefcase mr-3"></span> Faqs</a>
	          </li>
	          <li>
              <a href="#"><span class="fa fa-sticky-note mr-3"></span> Contactos</a>
	          </li>
	          <li>
              <a href="#"><span class="fa fa-paper-plane mr-3"></span> Ajuda</a>
	          </li>
	        </ul>

	        <div class="mb-5">
						<h3 class="h6 mb-3">Quero receber as novidades</h3>
						<form action="#" class="subscribe-form">
	            <div class="form-group d-flex">
	            	<div class="icon"><span class="icon-paper-plane"></span></div>
	              <input type="text" class="form-control" placeholder="Insira o seu email">
	            </div>
	          </form>
					</div>

				<ul class="list-unstyled components mb-5">
						<li>
							 <span class="fa fa-map mr-3"></span>Av. Mediterrâneo nº 6 A
							 1990-155 Lisboa
						</li>
						<br>
						<li>
							<span class="fa fa-phone"></span> 218 947 100 <br>969 888 314
						</li>
						<br>
						<li>
							<span class="fa fa-envelope"></span> geral@re-food.org
						</li>
						<br>
						<li>
							<span class="fa fa-calendar-check-o"></span> Segunda a Sexta-feira 9h30-13h30
							Sábados, Domingos e Feriados: Fechado
						</li>
				</ul>

	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
		<h1>ReFood-UL</h1>
		<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
		</header>
		
		<div class="w3-content" style="max-width:1100px">
			<div class="w3-row w3-padding-64" id="about">
				<div class="w3-col m6 w3-padding-large w3-hide-small">
				 <img src="../images/1.png" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
				</div>
			
				<div class="w3-col m6 w3-padding-large">
				  <h2 class="w3-center">Sobre a ReFood</h2><br>
				  <p class="w3-large"> Com o objetivo de lutar contra o desperdício alimentar e
					  simultaneamente ajudar pessoas com dificuldades a reFood é um movimento de voluntariado 
					  que junta várias pessoas de diversos meios para ajudar estas causas.
				  </p>
				  <p class="w3-large">Juntos defendemos o meio ambiente e os mais necessitados</p>
				  <br>
				</div>

				<div style="margin-left: 150px;">
				  <p class="w3-large w3-text-grey w3-hide-medium"> Essa pessoa agora podes ser tu. Junta os teus amigos e venham
					ajudar quem mais precisa! 
				  </p>
				  <a style="margin-left: 300px;" href="Register/register.html" ><button  class="button1">Inscrever-me</button></a>
				</div>

			  </div>
			  
			  <hr>
			  <img src="../images/funcionamento.png" width="700" height="400" style="margin-left: 190px; margin-bottom: 100px;">
			  
			
			</div>
			<br>
			<br>
			
			<footer class="w3-center w3-light-grey w3-padding-32">
			  <p>Aplicações e Serviços na Web <a  title="W3.CSS" target="_blank" class="w3-hover-text-green"></a></p>
			  <p>Ângelos Bastos 56944; Francisco Ferreira 56918; Maria Santos 56915; Nuno Pereira 56933  </p>
			</footer>

			
      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>