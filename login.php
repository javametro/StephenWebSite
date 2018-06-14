<?php
	$host = "localhost";
	$user = "xxx";
	$password = "xxx";
	$db = "xxx";
	
	mysql_connect($host, $user, $password);
	mysql_select_db($db);
	
	if(isset($_POST['username'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$sql = "select * from login_user where username='".$username."' and password = '".$password."' limit 1";
		$result = mysql_query($sql);
		
		if(mysql_num_rows($result) == 1){
			
			echo "You have successfully logged in.";
			exit();
		}else{
			
			echo "You username or password is not correct.";
		}	
		
	}
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Form in Design</title>
		<link rel="stylesheet" a href="css3\style.css"/>
		<link rel="stylesheet" a href="css3\font-awesome.min.css"/>
	</head>
	
	<body>
		<div class="container">
			<img src="image/login.png"/>
			<form method="POST" action="#">
				<div class="form_input">
					<input type="text" name="username" placeholder=" Enter Your User Name"/>
				</div>
				
				<div class="form_input">
					<input type="password" name="password" placeholder=" Enter Your Password"/>
				</div>
				
				<input type="submit" name="submit" value="LOGIN" class="btn-login"/>
			</form>
		</div>
	</body>
</html>