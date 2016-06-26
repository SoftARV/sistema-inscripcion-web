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
				     <div class="input-field col s6">
						<i class="material-icons prefix">assignment_ind</i>
						  <input type="text" name="userId">
						<label for="userId">Cedula</label>
					 </div>
					 <div class="input-field col s6 boton_buscar">
					    <button class="btn waves-effect waves-default" type="submit">
						     buscar Alumno
					    </button>
					  </div>
					 </div>
					 <div class="row">
					 	<table class="centered">
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
					      	<thead class="table-1">
					          <tr>
					              <th data-field="curso">Curso</th>
					              <th data-field="seccion">Seccion</th>
					              <th data-field="salon">Salon</th>
					              <th data-field="horas">Horas</th>
					          </tr>
					        </thead>

					        <tbody class="table-2">
					          <tr>
					            <td>CCNA</td>
					            <td>N/23</td>
					            <td>F-23</td>
					            <td>de 9 a 11</td>
					          </tr>
					        </tbody>
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