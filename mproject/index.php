<?php
session_start();
$mysqli = new mysqli("localhost","root","","eres");

if($mysqli->connect_error){
	die("connection failed".$mysqli->connect_error);
}else{
		if (isset($_POST['cmnt_button'])) {
		//print_r($mysqli);
			$priceOrder = $_POST['Quantity'];
			$cmt = $_POST['t1'];

			$true =$mysqli-> query("INSERT INTO myorder (priceOrder,cmt) VALUES ('$priceOrder','$cmt') ");

			//print_r($true);


			if($true==true)
				echo "sucessfullhy saved";
			else
				echo "uncessfull";
		}
}

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet"href="style1.css"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		
	</head>
	<body>
		<?php
			if(isset($_SESSION['message'])){
				echo "<div id='error_msg'>".$_SESSION['message']."</div>";
				unset($_SESSION['message']);
			}
		?>

		
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="#">My Dream Restaurant</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
				  <li class="nav-item active">
					<a class="nav-link" href="#">Home</a>
				  </li>
				 <div class="dropdown">
  				 <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu </a>
				  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
				    <a class="dropdown-item" href="breakfast.php">Breakfast</a>
				    <a class="dropdown-item" href="lunch.php">Lunch</a>
				    <a class="dropdown-item" href="dinner.php">Dinner</a>
				  </div>
				</div>
				  <li class="nav-item">
					<a class="nav-link" href="contact.php">Contact Us</a>
				  </li>
				   <li class="nav-item">
					<a class="nav-link" href="about.php">About Us</a>
				  </li>
				    <li class="nav-item">
					<a class="nav-link" href="logout.php">Logout</a>
				  </li>		
				</ul> 
	   </nav>
		<div id="mySidenav" class="sidenav">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		  
				<nav id="sidebar">
					<ul class="list-unstyled components">
						<li class="active">
							<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">BURGURES</a>
								<ul class="collapse list-unstyled" id="homeSubmenu">
									<li>
										<a href="Eb.php">1.Egg Burger</a>
									</li>
									<li>
										<a href="Cb.php">2.Chicken Burger</a>
									</li>
									<li>
										<a href="Sb.php">3.Student Burger</a>
									</li>
									<li>
										<a href="CSb.php">4.Cheese Burger</a>
									</li>
								</ul> 
						</li>
					
						<li>
							<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Drinks</a>
								<ul class="collapse list-unstyled" id="pageSubmenu">
									<li>
										<a href="coffee.php">1.Coffee</a>
									</li>
									<li>
										<a href="juice.php">2.Juice</a>
									</li>
									<li>
										<a href="faluda.php">3.Faluda</a>
									</li>
								</ul> 
						</li>
					</div>
				</nav>
				



					 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
					 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
					 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
			
		<div id="main">
		  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; CATEGORIES:</span>
		</div>



		<script>
		function openNav() {
		  document.getElementById("mySidenav").style.width = "250px";
		  document.getElementById("main").style.marginLeft = "250px";
		  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
		}

		function closeNav() {
		  document.getElementById("mySidenav").style.width = "0";
		  document.getElementById("main").style.marginLeft= "0";
		  document.body.style.backgroundColor = "white";
		}
		</script>
	</body>
	
</html>