<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modificar Usuario</title>
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
			<h2>Modificacion de Usuario</h2>
			<form action="modules/mod_user.php" method="post">
				<div class="row">
					 	<div class="input-field col s12">
							<i class="material-icons prefix">assignment_ind</i>
							  <input type="text" name="cedula" required>
							<label for="cedula">Ingrese la cedula</label>
						</div>
						<div class="input-field col s6">
							<i class="material-icons prefix">email</i>
							<input type="email" name="correo">
							<label for="correo">Correo</label>
						</div>
						<div class="input-field col s6">
							<i class="material-icons prefix">lock</i>
							<input type="password" name="oldpass">
							<label for="oldpass">Contraseña Actual</label>
						</div>
						<div class="input-field col s6">
							<i class="material-icons prefix">lock</i>
							<input type="password" name="newpass">
							<label for="newpass">Ingrese Nueva Contraseña</label>
						</div>
						<div class="input-field col s6">
							<i class="material-icons prefix">lock</i>
							<input type="password" name="renewpass">
							<label for="renewpass">Repita Nueva Contraseña</label>
						</div>
						<div class="input-field col s4">
						<i class="material-icons prefix">account_circle</i>
						  <select class="option-1" name="tipouser">
							     <option value="" disabled selected>Seleccione el nivel del usuario</option>
							      <option value="1">Super-Usuario</option>
							       <option value="2">Usuario</option>
						     </select>
						</div>
					</div>
					<div class="input-field">
						<button class="btn waves-effect waves-default" type="submit">
							<i class="material-icons left">done</i>
							Modificar Usuario
						</button>
					</div>
			</form>
		</div>
	</div>
	
	<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script>
		  $(document).ready(function() {
		      $('select').material_select();
		  });
 	</script>

	<?php if(isset($_GET['mensaje']) && $_GET['mensaje'] == 'modificado') { ?>
	<script>
		Materialize.toast('Usuario modificado con exito', 5000);
	</script>
	<?php } elseif (isset($_GET['mensaje']) && $_GET['mensaje'] == 'newpasserr') { ?>
	<script>
		Materialize.toast('Error: Contraseñas no coinciden', 5000);
	</script>
	<?php } elseif (isset($_GET['mensaje']) && $_GET['mensaje'] == 'noexiste') { ?>
	<script>
		Materialize.toast('Error: Persona no registrada', 5000);
	</script>
	<?php } elseif (isset($_GET['mensaje']) && $_GET['mensaje'] == 'noexisteuser') { ?>
	<script>
		Materialize.toast('Error: Persona no registrada como Usuario', 5000);
	</script>
	<?php } elseif (isset($_GET['mensaje']) && $_GET['mensaje'] == 'oldpasserr') { ?>
	<script>
		Materialize.toast('Error: Vieja Contraseña incorrecta', 5000);
	</script>
	<?php } elseif (isset($_GET['mensaje'])) { ?>
	<script>
		Materialize.toast('Error', 5000);
	</script>
	<?php } ?>

</body>
</html>