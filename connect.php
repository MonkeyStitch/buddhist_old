<?php
	error_reporting(1); // close error

	$host		= 	'localhost';
	$username	= 	'root';
	$password	= 	'';
	$dbname		= 	'thai_buddhist';


	if(false){
		try {

			$handle = new PDO("mysql:dbname=$dbname;host=$host;charset=utf8", $username, $password);

			$handle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		} catch (PDOException $ex) {
			echo 'ERROR =>>> ' . $ex->getMessage();
		}
	} else {
		$handle = new mysqli($host, $username, $password, $dbname);

		$handle->set_charset('utf8');
	}