<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro Usuario</title>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css">
	<link type="text/css" rel="stylesheet" href="css/style-forms.css">
</head>
<body class="cuerpo">
	
   <nav class="blue lighten-1 z-depth-3">
   		 <div class="nav-wrapper">
      		<a href="index.php" class="brand-logo">Sistema CTT</a>
     		 <ul id="nav-mobile" class="right hide-on-med-and-down">
       			 <li><i class=" material-icons">power_settings_new</i></li>
     		 </ul>
   		 </div>
   </nav>
   
	<div class="container">
		<div class="row blue lighten-1 z-depth-3 registro-form card">
			<h2>Registro de Usuario</h2>
			<form action="modules/register_user.php" method="post">
				<div class="row">
					<div class="input-field col s6">
    					<i class="material-icons prefix">account_circle</i>
						<input type="text" name="userName" required>
						<label for="userName">Nombre</label>
					</div>
					<div class="input-field col s6">
						<input type="text" name="userLastName" required>
						<label  for="userLastName">Apellido</label>
					</div>
					<div class="input-field col s12">
						<i class="material-icons prefix">assignment_ind</i>
						<input type="text" name="userId" required>
						<label for="userId">Cedula</label>
					</div>
					<div class="input-field col s12">
						<i class="material-icons prefix">call</i>
						<input type="text" name="userPhone" required>
						<label for="userPhone">Telefono</label>
					</div>
					<div class="input-field col s12">
						<i class="material-icons prefix">email</i>
						<input type="email" name="userEmail" required>
						<label for="userEmail">Correo</label>
					</div>
					<div class="input-field col s12">
						<i class="material-icons prefix">lock</i>
						<input type="password" name="userPassword" required>
						<label for="userPassword">Contraseña</label>
					</div>
					<div class="input-field col s12">
						<i class="material-icons prefix">lock</i>
						<input type="password" name="repeatPassword" required>
						<label for="repeatPassword">Repetir Contraseña</label>
					</div>
				</div>
				<div class="input-field">
					<button class="btn waves-effect waves-default" type="submit">
						<i class="material-icons left">done</i>
						Registrar Usuario
					</button>
				</div>
			</form>
		</div>
	</div>
	
	<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>

	<?php if(isset($_GET['mensaje']) && $_GET['mensaje'] == 'registrado') { ?>
	<script>
		Materialize.toast('Usuario registrado con exito', 5000);
	</script>
	<?php } elseif (isset($_GET['mensaje']) && $_GET['mensaje'] == 'yaregistrado') { ?>
	<script>
		Materialize.toast('Error: Usuario ya registrado', 5000);
	</script>
	<?php } elseif (isset($_GET['mensaje']) && $_GET['mensaje'] == 'passsame') { ?>
	<script>
		Materialize.toast('Error: Contraseña no coincide', 5000);
	</script>
	<?php } elseif (isset($_GET['mensaje']) && $_GET['mensaje'] == 'errormail') { ?>
	<script>
		Materialize.toast('Error: Correo ya existe', 5000);
	</script>
	<?php } elseif (isset($_GET['mensaje'])) { ?>
	<script>
		Materialize.toast('Error', 5000);
	</script>
	<?php } ?>

</body>
</html>