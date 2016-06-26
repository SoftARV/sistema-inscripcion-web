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
			<h2>Registro de Secciones</h2>
			<form action="register_user.php" method="post">
				<div class="row">
						
					    <div class="input-field col s6">
					      <i class="material-icons prefix">class</i>
						     <select class="option-1">
							     <option value="" disabled selected>Seleccionar Curso...</option>
							      <option value="1">CCNA I</option>
							       <option value="2">CCNA II</option>
							       <option value="3">CCNA III</option>
							      <option value="4">CCNA IV</option>
							     <option value="5">IT Essential</option>
						     </select>
						    <label>Nombre del curso</label>
 						</div>
 						<div class="input-field col s6">
						     <select class="option-1">
							     <option value="" disabled selected>Seleccionar Profesor...</option>
							      <option value="1">Option 1</option>
							       <option value="2">Option 2</option>
							     <option value="3">Option 3</option>
						     </select>
						    <label>Profesores</label>
 						</div>
						<div class="input-field col s6">
						   <i class="material-icons prefix">assignment_late</i>
							 <input type="text" name="userLastName">
						   <label  for="userLastName">Seccion</label>
						</div>
					    <div class="input-field col s6">
						    <select class="option-1">
							     <option value="" disabled selected>Seleccionar Salon...</option>
							      <option value="1">G-1</option>
							       <option value="2">G-2</option>
							       <option value="3">G-3</option>
							        <option value="4">G-4</option>
							         <option value="5">G-5</option>
							        <option value="6">G-6</option>
							       <option value="7">G-7</option>
							       <option value="8">G-8</option>
							      <option value="9">G-9</option>
							     <option value="10">G-10</option>
						    </select>
						  <label>Salones</label>
				        </div>
				        <div class="input-field col s6">
						  <i class="material-icons prefix">schedule</i>
						    <select class="option-1">
							     <option value="" disabled selected>Selecionar Dia...</option>
							      <option value="1">Lunes</option>
							       <option value="2">Martes</option>
							        <option value="3">Miercoles</option>
							       <option value="4">Jueves</option>
							      <option value="5">Viernes</option>
							     <option value="6">Sabado</option>
						    </select>
						  <label>Dias</label>
				        </div>
						<div class="input-field col s6">
						    <select class="option-1">
							     <option value="" disabled selected>seleccionar horas...</option>
							      <option value="1">De las 07:00 a las 09:00</option>
							       <option value="2">De las 09:00 a las 11:00</option>
							       <option value="3">De las 11:00 a las 13:00</option>
							       <option value="4">De las 13:00 a las 15:00</option>
							       <option value="5">De las 15:00 a las 17:00</option>
							      <option value="6">De las 17:00 a las 19:00</option>
							     <option value="7">De las 19:00 a las 21:00</option>
						    </select>
						  <label>Horas</label>
				        </div>

				</div>
				<div class="input-field">
					<button class="btn waves-effect waves-default" type="submit">
						Registrar de Seccion
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


