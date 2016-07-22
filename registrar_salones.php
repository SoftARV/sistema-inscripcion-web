<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro de Seccion</title>
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
			<h2>Registro de Salones nuevos</h2>
			<form action="modules/registers.php" method="post">
				<!-- inputs hiddens -->
				<input type="text" name="opcion" value="2" hidden>
				<input type="text" name="nombre" hidden>
				<input type="text" name="apellido" hidden>
				<input type="text" name="cedula" hidden>
				<input type="text" name="telefono" hidden>
				<!--  -->
				<div class="row">
						<div class="input-field col s6">
						   	<i class="material-icons prefix">business</i>
							<select name="bloque">
							    <option value="" disabled selected>Elige un Bloque</option>
							    <option value="F">F</option>
							    <option value="G">G</option>
						    </select>
						</div>
						<div class="input-field col s6">
						   	<i class="material-icons prefix">class</i>
								<select name="salon" required>
								    <option value="" disabled selected>Elige un Bloque</option>
								    <option value="1">1</option>
								    <option value="2">2</option>
								    <option value="3">3</option>
								    <option value="4">4</option>
								    <option value="5">5</option>
								    <option value="6">6</option>
								    <option value="7">7</option>
								    <option value="8">8</option>
								    <option value="9">9</option>
								    <option value="10">10</option>
						    	</select>
						</div>
						<div class="input-field col s6">
						<i class="material-icons prefix">aspect_ratio</i>
							 <input type="number" name="capacidad" required>
						   <label  for="capacidad">Capacidad</label>
						</div>
				</div>
				<div class="input-field">
					<button class="btn waves-effect waves-default" type="submit">
						Registrar de Salon
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
		Materialize.toast('Salon registrado con exito', 5000);
	</script>
	<?php } elseif (isset($_GET['mensaje']) && $_GET['mensaje'] == 'yaregistrado') { ?>
	<script>
		Materialize.toast('Error: Salon ya registrado', 5000);
	</script>
	<?php } elseif (isset($_GET['mensaje'])) { ?>
	<script>
		Materialize.toast('Error', 5000);
	</script>
	<?php } ?>


</body>
</html>
