<?php
$servername="localhost";
$username="root";
$password="";
	try{
		$conn=new PDO("mysql:host=$servername; dbname=emp_db","$username","$password");
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		echo "connection successful";
	}
	
	catch (PDOException $e){
		echo "coneection fail". $e->getMessage();
	}
	$conn=null;
?>