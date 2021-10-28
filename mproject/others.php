<?php
session_start();
$mysqli = new mysqli("localhost","root","","others");

if($mysqli->connect_error){
	die("connection failed".$mysqli->connect_error);
}else{
		if (isset($_POST['cmnt_button'])) {
		//print_r($mysqli);
			$cmt = $_POST['t1'];

			$true =$mysqli-> query("INSERT INTO other (cmt) VALUES ('$cmt') ");

			//print_r($true);


			if($true==true)
				echo "sucessfullhy saved";
			else
				echo "uncessfull";
		}
}

?>
