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
				<h1><a href="index.php">Farmland Divination</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php"> Home</a></li>
						<li><a href="../about.php"> About</a></li>
						<li><a href="<?= $link; ?>"><?php echo" ". $loginProfile; ?></a></li>
							</ul>
				</nav>
			</header>

	</body>
</html>
