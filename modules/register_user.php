<?php 

	session_start();

	include "../bd/database.php";

	$connection = connectDatabase();

	$inputName = $_POST["userName"];
	$inputLastName = $_POST["userLastName"];
	$inputId = $_POST["userId"];
	$inputPhone = $_POST["userPhone"];
	$inputEmail = $_POST["userEmail"];
	$inputPassword = $_POST["userPassword"];
	$repeatPassword = $_POST["repeatPassword"];

	// Check the password
	if ($inputPassword == $repeatPassword) {
			$sqlQuery = "SELECT idPersona FROM persona WHERE cedula = '" . $inputId . "';";
			$personFinded = $connection->query($sqlQuery);
		
		// check if the person is exist in the DB
		if ($personFinded->num_rows == 0) {
			$sqlQuery = "SELECT correo FROM usuario WHERE correo = '" . $inputEmail . "';";
			$emailsFinded = $connection->query($sqlQuery);

			// check if the email exist in the database
			if ($emailsFinded->num_rows == 0) {
				$sqlQuery = "INSERT INTO persona VALUES (DEFAULT, '" . $inputId . "', '" . $inputName . "', '" . $inputLastName . "', '" . $inputPhone . "');";
				// check if the register of the person succeded
				if ($connection->query($sqlQuery) === true) {
					$sqlQuery = "SELECT idPersona FROM persona WHERE cedula = '" . $inputId . "';";
					$user = $connection->query($sqlQuery);
					// get the id of the new person register in the database 
					if ($user->num_rows > 0) {
						//to register the user 
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
			while ($user = $personFinded->fetch_assoc()) {
				$sqlQuery = "SELECT * FROM usuario WHERE persona_idPersona = '" . $user . "';";
				$usersFinded = $connection->query($sqlQuery);
				
				// check if the person have login credential
				if ($usersFinded->num_rows == 0) {
					$sqlQuery = "INSERT INTO usuario VALUES (DEFAULT, '" . $inputEmail . "', '" . $inputPassword . "',  " . $user . ", 2);";
					$connection->query($sqlQuery);
				}else {
					// User Already exist
					echo "Usuario ya existe";
				}
			}

		}
	} else {
		echo "contraseñas no son iguales";
	}



?>