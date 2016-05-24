<?php 

	define("databaseServer", "localhost");
	define("databaseUser", "root");
	define("databasePassword", "");
	define("databaseName", "sistema_inscripcion_bd");

	$conn;

	function connectDatabase() {
		$GLOBALS['conn'] = new mysqli(databaseServer, databaseUser, databasePassword, databaseName);

		if ($GLOBALS['conn']->connect_error) {
			die("Conection failed: " . $conn->connect_error);
		} else echo "Connected";
	}

	function disconnectDatabase() {
		$GLOBALS['conn']->close();
	}

?>