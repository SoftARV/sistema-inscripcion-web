<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inscripcion de alumnos existente</title>
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
			<h2>Inscripcion de alumnos existente</h2>
			<form action="register_user.php" method="post">
				<div class="row">
				  <div class="input-field col s6">
							<i class="material-icons prefix">assignment_ind</i>
						  <input type="text" name="userId">
							<label for="userId">Cedula</label>
					</div>
					<div class="boton_buscar input-field col s6">
					    <button class="btn waves-effect waves-default" type="submit">
						     buscar alumno
					    </button>
					</div>
					</div>
					<div class="row">
					<div class="input-field col s6">
    					<i class="material-icons prefix">account_circle</i>
						<input type="text" name="userName">
						<label for="userName">Nombre</label>
					</div>
					  <div class="input-field col s6">
						 <input type="text" name="userLastName">
					   <label  for="userLastName">Apellido</label>
					</div>
					<div class="input-field col s12">
						<i class="material-icons prefix">call</i>
						  <input type="text" name="userPhone">
						<label for="userPhone">Telefono</label>
					</div>
					    <div class="input-field col s12">
					      <i class="material-icons prefix">class</i>
						     <select>
							     <option value="" disabled selected></option>
							      <option value="1">Option 1</option>
							       <option value="2">Option 2</option>
							   		<option value="3">Option 3</option>
						     	</select>
						    	<label>Nombre del curso</label>
 						</div>
					 	<div class="input-field col s12">
					      <i class="material-icons prefix">assignment_late</i>
						    <select>
							     	<option value="" disabled selected></option>
							      <option value="1">Option 1</option>
							     	<option value="2">Option 2</option>
							    	<option value="3">Option 3</option>
						    </select>
						  	<label>Secciones</label>
				    </div>
						<div class="input-field col s12">
						  	<i class="material-icons prefix">schedule</i>
						    <select>
							     	<option value="" disabled selected></option>
							      <option value="1">Option 1</option>
							    	<option value="2">Option 2</option>
							    	<option value="3">Option 3</option>
						    </select>
						  	<label>Horarios</label>
				    </div>
				
				</div>
				<div class="input-field">
					<button class="btn waves-effect waves-default" type="submit">
						Inscribir Alumno
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
</body>
</html>