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
        <title>Farmer</title>
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
            require 'landownermenu.php';
        ?>
        <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="indexfooter.css" />

	

<style>
  
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
</style>
</head>
<body>
<?php
 require '../db.php';
 
$sql = "SELECT * from landinfo where categoryid=1";
$result = $conn->query($sql);
?>

<div class="row w-90 ma-auto">
<?php
 if ($result !== false && $result->num_rows > 0){

  while($row = $result->fetch_assoc()) {
 ?>
  <div class="column pa-1  mb-0">
    <div class="card pa-2">
    <div class="land-img">
     <img src="<?php echo $row["image"]; ?>" class="w-100 h-100">
    </div>
      <div>
        <h2 style="text-transform: capitalize;">
        <svg class="jss189" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation" style="font-size: 22px;height: 22px; color: rgb(255, 255, 255);"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"></path><path fill="none" d="M0 0h24v24H0z"></path></svg>
        <?php echo $row["location"]; ?>
      </h2>
        <h3>Acre: <?php echo $row["landArea"]; ?></h3>
        <h3>Price: ₹<?php echo $row["price"]; ?> / acer</h3>
        <p class="ma-0"><a href="../Login/agriland.php?category=cat1" class="button pa-0">View Lands</a></p>
      </div>
    </div>
  </div>
  <?php
 }
}
  ?>
</div>
    		<script src="../assets/js/jquery.min.js"></script>
            <script src="../assets/js/jquery.scrolly.min.js"></script>
            <script src="../assets/js/jquery.scrollex.min.js"></script>
            <script src="../assets/js/skel.min.js"></script>
            <script src="../assets/js/util.js"></script>
            <script src="../assets/js/main.js"></script>
	</body>
</html>
