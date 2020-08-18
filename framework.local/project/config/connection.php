<?php
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'framework');

	$driver = 'mysql';
	$host = 'localhost';
	$dbuser = 'root';
	$pass = '';
	$dbname = 'framework';

	$charset = 'utf8';
	$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

	/* ==================================================== */

	try {
		$pdo = new PDO("$driver:host=$host; dbname=$dbname; charset=$charset", $dbuser, $pass, $options);
	} catch (PDOException $e) {
		die( 'Connection failed: ' . $e->getMessage() );
	}
	