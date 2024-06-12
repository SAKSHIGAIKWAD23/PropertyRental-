<?php
	session_start();

	// Define database
	define('dbhost', 'localhost');
	define('dbuser', 'id19603917_root');
	define('dbpass', 'Root@1818');
	define('dbname', 'id19603917_newrent');

	// Connecting database
	try {
		$connect = new PDO("mysql:host=".dbhost."; dbname=".dbname, dbuser, dbpass);
		$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}

?>
