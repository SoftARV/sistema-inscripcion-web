<?php 

	session_start();

	include "bd/database.php";

	$connection = connectDatabase();

	$inputName = $_POST["userName"];
	$inputLastName = $_POST["userLastName"];
	$inputId = $_POST["userId"];
	$inputPhone = $_POST["userPhone"];
	$inputEmail = $_POST["userEmail"];
	$inputPassword = $_POST["userPassword"];
	$repeatPassword = $_POST["repeatPassword"];

	if ($inputPassword == $repeatPassword) {
			$sqlQuery = "SELECT idPersona FROM persona WHERE cedula = '" . $inputId . "';";
			$usersFinded = $connection->query($sqlQuery);
		
		if ($usersFinded->num_rows == 0) {
			$sqlQuery = "SELECT correo FROM usuario WHERE correo = '" . $inputEmail . "';";
			$emailsFinded = $connection->query($sqlQuery);

			if ($emailsFinded->num_rows == 0) {
				$sqlQuery = "INSERT INTO persona VALUES (DEFAULT, '" . $inputId . "', '" . $inputName . "', '" . $inputLastName . "', '" . $inputPhone . "');";
				if ($connection->query($sqlQuery) === true) {
					$sqlQuery = "SELECT idPersona FROM persona WHERE cedula = '" . $inputId . "';";
					$user = $connection->query($sqlQuery);
					if ($user->num_rows > 0) {
						while ($row = $user->fetch_assoc()) {
							$sqlQuery = "INSERT INTO usuario VALUES (DEFAULT, '" . $inputEmail . "', '" . $inputPassword . "',  " . $row["idPersona"] . ", 2);";
							$connection->query($sqlQuery);
						}
						echo "Registro Completado";
					}
				}
			}
		} else {
			// if user identification exist have to verify if it doesnt have login credentials
			// TODO: apply rest of the logic to continue the register
			/*
			$sqlQuery = "SELECT correo FROM usuario WHERE correo = '" . $inputEmail . "';";
			$emailsFinded = $connection->query($sqlQuery);
			*/
		}
	} else {
		echo "contraseñas no son iguales";
	}

?>