<?php 

	define(databaseServer, "localhost");
	define(databaseUser, "root");
	define(databasePassword, "");
	define(databaseName, "inscripciones_bd");

	$conn;

	function connectToDatabase() {
		$GLOBALS['conn'] = new mysqli(databaseServer, databaseUser, databasePassword, databaseName);

		if ($GLOBALS['conn']->connect_error) {
			die("Conection failed: " . $conn->connect_error);
		}
	}

?>