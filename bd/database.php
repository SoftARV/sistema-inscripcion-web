<?php 

	define("databaseServer", "localhost");
	define("databaseUser", "root");
	define("databasePassword", "");
	define("databaseName", "sistema_inscripcion_bd");

	function connectDatabase() {
		$connection = new mysqli(databaseServer, databaseUser, databasePassword, databaseName);

		if ($connection->connect_error) {
			die("Conection failed: " . $connection->connect_error);
		} else {
			echo "Connected";
			return $connection;
		} 
	}

	function disconnectDatabase() {
		$connection->close();
	}

?>