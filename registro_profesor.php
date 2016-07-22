<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro de profesor</title>
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
			<h2>Registro de Profesor</h2>
			 <form action="modules/registers.php" method="post">
			 	<!-- inputs hiddens -->
			 	<input type="text" name="opcion" value="1" hidden>
			 	<input type="text" name="bloque" hidden>
				<input type="text" name="salon" hidden>
				<input type="text" name="capacidad" hidden>
			 	<!--  -->
				 <div class="row">
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
					 	 <i class="material-icons prefix">assignment_ind</i>
						  <input type="text" name="cedula" required>
						 <label for="userId">Cedula</label>
					 </div>
					 <div class="input-field col s12">
						 <i class="material-icons prefix">call</i>
						   <input type="text" name="telefono" required>
						 <label for="userPhone">Telefono</label>
					 </div>
				</div>
				<div class="input-field">
					<button class="btn waves-effect waves-default" type="submit">
						Registrar profesor
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

 	<?php if(isset($_GET['mensaje']) && $_GET['mensaje'] == 'registrado') { ?>
	<script>
		Materialize.toast('Profesor registrado con exito', 5000);
	</script>
	<?php } elseif (isset($_GET['mensaje']) && $_GET['mensaje'] == 'yaregistrado') { ?>
	<script>
		Materialize.toast('Error: Profesor ya registrado', 5000);
	</script>
	<?php } elseif (isset($_GET['mensaje'])) { ?>
	<script>
		Materialize.toast('Error', 5000);
	</script>
	<?php } ?>

</body>
</html>