<?php 
	if($_POST){
		$s=($_POST["name"]);
		
	}
	echo "result :".$s;
	$q=strlen($s);
	echo "<br>";
	
		for($i = $q-1; $i >= 0;$i--){
			echo $s[$i];
			
		}
			// print the reverse string
			/*
			for($i =$q-1 ;$i >= 1; $i--){
				echo $a[i];
				
			}
			*/
?>