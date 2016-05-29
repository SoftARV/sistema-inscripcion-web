<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro Usuario</title>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css">
	<link type="text/css" rel="stylesheet" href="css/style-registro_usuario.css">
</head>
<body class="blue">
	<div class="container">
		<div class="row blue lighten-3 z-depth-3 registro-form card">
			<h2>Registro de Usuario</h2>
			<form action="" method="post">
				<div class="row">
					<div class="input-field col s6">
    					<i class="material-icons prefix">account_circle</i>
						<input type="text" name="userName">
						<label for="userName">Nombre</label>
					</div>
					<div class="input-field col s6">
						<input type="text" name="userLastName">
						<label for="userLastName">Apellido</label>
					</div>
					<div class="input-field col s12">
						<i class="material-icons prefix">assignment_ind</i>
						<input type="text" name="userId">
						<label for="userId">Cedula</label>
					</div>
					<div class="input-field col s12">
						<i class="material-icons prefix">call</i>
						<input type="text" name="userPhone">
						<label for="userPhone">Telefono</label>
					</div>
					<div class="input-field col s12">
						<i class="material-icons prefix">email</i>
						<input type="email" name="userEmail">
						<label for="userEmail">Correo</label>
					</div>
					<div class="input-field col s12">
						<i class="material-icons prefix">lock</i>
						<input type="password" name="userPassword">
						<label for="userPassword">Contraseña</label>
					</div>
					<div class="input-field col s12">
						<i class="material-icons prefix">lock</i>
						<input type="password" name="repeatPassword">
						<label for="repeatPassword">Repetir Contraseña</label>
					</div>
				</div>
				<div class="input-field">
					<button class="btn waves-effect waves-light" type="submit">
						<i class="material-icons left">done</i>
						Registrar Usuario
					</button>
				</div>
			</form>
		</div>
	</div>
	
	<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>