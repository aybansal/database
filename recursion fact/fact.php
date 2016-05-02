<html>
	<body>
		<form method="post" action="#">
			<table>
				<tr>	
					<td>Enter the no. :</td> <td><input type="text" name="digit"></td>
				</tr>
				
				<tr>
					<td> </td> <td><input type="submit" value="submit"></td>
					
				</tr>
			</table>
		</form>
		
		<?php
			if($_POST){
				$val=($_POST["digit"]);
			}
			print fact($val);
			
			
			function fact($a){
				
				if($a == 0){
					return 1;
				}
				else{
					return $a * fact($a - 1);
				}
				
			
					
				
				
			}
			
		?>
	</body>
</html>
			
			