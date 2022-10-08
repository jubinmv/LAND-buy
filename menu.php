<?php
	if(isset($_SESSION['logged_in']) AND $_SESSION['logged_in'] == 1)
	{
		$loginProfile = "My Profile: ". $_SESSION['Username'];
		$logo = "glyphicon glyphicon-user";
		$link = "Login/profile.php";
		
	}
	else
	{
		$loginProfile = "Login";
		$link = "index.php";
		$logo = "glyphicon glyphicon-log-in";
	}
?>

<!DOCTYPE html>
			<header id="header">
				<h1>Farmland Divination</h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php"> Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="landss.php">Lands</a></li>
						<li><?php echo" ". $loginProfile; ?></li>
						
							</ul>
				</nav>
			</header>

	</body>
</html>
