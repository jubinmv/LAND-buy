<?php

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
						<li><a><span class="<?php echo $logo; ?>"></span><?php echo" ". $loginProfile; ?></a></li>
						
					</ul>
				</nav>
			</header>

	</body>
</html>
