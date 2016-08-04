<?php 
	include "bd/database.php";
	$connection = connectDatabase();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modificacion de secciones</title>
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
			 <h2>Modificacion de secciones</h2>
			   <form action="modules/modificar.php" method="post">
				 <div class="row">
						<input type="text" name="opcion" value="1" hidden>
						<input type="text" name="bloque" hidden>
						<input type="text" name="salon" hidden>
						<input type="text" name="capacidad" hidden>
						<input type="text" name="cedula" hidden>
						<input type="text" name="nombre" hidden>
						<input type="text" name="apellido" hidden>
						<input type="text" name="telefono" hidden>

						<div class="input-field col s6">
						   <i class="material-icons prefix">assignment_late</i>
							 <input type="text" name="seccion" required>
						   <label  for="seccion">Codigo Seccion</label>
						</div>
					    <div class="input-field col s6">
						     <select class="option-1" name="curso" required>
							    <option value="" disabled selected>Seleccionar Curso...</option>
							    <?php 
							    	$sqlQuery = "SELECT * FROM curso";
							    	$cursoFinded = $connection->query($sqlQuery);
							    	if ($cursoFinded->num_rows > 0) {
							    		while ($row = $cursoFinded->fetch_assoc()) {
							    			echo "<option value='".$row["idCurso"]."'>".$row["nombreCurso"]."</option>";
							    		}
							    	}else {
							    		echo "<option value='' disabled>No hay Cursos registrados...</option>";
							    	}
							    	
							    ?>
						     </select>
						    <label>Nombre del curso</label>
 						</div>
 						<div class="input-field col s6">
 							<i class="material-icons prefix">class</i>
						     <select class="option-1" name="profesor" required>
							    <option value="" disabled selected>Seleccionar Profesor...</option>
							    <?php 
							    	$sqlQuery = "SELECT * FROM profesor JOIN persona ON persona_idPersona = idPersona";
							    	$profesorFinded = $connection->query($sqlQuery);
							    	if ($profesorFinded->num_rows > 0) {
							    		while ($row = $profesorFinded->fetch_assoc()) {
							    			echo "<option value='".$row["idProfesor"]."'>".$row["nombre"]." ".$row["apellido"]."</option>";
							    		}
							    	}else {
							    		echo "<option value='' disabled>No hay Profesores registrados...</option>";
							    	}
							    	
							    ?>
						     </select>
						    <label>Profesores</label>
 						</div>
					    <div class="input-field col s6">
						    <select class="option-1" name="salon" required>
							    <option value="" disabled selected>Seleccionar Salon...</option>
							    <?php 
							    	$sqlQuery = "SELECT * FROM salon";
							    	$salonFinded = $connection->query($sqlQuery);
							    	if ($salonFinded->num_rows > 0) {
							    		while ($row = $salonFinded->fetch_assoc()) {
							    			echo "<option value='".$row["idSalon"]."'>".$row["bloque"]."-".$row["numero"]."</option>";
							    		}
							    	}else {
							    		echo "<option value='' disabled>No hay Salones registrados...</option>";
							    	}
							    	
							    ?>
						    </select>
						  <label for="salon">Salones</label>
				        </div>
				        <div class="input-field col s6">
						  <i class="material-icons prefix">schedule</i>
						    <select class="option-1" name="dia" required>
							    <option value="" disabled selected>Selecionar Dia...</option>
							    <?php 
							    	$sqlQuery = "SELECT * FROM dia";
							    	$diaFinded = $connection->query($sqlQuery);
							    	if ($diaFinded->num_rows > 0) {
							    		while ($row = $diaFinded->fetch_assoc()) {
							    			echo "<option value='".$row["idDia"]."'>".$row["nombreDia"]."</option>";
							    		}
							    	}else {
							    		echo "<option value='' disabled>No hay Dias registrados...</option>";
							    	}
							    	
							    ?>
						    </select>
						  <label>Dias</label>
				        </div>
						<div class="input-field col s6">
						    <select class="option-1" name="hora" required>
							    <option value="" disabled selected>seleccionar horas...</option>
							    <?php 
							    	$sqlQuery = "SELECT * FROM hora";
							    	$horaFinded = $connection->query($sqlQuery);
							    	if ($horaFinded->num_rows > 0) {
							    		while ($row = $horaFinded->fetch_assoc()) {
							    			echo "<option value='".$row["idHora"]."'>De ".$row["horaInicio"]." a ".$row["horaFinal"]."</option>";
							    		}
							    	}else {
							    		echo "<option value='' disabled>No hay Horas registradas...</option>";
							    	}
							    	
							    ?> 
						    </select>
						  <label>Horas</label>
				        </div>

				</div>
				<div class="input-field">
					<button class="btn waves-effect waves-default boton_final" type="submit">
						Modidificar Seccion
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
		Materialize.toast('Seccion modificada con exito', 5000);
	</script>
	<?php } elseif (isset($_GET['mensaje']) && $_GET['mensaje'] == 'noexiste') { ?>
	<script>
		Materialize.toast('Error: Codigo de Seccion no existe', 5000);
	</script>
	<?php } elseif (isset($_GET['mensaje'])) { ?>
	<script>
		Materialize.toast('Error', 5000);
	</script>
	<?php } ?>
</body>
</html>