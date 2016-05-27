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
</head>
<body>
	
	<form action="login.php" method="post">
		<label for="email">Correo</label><input name="email" type="email"><br>
		<label for="password">Contraseña</label><input name="password" type="password"><br>
		<input type="submit" value="Iniciar Sesion">
	</form>

</body>
</html>