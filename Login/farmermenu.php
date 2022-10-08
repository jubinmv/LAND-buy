<?php
$text = '';
$textLink = '';
	if(isset($_SESSION['logged_in']) AND $_SESSION['logged_in'] == 1)
	{
		$loginProfile = "My Profile: ". $_SESSION['Username'];
		$logo = "glyphicon glyphicon-user";
		if($_SESSION['Category']!= 1)
		{
			$link = "profile.php";
		}
		else {
				$link = "../profileView.php";
		}
	}
	else
	{
		$loginProfile = "Login";
		$link = "../index.php";
		$logo = "glyphicon glyphicon-log-in";
	}
?>

<!DOCTYPE html>
			<header id="header">
				<h1>Farmland Divination</h1>
				<nav id="nav">
					<ul>
                        <li><a href="farmer.php"> Home</a></li>
						<li><a href="activities.php"> Activities</a></li>
                        <li><a href="Notifications.php"> Notifications</a></li>
                        <li><a href="viewfarmer.php"> View Farmers</a></li>
                        <li><a href="viewlandowner.php"> View landowners</a></li>
						<li><a href="../profileView.php"><?php echo" ". $loginProfile; ?></a></li>
						<li><a href="logout.php">Logout</a></li>
						
					</ul>
				</nav>
			</header>

	</body>
</html>
