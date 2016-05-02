<?php
$conn=mysql_connect("localhost","admin","");
	if(!$conn){
		die('could not connect'.mysql_error());
	}
	echo "connection is successful";
mysql_close();
?>