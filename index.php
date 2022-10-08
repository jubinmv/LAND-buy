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
				<p>Welcome to Farmland Divination, India's First Agri Land Marketplace.
A liquidity platform to lease agricultural lands, small farms and estate lands.
The simplest way to make the lands more productive .</p>
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

					</div>
				</div>
			</section>


		<!-- Footer -->
		<footer class="footer-distributed" style="background-color:black" id="aboutUs">
		<center>
			<h1 style="font: 35px calibri;">Contact Us</h1>
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
				<p style="font-size:20px">Farmland<span>Kottayam</span></p>
			</div>
			<div>
				<i class="fa fa-phone"></i>
				<p style="font-size:20px">7559070422
			
			</p>
			</div>
			<div>
				<i class="fa fa-envelope"></i>
				<p style="font-size:20px"><a href="mailto:farmland@gmail.com" style="color:white">jubinmvarughese007@gmail.com</a></p>
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
								<div class="row uniform 50% w-100 ma-0">
									<div class="7u$ w-100 pa-0">
										<input type="text" name="uname" id="uname" value="" placeholder="UserName" class="w-100" required/>
									</div>
									<div class="7u$ w-100 mt-2 pa-0">
										<input type="password" name="pass" id="pass" value="" placeholder="Password" class="w-100" required/>
									</div>
								</div>
									<div class="row uniform w-50 mt-2 ml-0">											
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
					<input type="text" name="name" id="name" value="" placeholder="Name" required  pattern="[A-Za-z]{3,}"/>
					
				</div>
				<div class="3u 12u$(xsmall) w-100">
					<input type="text" name="uname" id="uname" value="" placeholder="UserName" required pattern="[A-Za-z]{3,}"/>
				</div>
			</div>
			<div class="row uniform w-100 ma-0">
				<div class="3u 12u$(xsmall) w-100">
					<input type="text" name="mobile" id="mobile" value="" placeholder="Mobile Number" required pattern="[0-9]{10}"/>
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
						<input type="radio" name="gender" id="gender1" value="MALE"><label for="gender1">Male</label>
					</div>
					<div class="3u 12u$(small)">
						<input type="radio" name="gender" id="gender2"  value="MALE"><label for="gender2">Female</label>
					</div>
			</div>
			<div class="row uniform w-100 ma-0">
				<div class="3u 12u$(xsmall) w-100">
					<input type="password" name="password" id="password" value="" placeholder="Password" required  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{3,}/>
				</div>
				<div class="3u 12u$(xsmall) w-100">
					<input type="password" name="pass" id="pass" value="" placeholder="Retype Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{3,}/>
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
					<input type="radio" id="farmer1" name="category1" value="FARMER" >
					<label for="farmer1">Farmer</label>
				</div>
				<div class="3u 12u$(small) w-100">
					<input type="radio" id="landowner1" name="category1" value="LAND_OWNER">
					<label for="landowner1">Landowner</label>
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
