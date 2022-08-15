<?php
session_start();
    if ( $_SESSION['logged_in'] != 1 )
    {
      $_SESSION['message'] = "You must log in before viewing your profile page!";
      header("location: error.php");
    }
    else
    {

       $email =  $_SESSION['Email'];
       $name =  $_SESSION['Name'];
       $user =  $_SESSION['Username'];
       $mobile = $_SESSION['Mobile'];
       $active = $_SESSION['Active'];
    }
?>

<!DOCTYPE html>
<html>
	<head>
        <title>Landowner</title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
		<link href="../bootstrap\css\bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="../bootstrap\js\bootstrap.min.js"></script>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="../js/jquery.min.js"></script>
		<script src="../js/skel.min.js"></script>
		<script src="../js/skel-layers.min.js"></script>
		<script src="../js/init.js"></script>
		<link rel="stylesheet" href="../css/skel.css" />
		<link rel="stylesheet" href="../css/style.css" />
		<link rel="stylesheet" href="../css/style-xlarge.css" />
    </head>

	<body>
	   <?php
            require 'menu.php';
        ?>
        <div>
            <h1 style="text-align: center; font-size: 2em; margin: auto; padding-top: 50px">Hi, Landowner</h1>
        </div>

    		<script src="../assets/js/jquery.min.js"></script>
            <script src="../assets/js/jquery.scrolly.min.js"></script>
            <script src="../assets/js/jquery.scrollex.min.js"></script>
            <script src="../assets/js/skel.min.js"></script>
            <script src="../assets/js/util.js"></script>
            <script src="../assets/js/main.js"></script>
	</body>
</html>
