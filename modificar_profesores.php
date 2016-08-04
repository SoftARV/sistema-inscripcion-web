<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modificacion de profesores</title>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css">
	<link type="text/css" rel="stylesheet" href="css/style-forms.css">
</head>
<body class="cuerpo">
	
     <nav class="blue lighten-1 z-depth-3">
   		 <div class="nav-wrapper">
      		<a href="index.php" class="brand-logo">Sistema CTT</a>
     		 <ul id="nav-mobile" class="right hide-on-med-and-down">
       			 <li><a href="modules/logout.php"><i class=" material-icons">power_settings_new</i></a></li>
     		 </ul>
   		 </div>
  	</nav>
   
	<div class="container">
		 <div class="row blue lighten-1 z-depth-3 registro-form card">
			 <h2>Modificacion de profesores</h2>
			   	<form action="modules/modificar.php" method="post">
					<input type="text" name="opcion" value="2" hidden>
				 	<input type="text" name="bloque" hidden>
					<input type="text" name="salon" hidden>
					<input type="text" name="capacidad" hidden>
					<input type="text" name="curso" hidden>
					<input type="text" name="profesor" hidden>
					<input type="text" name="seccion" hidden>
					<input type="text" name="cedula" hidden>
					<input type="text" name="dia" hidden>
					<input type="text" name="hora" hidden>

				 <div class="row">
				 	<div class="input-field col s12">
					 	 <i class="material-icons prefix">assignment_ind</i>
						  <input type="text" name="cedula" required>
						 <label for="userId">Cedula</label>
					 </div>
				 	 <div class="input-field col s6">
    					 <i class="material-icons prefix">account_circle</i>
						  <input type="text" name="nombre" required>
						 <label for="userName">Nombre</label>
					 </div>
					 <div class="input-field col s6">
						 <input type="text" name="apellido" required>
						  <label  for="userLastName">Apellido</label>
					 </div>
					 <div class="input-field col s12">
						 <i class="material-icons prefix">call</i>
						   <input type="text" name="telefono" required>
						 <label for="userPhone">Telefono</label>
					 </div>
				</div>
				<div class="input-field">
					<button class="btn waves-effect waves-default boton_final" type="submit">
						Modificar Profesor
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
 	<?php if(isset($_GET['mensaje']) && $_GET['mensaje'] == 'modificada') { ?>
	<script>
		Materialize.toast('Profesor modificado con exito', 5000);
	</script>
	<?php } elseif (isset($_GET['mensaje']) && $_GET['mensaje'] == 'noexiste') { ?>
	<script>
		Materialize.toast('Error: Cedula no existe', 5000);
	</script>
	<?php } elseif (isset($_GET['mensaje']) && $_GET['mensaje'] == 'noexistepro') { ?>
	<script>
		Materialize.toast('Error: Persona no registrada como profesor', 5000);
	</script>
	<?php } elseif (isset($_GET['mensaje'])) { ?>
	<script>
		Materialize.toast('Error', 5000);
	</script>
	<?php } ?>
</body>
</html>