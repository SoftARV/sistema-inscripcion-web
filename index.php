<?php 

	session_start();

	/*if (!isset($_SESSION['user'])) {
		header('Location: iniciar_sesion.php');
	}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css">
	<link rel="stylesheet" href="css/style-index.css">
	<title>Inicio</title>
</head>
<body>
	<nav class="blue lighten-1 z-depth-3">
   		 <div class="nav-wrapper">
      		<a href="#" class="brand-logo">Sistema CTT</a>
     		 <ul id="nav-mobile" class="right hide-on-med-and-down">
       			 <li><i class=" material-icons">power_settings_new</i></li>
     		 </ul>
   		 </div>
  	</nav>

  	
		<div class="row">
			<div class="col m4">
				<div class="card small blue lighten-1 z-depth-3 carta-principal p1">
             		<i class="icono-principal material-icons">contacts</i>
					<h3>Inscribir</h3>
   				</div>
				<div class="menu1">
   					<div class="card blue lighten-1 z-depth-3 carta-secundaria left">
						<p>Nueva</p>
   					</div>
   					<div class="card blue lighten-1 z-depth-3 carta-secundaria left">
						<p>Modificar</p>
   					</div>
   					<div class="card blue lighten-1 z-depth-3 carta-secundaria left">
						<p>Consultar</p>
   					</div>
   					<div class="card blue lighten-1 z-depth-3 carta-secundaria left">
						<p>Reporte</p>
   					</div>
   				</div>
			</div>
			<div class="col m4">
				<div class="card small blue lighten-1 z-depth-3 carta-principal p2">
					<i class="icono-principal material-icons">assignment_ind</i>
					<h3>Profesores</h3>
				</div>
				<div class="menu2">
					<div class="card blue lighten-1 z-depth-3 carta-secundaria left">
						<p>Nueva</p>
   					</div>
   					<div class="card blue lighten-1 z-depth-3 carta-secundaria left">
						<p>Modificar</p>
   					</div>
   					<div class="card blue lighten-1 z-depth-3 carta-secundaria left">
						<p>Consultar</p>
   					</div>
				</div>
			</div>
			<div class="col m4">
				<div class="card small blue lighten-1 z-depth-3 carta-principal p3">
					<i class="icono-principal material-icons">grade</i>
					<h3>Secciones</h3>
				</div>
				<div class="menu3">
					<div class="card blue lighten-1 z-depth-3 carta-secundaria left">
						<p>Nueva</p>
   					</div>
   					<div class="card blue lighten-1 z-depth-3 carta-secundaria left">
						<p>Modificar</p>
   					</div>
   					<div class="card blue lighten-1 z-depth-3 carta-secundaria left">
						<p>Consultar</p>
   					</div>
   					<div class="card blue lighten-1 z-depth-3 carta-secundaria left">
						<p>Horarios</p>
   					</div>
				</div>
			</div>
		</div>
			
			
		
		<div class="row">
			<div class="col m4">
				<div class="card small blue lighten-1 z-depth-3 carta-principal p4">
					<i class="icono-principal material-icons">perm_identity</i>
					<h3>Alumnos</h3>
				</div>
				<div class="menu4">
   					<div class="card blue lighten-1 z-depth-3 carta-secundaria left">
						<p>Modificar</p>
   					</div>
   					<div class="card blue lighten-1 z-depth-3 carta-secundaria left">
						<p>Consultar</p>
   					</div>
				</div>
			</div>
			<div class="col m4">
			   
				<div class="card small blue lighten-1 z-depth-3 carta-principal p5">
					<i class="icono-principal material-icons">supervisor_account</i>
					<h3>Gestion de usuarios</h3>
				</div>
				<div class="menu5">
					<div class="card blue lighten-1 z-depth-3 carta-secundaria left">
						<p>Nueva</p>
   					</div>
   					<div class="card blue lighten-1 z-depth-3 carta-secundaria left">
						<p>Modificar</p>
   					</div>
   					<div class="card blue lighten-1 z-depth-3 carta-secundaria left">
						<p>Consultar</p>
   					</div>
				</div>
				
			</div>
		</div>
		




	<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript" src="js/menu_secundario.js"></script>
</body>
</html>