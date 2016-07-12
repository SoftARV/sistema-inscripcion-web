<?php 
	
	include "../bd/database.php";

	$connection = connectDatabase();

	function registroProfesores() {
		$nombre 	= $_POST['nombre'];
		$apellido 	= $_POST['apellido'];
		$cedula 	= $_POST['cedula'];
		$telefono 	= $_POST['telefono'];

		$sqlQuery = 'SELECT idPersona FROM persona WHERE cedula = "' . $cedula . '";';
		$personFinded = $GLOBALS['connection']->query($sqlQuery);
		if ($personFinded->num_rows == 0) {
			//si la persoa no existe se registra en la base de datos
			$sqlQuery = "INSERT INTO persona VALUES (DEFAULT, '" . $cedula . "', '" . $nombre . "', '" . $apellido . "', '" . $telefono . "');";

			if ($GLOBALS['connection']->query($sqlQuery)) {
				// si el registro es exitoso se procede a registrar la persona creada como profesor
				$sqlQuery = 'SELECT idPersona FROM persona WHERE cedula = '. $cedula .';';
				$personFinded = $GLOBALS['connection']->query($sqlQuery);

				while ($person = $personFinded->fetch_assoc()) {
					$sqlQuery = "INSERT INTO profesor VALUES (DEFAULT, ". $person['idPersona'] .");";
					if ($GLOBALS['connection']->query($sqlQuery)) {
						// si el registro es exitoso se envia un mensaje de exito 
						echo "registro completado";
					}
				}

			}
		}else {
			// si la persona existe en la base de datos pero no existe como profesor
			while ($person = $personFinded->fetch_assoc()) {
				$sqlQuery = 'SELECT * FROM profesor WHERE persona_idPersona = '. $person['idPersona'] .';';
				$professorFinded = $GLOBALS['connection']->query($sqlQuery);
				if ($professorFinded->num_rows == 0) {
					// si la persona no esta registrada como profesor se procede a crear su perfil como profesor
					$sqlQuery = "INSERT INTO profesor VALUES (DEFAULT, ". $person['idPersona'] .");";
					if ($GLOBALS['connection']->query($sqlQuery)) {
						// si el registro es exitoso se envia un mensaje de exito 
						echo "persona ya existente registro completado";
					}
				}else {
					// si la persona esta ya registrada como profesor se procede a dar un mensaje de error
					echo "profesor ya registrado";
				}
			}
			
		}
	}

	switch ($_POST['opcion']) {
		case '1':
			registroProfesores();
			break;
		
		default:
			# code...
			break;
	}

?>