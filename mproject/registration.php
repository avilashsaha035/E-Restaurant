<?php
	session_start();
	$db=mysqli_connect("localhost","root","","authentication");


	if(isset($_POST['register_btn'])){
		$username=($_POST['username']);
		$email=($_POST['email']);
		$password=($_POST['password']);
		$password2=($_POST['password2']);

		if($password==$password2){
			//user creat
			$password=md5($password);
			$sql="INSERT INTO user(username,email,password) VALUES('$username','$email','$password')";
			mysqli_query($db,$sql);
			$_SESSION['message']="You Are Now Registered";
			$_SESSION['username']=$username;
			header("location:login.php");
		}
		else{
			$_SESSION['message']="The Two Password Do Not Match";

		}
	}
?>


<!DOCTYPE html>
<html>
<body>
<head>
	<link rel="stylesheet"href="reg.css">
</head>
	<div class="header">
		<h1>THANKS FOR REGISTRATION</h1>
	</div>

	<?php
			if(isset($_SESSION['message'])){
				echo "<div id='error_msg'>".$_SESSION['message']."</div>";
				unset($_SESSION['message']);
			}
	?>


	<form method="post" action="registration.php">
		<table>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username" placeholder="username" class="textInput" required></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="email" name="email" placeholder="email" class="textInput" required></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password" placeholder="password"  class="textInput" required></td>
			</tr>
			<tr>
				<td> Confirm Password:</td>
				<td><input type="password" name="password2" placeholder="confirm Password"  class="textInput" required></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="register_btn" value="Register"  class="rgst"></td>
			</tr>
		</table>
	</form>
</body>
</html>