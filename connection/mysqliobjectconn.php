<?php
$servername="localhost";
$username="admin";
$password="";
 $conn=new mysqli($servername,$username,$password);
	if($conn->connect_error){
		die("could not connect ".$conn->connect_error);
	}
	echo "connection successful";
	$conn->close();
?>
