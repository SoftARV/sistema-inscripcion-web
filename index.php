<?php 

	session_start();

	if (!isset($_SESSION['user'])) {
		header('Location: iniciar_sesion.php');
	}
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
      		<a href="index.php" class="brand-logo">Sistema CTT</a>
     		 <ul id="nav-mobile" class="right hide-on-med-and-down">
       			 <li><a href="modules/logout.php"><i class=" material-icons">power_settings_new</i></a></li>
     		 </ul>
   		 </div>
  	</nav>

  	
		<div class="row">
			<div class="col m4">
				<div class="card small blue lighten-1 z-depth-3 carta-principal p1">
             		<i class="icono-principal material-icons">contacts</i>
					<h3>Inscribir Alumnos</h3>
   				</div>
				<div class="menu1">
					<a href="inscripcion_alumno_nuevo.php">
	   					<div class="card blue lighten-1 z-depth-3 carta-secundaria left">
							<p>Alumno nuevo</p>
	   					</div>
   					</a>
   					<a href="inscripcion_alumno_nuevo.php">
	   					<div class="card blue lighten-1 z-depth-3 carta-secundaria left">
							<p>Alumno existente</p>
	   					</div>
   					</a>
   					<a href="modificar_inscripcion.php">
	   					<div class="card blue lighten-1 z-depth-3 carta-secundaria left">
							<p>Modificar Alumnos</p>
	   					</div>
   					</a>
   					<a href="">
	   					<div class="card blue lighten-1 z-depth-3 carta-secundaria left">
							<p>Reporte</p>
	   					</div>
   					</a>
   				</div>
			</div>

			<div class="col m4">
				<div class="card small blue lighten-1 z-depth-3 carta-principal p4">
					<i class="icono-principal material-icons">search</i>
					<h3>Consultas</h3>
				</div>
				<div class="menu4">
					<a href="consultar_alumnos.php">
	   					<div class="card blue lighten-1 z-depth-3 carta-secundaria left">
							<p>Consultar Alummnos</p>
	   					</div>
   					</a>
   					<a href="">
	   					<div class="card blue lighten-1 z-depth-3 carta-secundaria left">
							<p>Consultar Profesores</p>
	   					</div>
   					</a>
   					<a href="">
	   					<div class="card blue lighten-1 z-depth-3 carta-secundaria left">
							<p>Consultar Secciones</p>
	   					</div>
   					</a>
				</div>
			</div>
		 <?php if($_SESSION['perfilUser'] == 1): ?>
			<div class="col m4">
				<div class="card small blue lighten-1 z-depth-3 carta-principal p2">
					<i class="icono-principal material-icons">assignment_ind</i>
					<h3>Profesores</h3>
				</div>
				<div class="menu2">
					<a href="registro_profesor.php">
						<div class="card blue lighten-1 z-depth-3 carta-secundaria left">
							<p>Nueva</p>
	   					</div>
   					</a>
   					<a href="modificar_profesores.php">
	   					<div class="card blue lighten-1 z-depth-3 carta-secundaria left">
							<p>Modificar</p>
	   					</div>
   					</a>
				</div>
			</div>
		 <?php endif; ?>
		 </div>
		 <div class="row">
		 <?php if($_SESSION['perfilUser'] == 1): ?>
			<div class="col m4">
				<div class="card small blue lighten-1 z-depth-3 carta-principal p3">
					<i class="icono-principal material-icons">grade</i>
					<h3>Secciones</h3>
				</div>
				<div class="menu3">
					<a href="registro_secciones.php">
						<div class="card blue lighten-1 z-depth-3 carta-secundaria left">
							<p>Nueva</p>
	   					</div>
   					</a>
   					<a href="modificar_secciones.php">
	   					<div class="card blue lighten-1 z-depth-3 carta-secundaria left">
							<p>Modificar</p>
	   					</div>
   					</a>
   					<a href="registrar_salones.php">
	   					<div class="card blue lighten-1 z-depth-3 carta-secundaria left">
							<p>Salones</p>
	   					</div>
   					</a>
				</div>
			</div>
		 <?php endif; ?>
			<?php if($_SESSION['perfilUser'] == 1): ?>
				<div class="col m4">
				   
					<div class="card small blue lighten-1 z-depth-3 carta-principal p5">
						<i class="icono-principal material-icons">supervisor_account</i>
						<h3>Gestion de usuarios</h3>
					</div>
					<div class="menu5">
						<a href="registro_usuario.php">
							<div class="card blue lighten-1 z-depth-3 carta-secundaria left">
								<p>Nueva</p>
		   					</div>
	   					</a>
	   					<a href="">
		   					<div class="card blue lighten-1 z-depth-3 carta-secundaria left">
								<p>Modificar</p>
		   					</div>
	   					</a>
	   					<a href="">
		   					<div class="card blue lighten-1 z-depth-3 carta-secundaria left">
								<p>Consultar</p>
		   					</div>
	   					</a>
					</div>
				</div>
			<?php endif; ?>

		</div>
		
	<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript" src="js/menu_secundario.js"></script>
</body>
</html>