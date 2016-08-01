<?php 

	define("databaseServer", "localhost");
	//define("databaseUser", "root");
	//define("databasePassword", "");
	define("databaseUser", "u887989201_root");
	define("databasePassword", "AZK986889@m");
	//define("databaseName", "sistema_inscripcion_bd");
	define("databaseName", "u887989201_ctt");

	function connectDatabase() {
		$connection = new mysqli(databaseServer, databaseUser, databasePassword, databaseName);

		if ($connection->connect_error) {
			die("Conection failed: " . $connection->connect_error);
		} else {
			return $connection;
		} 
	}

	function disconnectDatabase() {
		$connection->close();
	}

?>