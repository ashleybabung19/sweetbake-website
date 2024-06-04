<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "dblogin1";


try{	
	$conn = new PDO("mysql:host1=$servername; dbname=dblogin1", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
	echo "Connection failed: " ; $e->getMessage();
}

