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
      		<a href="#" class="brand-logo">Logo</a>
     		 <ul id="nav-mobile" class="right hide-on-med-and-down">
       			 <li><a href="sass.html">Sass</a></li>
       			 <li><a href="badges.html">Components</a></li>
       			 <li><a href="collapsible.html">JavaScript</a></li>
     		 </ul>
   		 </div>
  	</nav>

  	
		<div class="row">
			<div class="col m4">
				<div class="card small blue lighten-1 z-depth-3 carta-principal">
             		<i class="icono-principal iconos-menu material-icons">perm_identity</i> 
					<a href="">Inscribir</a>
   				</div>
			</div>
			<div class="col m4">
				<div class="card small blue lighten-1 z-depth-3 carta-principal">
					<i class="icono-principal material-icons">perm_identity</i>
					<h3>Inscribir</h3>
				</div>
			</div>
			<div class="col m4">
				<div class="card small blue lighten-1 z-depth-3 carta-principal">
					<i class="icono-principal material-icons">perm_identity</i>
					<h3>Inscribir</h3>
				</div>
			</div>
		</div>
			
			
		
		<div class="row">
			<div class="col m4">
				<div class="card small blue lighten-1 z-depth-3 carta-principal">
					<i class="icono-principal material-icons">perm_identity</i>
					<h3>Inscribir</h3>
				</div>
			</div>
			<div class="col m4">
				<div class="card small blue lighten-1 z-depth-3 carta-principal">
					<i class="icono-principal material-icons">perm_identity</i>
					<h3>Inscribir</h3>
				</div>
			</div>
			<div class="col m4">
				<div class="card small blue lighten-1 z-depth-3 carta-principal">
					<i class="icono-principal material-icons">perm_identity</i>
					<h3>Inscribir</h3>
				</div>
			</div>
		</div>
		




	<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>