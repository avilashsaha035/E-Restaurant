<?php
	session_start();
	$db=mysqli_connect("localhost","root","","authentication");


	if(isset($_POST['login_btn'])){
		$username=($_POST['username']);
		$password=($_POST['password']);
		
		$password=md5($password);
		$sql="SELECT * FORM user WHERE username='$username' AND password='$password'";
		$result=mysqli_query($db,$sql);

		if(!$result&&mysqli_num_rows($result)==0){
			$_SESSION['message']="You Are Now Logged In";
			$_SESSION['username']=$username;
			//$_SESSION['password']=$password;
			header("location:index.php");
		}
		else{
			$_SESSION['message']="username Or Password Is Wrong";
		}
	}
?>


<!DOCTYPE html>
<html>
<body>
<head>
	 <link rel="stylesheet"href="login.css"/>
</head>
	<div class="header">
		<h1>WELCOME TO E-RESTAURANT</h1>
	</div>

	<?php
			if(isset($_SESSION['message'])){
				echo "<div id='error_msg'>".$_SESSION['message']."</div>";
				unset($_SESSION['message']);
			}
	?>


	<form method="post" action="login.php">
		<p>If you are not registered you should <a class="a" href="registration.php">Registration here</a></p>
		<table>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username" class="textInput" required></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password" class="textInput" required></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="login_btn" value="Login" class="login"></td>
			</tr>
		</table>
	</form>
</body>
</html>