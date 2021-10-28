
<?php
session_start();
$mysqli = new mysqli("localhost","root","","payment");

if($mysqli->connect_error){
	die("connection failed".$mysqli->connect_error); 
}else{
		if (isset($_POST['submit_btn'])) {
		//print_r($mysqli);
			$Username = $_POST['username'];
			$Pass = $_POST['password'];
 			$Bkash = $_POST['bkash'];
            $Transaction = $_POST['trsc'];

			$true =$mysqli-> query("INSERT INTO pay (username,pass,bkash,transac) VALUES ('$Username','$Pass','$Bkash','$Transaction') ");

			//print_r($true);


			if($true==true)
				echo "sucessfullhy saved";
			else
				echo "uncessfull";
		}
}

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet"href="reg.css"/>
</head>
	<title>Cart</title>
</head>
<body>
	<form method="post" action="cart.php">
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
				<td>Bkash Number:</td>
				<td><input type="password" name="bkash" class="textInput" required></td>
			</tr>
			<tr>
				<td>Transaction Id:</td>
				<td><input type="password" name="trsc" class="textInput" required></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit_btn" value="Submit" class="rgst"></td>
			</tr>
		</table>
</body>
</html>