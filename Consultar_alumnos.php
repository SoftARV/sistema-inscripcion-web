<?php 
	include "bd/database.php";
	$connection = connectDatabase();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Consultas de alumnos</title>
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
			 <h2>Consultar Alumnos</h2>
			   <form action="register_user.php" method="post">
					<div class="row">
					 	<table class="centered">
					 		<thead class="table-1">
					          	<tr>
					              	<th data-field="cedula">Cedula</th>
					              	<th data-field="nombre">Nombre</th>
					              	<th data-field="apellido">Apellido</th>
					              	<th data-field="telefono">Curso</th>
					              	<th data-field="telefono">Seccion</th>
					          	</tr>
					        </thead>
					        <tbody class="table-2">
							<?php 

								$sqlQuery = 'SELECT cedula, nombre, apellido, nombreCurso, codigoSeccion FROM persona JOIN alumno JOIN seccion JOIN curso JOIN inscripcion ON idPersona = persona_idPersona AND idAlumno = alumno_idAlumno AND idSeccion = seccion_idSeccion AND idCurso = curso_idCurso';
								$alumnoFinded =  $connection->query($sqlQuery);
								if ($alumnoFinded->num_rows != 0) {
									while ($alumno = $alumnoFinded->fetch_assoc()) {
										echo "	<tr>
						            				<td>".$alumno['cedula']."</td>
								            		<td>".$alumno['nombre']."</td>
								            		<td>".$alumno['apellido']."</td>
								            		<td>".$alumno['nombreCurso']."</td>
								            		<td>".$alumno['codigoSeccion']."</td>
						          				</tr>";
									}
								}else {
									echo "	<tr>
					              				<td colspan='5'>No hay registros</td>
					          				</tr>";
								}
								

							?>
							</tbody>


					        <!-- 
					        <thead class="table-1">
					          	<tr>
					              	<th data-field="cedula">Cedula</th>
					              	<th data-field="nombre">Nombre</th>
					              	<th data-field="apellido">Apellido</th>
					              	<th data-field="telefono">Telefono</th>
					          	</tr>
					        </thead>
					        <tbody class="table-2">
					          	<tr>
					            	<td>22058538</td>
					            	<td>Nelson</td>
					            	<td>Torres</td>
					            	<td>052134</td>
					          	</tr>
					        </tbody>
					         -->
					    </table>
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
</body>
</html>