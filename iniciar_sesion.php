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
	<link rel="stylesheet" href="css/materialize.min.css">
	<link rel="stylesheet" href="css/style-iniciar_sesion.css">
</head>
<body>
	<div class="row z-depth-3 blue lighten-3">
		<h2>Iniciar sesion</h2>
     	<form action="login.php" method="post" >
			<div class="input-field col s12">
				<input class="correo" id="email" type="email" name="email" required><br>
				<label for="email">Correo</label>
			</div>
			<div class="input-field col s12">
				<input class="password" id="password" type="password" name="password" required><br>
				<label for="password">Contraseña</label>
			</div>
			<input class="login waves-effect waves-light btn" type="submit" value="Iniciar Sesion">
		</form>
    </div>

	

	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/materialize.min.js"></script>
</body>
</html>