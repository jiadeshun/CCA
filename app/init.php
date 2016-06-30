<?php

$SERVER = "localhost";
$USER = "root";
$PASSWORD = "";
$DB = "cca";

try {

$conn = new PDO ("mysql:dbname=$DB; host=$SERVER",$USER, $PASSWORD) or die ("Cannot connect to database.");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected.";

} catch (PDOException $e) {
	
	echo $e->getMessage();
	
	}




?>