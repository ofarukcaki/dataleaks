<?php
/*
	CONFIG FILE FOR USER DATA & OTHER
*/
define('DB_HOST', '127.0.0.1');// default value: localhost or 127.0.0.1
define('DB_NAME', '');// database name
define('DB_USER', '');// username
define('DB_PASS', '');// password

try{
	$db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
}
catch(PDOException $e){
	die('Unable to connect data servers... Please try again later');
}
?>
