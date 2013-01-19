<?php
	
	/* DATABASE LOCAL */
		$server = "localhost";
		$user = "root";
		$password = "";
		$dbase = "_bd";
	
	/* DATABASE REMOTE 
		$server = "localhost";
		$user = "launchca_user";
		$password = "launchcardlabs";
		$dbase = "launchca_bd";
		*/

	
	
	try {
		$db = new PDO("mysql:host=${server};dbname=${dbase}", $user, $password);
	} catch(PDOException $e) {
		echo $e->getMessage();
	}
	
?>