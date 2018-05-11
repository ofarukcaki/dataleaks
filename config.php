<?php 
try{$db = new PDO('mysql:host=localhost;dbname=dataleaks','root','');
} catch(PDOException $e){
	die('<h3>Unable to connect data servers... Please try again later</h3><br/>');
}
?>