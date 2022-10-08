<?php
    session_start();

	if(!isset($_SESSION['logged_in']) OR $_SESSION['logged_in'] != 1)
	{
		$_SESSION['message'] = "You have to Login to view this page!";
		header("Location: Login/error.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./css/style.css" />
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h2 style="text-align:center">User Profile</h2>

<div class="card w-50 max-w-50">
  <img src="<?php echo 'images/profileImages/'.$_SESSION['picName'].'?'.mt_rand(); ?>" alt="John" class="w-50 mt-2">
  <h1><?php echo $_SESSION['Email'];?></h1>
  <p class="title"><?php echo $_SESSION['Mobile'];?></p>
  <p><?php echo $_SESSION['Addr'];?></p>
  <div class="container">
    <div class="row w-100">
        <div style="float: left" class="w-50">
        <a href="changepassword.php" style="color:blue">Change Password</a>
        </div>
        <div style="float: right" class="w-50">
            <a href="profileEdit.php" style="color:blue">Edit Profile</a>
            </div>
        </div>
    
    <div class="row w-100 mt-2">
        <div>
         <a href="Login/logout.php" style="color:blue">LOG OUT</a>
        </div>
    </div>
  </div>
  <!-- <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><button>Contact</button></p> -->
</div>
</body>
</html>
