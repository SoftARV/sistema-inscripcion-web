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
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="css/materialize.min.css">
	<link rel="stylesheet" href="css/style-iniciar_sesion.css">
</head>
<body>
	<div class="container">
		<div class="row z-depth-3 blue lighten-1 login-form card">
			<h2>Iniciar sesion</h2>
     		<form action="modules/login.php" method="post">
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
				<button class="btn waves-effect waves-default" type="submit">
					Iniciar Sesion
				</button>
			</form>
   		 </div>
	</div>

	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/materialize.min.js"></script>
	
	<?php if(isset($_GET['mensaje']) && $_GET['mensaje'] == 'errorpass') { ?>
	<script>
		Materialize.toast('Error: Contraseña Incorrecta', 6000);
	</script>
	<?php } elseif (isset($_GET['mensaje']) && $_GET['mensaje'] == 'erroruser') { ?>
	<script>
		Materialize.toast('Error: Usuario No Existente', 6000);
	</script>
	<?php } elseif (isset($_GET['mensaje'])) { ?>
	<script>
		Materialize.toast('Error', 6000);
	</script>
	<?php } ?>

</body>
</html>