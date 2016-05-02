<?php
	$con=mysql_connect("localhost","admin","");
		if(!$con){
			die('could not connect'.mysql_error());
		}
		echo "connection is successfull";
	mysql_close();
?>