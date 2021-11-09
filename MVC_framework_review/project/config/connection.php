<?php
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'framework');

	$driver = 'mysql';
	$pass = '';
	$host = 'localhost';
	$dbname = 'framework';
	$dbuser = 'root';

	$charset = 'utf8';
	$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

	/* ====================================================== */

	try {
		$pdo = new PDO("$driver:host=$host; dbname=$dbname; charset=$charset", $dbuser, $pass, $options);
	} 
	catch (PDOExeption $e) {
		die( 'Connection failed: ' . $e->getMessage() );
	}


	// $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	// if(!$conn->connect_error) {
	// 	echo 'Connection successfully';
	// } else {
	// 	die ('Connection error: ' . $conn->connect_error);
	// }

	
