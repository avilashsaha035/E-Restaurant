<?php
session_start();
$mysqli = new mysqli("localhost","root","","contact");

if($mysqli->connect_error){
	die("connection failed".$mysqli->connect_error);
}else{
		if (isset($_POST['button'])) {
		//print_r($mysqli);
			$name = $_POST['name'];
			$email = $_POST['email'];
			$massage = $_POST['t1'];

			$true =$mysqli-> query("INSERT INTO cnct (name,email,massage) VALUES ('$name','$email','$massage') ");

			//print_r($true);


			if($true==true)
				echo "sucessfullhy saved";
			else
				echo "uncessfull";
		}
}

?>

<html>
<head>
	<title>Contact Form</title>
	<link rel = "stylesheet" type ="text/css" href = "cnct.css">
	</head>
	<body>
		<div class="contact-title">
			<center> You can get any help or information from 10.00 am to 10.00 pm </center>
			<h1> Please fill it </h1>
		</div>
		
		<div class="contact-form">
			<form id="contact-form" method="post" action="contact.php">
				<input name="name" type="text" class="form-control" placeholder="Your name" required><br>
				<input name="email" type="email" class="form-control" placeholder="Your email" required><br>
				<textarea name="t1" class="form-control" placeholder="Message" rows="4" required></textarea><br>
				<input type="submit" class="form-control submit" name="button" value="send message"><br><br>
			</form>
		</div>
	</body>
</html>