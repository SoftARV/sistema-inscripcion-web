<?php 

	session_start();

	$userEmail = $_POST['email'];
	$userPassword = $_POST['password'];

	$sqlQuery = "SELECT correo FROM usuario WHERE correo = '" . $userEmail . "';";

?>