<html>
	<head>
		<style>
			.error{
				color: red;
			}
		</style>
	</head>
	
	<body>
		<?php
		
			if($_POST){
				if(empty($_POST["uname"])){
				$nameErr = "Name is required";	
				//echo "enter your name";
				}
				else{
					$name=($_POST["uname"]);
					
				}
				
				if(empty($_POST["email"])){
					$emailErr = "Email is required";
					
				}
				else{
					$email1=($_POST["email"]);
				}
				
				
				if(empty($_POST["gender"])){
					$genErr = "Gender is required";
					
				}
				else{
					$gender1=($_POST["gender"]);
				}
				
			}
			?>
		<form method="post" action="#">
			<table>
				<tr>
					<td>Enter your name</td> <td><input type="text" name="uname" placeholder="enter name" </td>
					 <span class="error">* <?php echo $nameErr;?></span> 
				</tr>
				
				
				<tr>
					<td>Enter Email Address</td> <td> <input type="text" name="email" placeholder="enter your email" </td>
					<span class="error" >* <?php echo $emailErr;?></span>
				</tr>
				
				
				
				<tr>
					<td> Select gender </td> <td> <input type="radio" value="Female" name="gender">Female
					
												   <input type="radio" value="Male" name="gender">Male 
											 </td>
						<span class="error"> * <?php echo $genErr;?> </span>
				</tr>	
				
				
				<tr>
					<td> </td> <td><input type="submit" value="submit"></td>
				</tr>
				
			</table>
		</form>
		<?php
			echo "Your name is :".$name;
			echo "<br> Your Email Address is :".$email1;
			echo "<br> Your Gender is :".$gender1;
		?>
	</body>
</html>
		
			
		