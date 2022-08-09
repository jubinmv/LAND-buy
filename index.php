<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Farmland Divination</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="login.css"/>
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<link rel="stylesheet" href="indexfooter.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>

	<?php
		require 'menu.php';
	?>

		<!-- Banner -->
			<section id="banner" class="wrapper">
				<div class="container">
				<h2>Farmland Divination</h2>
				<p>Your Land Our Market</p>
				<br><br>
				<center>
					<div class="row uniform">
						<div class="6u 12u$(xsmall)">
							<button class="button fit" onclick="document.getElementById('id01').style.display='block'" style="width:auto">LOGIN</button>
						</div>

						<div class="6u 12u$(xsmall)">
							<button class="button fit" onclick="document.getElementById('id02').style.display='block'" style="width:auto">REGISTER</button>
						</div>
					</div>
				</center>


			</section>

		<!-- One -->
			<section id="one" class="wrapper style1 align-center">
				<div class="container">
					<header>
						<h2>Farmland Divination</h2>
						<p>Explore the new way of agriculture...</p>
					</header>
					<div class="row 200%">
						<section class="4u 12u$(small)">
							<i class="icon big rounded fa-clock-o"></i>
							<p>About</p>
						</section>
						<section class="4u 12u$(small)">
							<i class="icon big rounded fa-comments"></i>
							<p>Contact</p>
						</section>
						<section class="4u$ 12u$(small)">
							<i class="icon big rounded fa-user"></i>
							<p>Register with us</p>
						</section>
					</div>
				</div>
			</section>


		<!-- Footer -->
		<footer class="footer-distributed" style="background-color:black" id="aboutUs">
		<center>
			<h1 style="font: 35px calibri;">About Us</h1>
		</center>
		<div class="footer-left">
			<h3 style="font-family: 'Times New Roman', cursive;">Farmland Divination </h3>
		<!--	<div class="logo">
				<a href="index.php"><img src="images/logo.png" width="200px"></a>
			</div>-->
			<br />
			<p style="font-size:20px;color:white">Your Land Our market !!!</p>
			<br />
		</div>

		<div class="footer-center">
			<div>
				<i class="fa fa-map-marker"></i>
				<p style="font-size:20px">Farmland<span>Vormir</span></p>
			</div>
			<div>
				<i class="fa fa-phone"></i>
				<p style="font-size:20px">123456789</p>
			</div>
			<div>
				<i class="fa fa-envelope"></i>
				<p style="font-size:20px"><a href="mailto:farmland@gmail.com" style="color:white">demo@demo.com</a></p>
			</div>
		</div>

		<div class="footer-right">
			<p class="footer-company-about" style="color:white">
				<span style="font-size:20px"><b></b></span>
				Farmland Divination is e-commerce trading platform to lease agricultural lands...
			</p>
			<div class="footer-icons">
				<a  href="#"><i style="margin-left: 0;margin-top:5px;"class="fa fa-facebook"></i></a>
				<a href="#"><i style="margin-left: 0;margin-top:5px" class="fa fa-instagram"></i></a>
				<a href="#"><i style="margin-left: 0;margin-top:5px" class="fa fa-youtube"></i></a>
			</div>
		</div>

	</footer>


			<div id="id01" class="modal">

  <form class="modal-content animate" action="Login/login.php" method='POST'>
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container w-100 pa-2">
    <h3>Login</h3>
							<form method="post" action="Login/login.php">
								<div class="row uniform 50% w-100">
									<div class="7u$ w-100">
										<input type="text" name="uname" id="uname" value="" placeholder="UserName" class="w-100" required/>
									</div>
									<div class="7u$ w-100">
										<input type="password" name="pass" id="pass" value="" placeholder="Password" class="w-100" required/>
									</div>
								</div>
									<div class="row uniform w-100">
										<p>
				                            <b>User Type : </b>
				                        </p>
				                        <div class="3u 12u$(small)">
				                            <input type="radio" id="admin" name="category" value="ADMIN">
				                            <label for="admin">Admin</label>
				                        </div>
				                        <div class="3u 12u$(small)">
				                            <input type="radio" id="landowner" name="category" value="LAND_OWNER">
				                            <label for="landowner">Landowner</label>
				                        </div>
										<div class="3u 12u$(small)">
				                            <input type="radio" id="farmer" name="category" value="FARMER">
				                            <label for="farmer">Farmer</label>
				                        </div>
									</div>
									<div class="row uniform w-100 ma-0">											
										<div class="7u 12u$(small) w-100 pa-0">
											<input type="submit" value="Login" class="w-100" />
										</div>
									</div>
								</div>
							</form>
						</section>
</div>
    </div>
    </div>
  </form>
</div>


<div id="id02" class="modal">

  <form class="modal-content animate" action="Login/signup.php" method='POST'>
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container w-100">

		<section>
		<h3>SignUp</h3>
			<div class="row uniform w-100 ma-0">
				<div class="3u 12u$(xsmall) w-100">
					<input type="text" name="name" id="name" value="" placeholder="Name" required/>
				</div>
				<div class="3u 12u$(xsmall) w-100">
					<input type="text" name="uname" id="uname" value="" placeholder="UserName" required/>
				</div>
			</div>
			<div class="row uniform w-100 ma-0">
				<div class="3u 12u$(xsmall) w-100">
					<input type="text" name="mobile" id="mobile" value="" placeholder="Mobile Number" required/>
				</div>

				<div class="3u 12u$(xsmall) w-100">
					<input type="email" name="email" id="email" value="" placeholder="Email" required/>
				</div>
			</div>
			<div class="row uniform w-100 ma-0">
					<p>
						<b>Gender : </b>
					</p>
					<div class="3u 12u$(small)">
						<input type="radio" name="gender" id="gender1"><label for="gender1">Male</label>
					</div>
					<div class="3u 12u$(small)">
						<input type="radio" name="gender" id="gender2"><label for="gender2">Female</label>
					</div>
			</div>
			<div class="row uniform w-100 ma-0">
				<div class="3u 12u$(xsmall) w-100">
					<input type="password" name="password" id="password" value="" placeholder="Password" required/>
				</div>
				<div class="3u 12u$(xsmall) w-100">
					<input type="password" name="pass" id="pass" value="" placeholder="Retype Password" required/>
				</div>
			</div>
			<div class="row uniform w-100 ma-0">
				<div class="6u 12u$(xsmall) w-100">
					<input type="text" name="addr" id="addr" value="" placeholder="Address" required>
				</div>
			</div>
			<div class="row uniform w-100 ma-0">
				<p>
					<b>User Type : </b>
				</p>
				<div class="3u 12u$(small) w-100">
					<input type="radio" id="admin1" name="category1" value="ADMIN" >
					<label for="admin1">Admin</label>
				</div>
				<div class="3u 12u$(small) w-100">
					<input type="radio" id="landowner1" name="category1" value="LAND_OWNER">
					<label for="landowner1">Landowner</label>
				</div>
				<div class="3u 12u$(small) w-100">
					<input type="radio" id="farmer1" name="category1" value="FARMER">
					<label for="farmer1">Farmer</label>
				</div>
			</div>
			<div class="row uniform w-100 ma-0">
				<div class="3u 12u$(small) w-50">
					<input type="submit" value="Submit" name="submit" class="special" /></li>
				</div>
				<div class="3u 12u$(small) w-50">
					<input type="reset" value="Reset" name="reset"/></li>
				</div>
			</div>
		</section>
    </div>
  </form>
</div>



<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var modal1= document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}

</script>


	</body>
</html>
