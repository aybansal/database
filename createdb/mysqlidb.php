<?php
$servername="localhost";
$username="root";
$password="";
$conn=new mysqli($servername,$username,$password);
	if($conn->connect_error){
		die("could not connect".$conn->connect_error);
		
	}
$sql = "CREATE DATABASE emp_db";
	if ($conn->query($sql) == TRUE){
		echo "database create successful";
	}
	else{
		echo "fail".$conn->error;
	}
	echo "connection is successful";
$conn->close();
?>