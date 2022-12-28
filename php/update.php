
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Atualizar informações pessoais</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../images/logo.png">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Register/css/util.css">
	<link rel="stylesheet" type="text/css" href="../Register/css/formulario.css">
<!--===============================================================================================-->
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


<body>

	<div class="w3-top">

		<div class = " w3-bar w3-white w3-padding w3-card w3-dark-gray" style = "letter-spacing:4px;">
		  <a href="main.php"> <img src="../images/logo.png" width="120" height="50">
		  </a>
		 
		  <div class="w3-right w3-hide-small">
			
			<a href="../sobre.html" class="w3-bar-item w3-button">Sobre</a>
			<a href="../update/preferencias.html" class="w3-bar-item w3-button">Preferências</a>
			<a href="update.php" class="w3-bar-item w3-button">Conta</a>
			<a href="../Login_v1/index.html" class="w3-bar-item w3-button">Logout</a>   

	  
		  </div>
		</div>
	  
	</div>
	
	<div class="limiter">
		<div class="container-login100">
		
			<div class="wrap-login100" class="login100-form validate-form">
                
					<img class="logo1" src ="../images/logo.png">
					<span class="login100-form-title">
						 Atualizar informações
					</span>
					<br>

					<form class="login100-form validate-form" action="../php/updateVoluntario.php" method="post">
                    <div class="wrap-input100 validate-input">
						
					<input class="input100" type="text" name="name" placeholder=name >
					<span class="focus-input100"></span>
					</div>


                    <div class="wrap-input100 validate-input">
						<input class="input100" type="date" name="data" placeholder="Data de nascimento" min="1900-01-01">
						<span class="focus-input100"></span>
						
					</div>

                    <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="genero" placeholder="genero">
						<span class="focus-input100"></span>
			
					</div>

					<div class="wrap-input100 validate-input">
						<div class="input100foto">
				
								<label for="files" style="cursor:pointer;" class="btn">Foto de perfil</label>
								<input id="files" style="visibility:hidden;" type="file">
								<span class="symbol-input100">
									<i for="files" class="fa fa-camera" aria-hidden="true"></i>
								</span>			

						</div>
							
					</div>

                    <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="concelho" placeholder="Concelho">
						<span class="focus-input100"></span>
			
					</div>

                    <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="distrito" placeholder="Distrito">
						<span class="focus-input100"></span>
			
					</div>

                    <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="freguesia" placeholder="Freguesia de residência">
						<span class="focus-input100"></span>
			
					</div>

                    <div class="wrap-input100 validate-input">
						<input class="input100" type="tel" name="telefone" placeholder="Telefone">
						<span class="focus-input100"></span>
			
					</div>

                    <div class="wrap-input100 validate-input">
						<input class="input100" type="number" name="ccidadao" placeholder="Nº cartão de cidadão">
						<span class="focus-input100"></span>
			
					</div>

                    <div class="wrap-input100 validate-input">
						<input class="input100" type="number" name="cconducao" placeholder="Nº carta de condução">
						<span class="focus-input100"></span>
			
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Email inválido">
						<input class="input100" type="text" name="email" placeholder="email">
						<span class="focus-input100"></span>
					
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Insira password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="container-login100-form-btn">
						
						<button class="login100-form-btn" type="submit">
							Atualizar
						</button>
					</div>				

</form>
</div>
</div>
</div>
</body>
</html>

