<?php 

	session_start();

	include "bd/database.php";

	$connection = connectDatabase();

	$inputEmail = $_POST['email'];
	$inputPassword = $_POST['password'];

	$sqlQuery = "SELECT correo, password FROM usuario WHERE correo = '" . $inputEmail . "';";

	$usersFinded = $connection->query($sqlQuery);
	
	if ($usersFinded->num_rows > 0) {
		while ($row = $usersFinded->fetch_assoc()) {
			if ($row['password'] == $inputPassword) {
				$_SESSION['user'] = $row['correo'];
				header('Location: index.php');
			} else {
				echo "contraseña incorrecta";
			}
		}
	} else {
		echo "usuario no existe";
	}
?>