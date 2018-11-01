<?php
define('DB_HOST', '')
define('DB_NAME', '')
define('DB_USER', '')
define('DB_PASSWORD', '')
try{
	$db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
}
catch(PDOException $e){
	die('<h3>Unable to connect data servers... Please try again later</h3><br/>');
}
?>
