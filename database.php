<?php


function dbConn(){


	try{

		$host ="localhost";
		$dbname = "id14584181_pic16db";
		$username = "id14584181_pic16";
		$password ='GgI^7VjpQKFB#2CZ17pb';

		$dsn = "mysql:host=" . $host . ";dbname=" . $dbname;
		$connection = new PDO($dsn, $username, $password);

		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		return $connection;

	} catch(PDOException $e){
		echo $e->getMessage();
	}
}	
?>