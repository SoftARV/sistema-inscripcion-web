<?php 

	session_start();

	if (!isset($_SESSION['user'])) {
		header('Location: index.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
</head>
<body>
	<h1>Sesion Iniciada</h1>
</body>
</html>