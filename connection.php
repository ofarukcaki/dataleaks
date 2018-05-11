<?php 
try{$db_site = new PDO('mysql:host=localhost;dbname=auth','root','');
} catch(PDOException $e){
	die('<h3>Unable to connect data servers... Please try again later</h3><br/>');
}
?>