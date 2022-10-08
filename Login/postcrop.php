 
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
<div class="w-90 ma-auto">
    <form method="post" action="addcrop.php" enctype="multipart/form-data">
        <div class="row">
             <div class="col-lg-12 col-md-12">
                <div class="form-group text-start">
                <label for="title" class="form-label fw-normal fs-5">Crop Name</label>
                    <input type="text" id="namee" name="cropname" class="form-control" placeholder="Crop Name">
                </div>
            </div> 
            <div class="col-lg-12 col-md-12 mt-2">
                <div class="form-group text-start">
                    <label class="form-label fw-normal fs-5">Price</label>
                    <input type="text" id="price" name="price" class="form-control" placeholder="Price">

                </div>
            </div>
            <div class="col-lg-12 col-md-12 mt-2">
                <div class="form-group text-start">
                    <label class="form-label fw-normal fs-5">Required soil type</label>
                    <input type="text" id="soiltype" name="soiltype" class="form-control" placeholder="Required soil type">

                </div>
            </div>
            <div class="col-lg-12 col-md-12 mt-2">
                <div class="form-group text-start">
                    <label class="form-label fw-normal fs-5">Fertilizers</label>
                    <input type="text" id="fertilizers" name="fertilizers" class="form-control" placeholder="Fertilizers">
                </div>
            </div>
            <div class="col-lg-12 col-md-12 mt-2">
                <div class="form-group text-start">
                    <label class="form-label fw-normal fs-5">Temperature</label>
                    <input type="text" id="temperature" name="temperature" class="form-control" placeholder="temperature">
                </div>
            </div>
            <div class="col-lg-12 col-md-12 mt-2">
                <div class="form-group text-start">
                    <label class="form-label fw-normal fs-5">Harvesting Time</label>
                    <input type="text" id="harvestingtime" name="harvestingtime" class="form-control" placeholder="harvestingtime">
                </div>
            </div>
            <div class="col-lg-12 col-md-12 mt-2">
                <div class="form-group text-start">
                    <label class="form-label fw-normal fs-5">Image</label>
                    <input type="file" id="image" name="image" class="form-control" placeholder="Land Image">
                </div>
            </div>
            </div>
            
            
            <div class="col-lg-12 col-md-12 mt-2 text-center">
                <button type="submit" class="btn btn-primary" name="submit">Post crop </button>
            </div>
        </div>
    </form>
    </div>
    		<script src="../assets/js/jquery.min.js"></script>
            <script src="../assets/js/jquery.scrolly.min.js"></script>
            <script src="../assets/js/jquery.scrollex.min.js"></script>
            <script src="../assets/js/skel.min.js"></script>
            <script src="../assets/js/util.js"></script>
            <script src="../assets/js/main.js"></script>
	</body>
</html>
