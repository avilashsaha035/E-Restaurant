<?php

	$myemail="sahaavilash5055@gmail.com";
	$mypass="12345";

	if(isset($_POST['login'])){
		$email=$_POST['email'];
		$pass=$_POST['password'];
		if($email==$myemail and $pass==$mypass){
			if(isset($_POST['remember'])){
				setcookie('email',$email,time()*60*60*7);
				header("location:index.php")
			}
		}
		else{
			echo"Email or Password is invalid.<br> Click Here To <a href='login.php'>Try Again</a>";
		}
		else{
			header("location:login.php");
		}
	}
?>