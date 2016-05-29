<?php 

	session_start();

	if (isset($_SESSION['user'])) {
		header('Location: index.php');
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Iniciar Sesion</title>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="css/materialize.min.css">
	<link rel="stylesheet" href="css/style-iniciar_sesion.css">
</head>
<body id="cuerpo2">
	<div class="container">
		<div class="iniciar-form row z-depth-3 blue lighten-3 card">
			<h2>Iniciar sesion</h2>
     		<form action="login.php" method="post" >
				<div class="input-field col s12">
					<i class="material-icons prefix">perm_identity</i>
					<input class="correo" id="email" type="email" name="email" required><br>
					<label for="email">Correo</label>
				</div>
				<div class="input-field col s12">
					<i class="material-icons prefix">person_pin</i>
					<input class="password" id="password" type="password" name="password" required><br>
					<label for="password">Contraseña</label>
				</div>
				<button id="boton2" class="btn waves-effect waves-light" type="submit">
						Iniciar Sesion
					</button>
			</form>
   		 </div>
	</div>


	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/materialize.min.js"></script>
</body>
</html>