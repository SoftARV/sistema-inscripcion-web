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
		<div class="row blue lighten-3 z-depth-3">
			<h2>Registro de Usuario</h2>
			<div class="input-field col m6">
    			<i class="material-icons prefix">account_circle</i>
				<input type="text" name="userName">
				<label for="userName">Nombre</label>
			</div>
			<div class="input-field col m6">
				<i class="material-icons prefix">account_circle</i>
				<input type="text" name="userLastName">
				<label for="userLastName">Apellido</label>
			</div>
			<div class="input-field">
				<i class="material-icons prefix">account_circle</i>
				<input type="text" name="userId">
				<label for="userId">Cedula</label>
			</div>
			<div class="input-field">
				<i class="material-icons prefix">account_circle</i>
				<input type="text" name="userPhone">
				<label for="userPhone">Telefono</label>
			</div>
			<div class="input-field">
				<i class="material-icons prefix">account_circle</i>
				<input type="email" name="userEmail">
				<label for="userEmail">Correo</label>
			</div>
			<div class="input-field">
				<i class="material-icons prefix">account_circle</i>
				<input type="password" name="userPassword">
				<label for="userPassword">Contraseña</label>
			</div>
			<div class="input-field">
				<i class="material-icons prefix">account_circle</i>
				<input type="password" name="repeatPassword">
				<label for="repeatPassword">Repetir Contraseña</label>
			</div>
			<div class="input-field">
				<input class="waves-effect waves-light btn" type="submit" value="Registrar Usuario">
			</div>
		</div>
	</div>
	
	<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>