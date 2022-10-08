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
        <title>Dashboard</title>
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
		<link rel="stylesheet" href="../css/dashboard-style.css" />
    <style>
.order-card {
    color: #fff;
}

.bg-c-blue {
    background: linear-gradient(45deg,#4099ff,#73b4ff);
}

.bg-c-green {
    background: linear-gradient(45deg,#2ed8b6,#59e0c5);
}

.bg-c-yellow {
    background: linear-gradient(45deg,#FFB64D,#ffcb80);
}

.bg-c-pink {
    background: linear-gradient(45deg,#FF5370,#ff869a);
}


.card .card-block {
   
    padding: 25px;
}

.order-card i {
    font-size: 20px;
}

.f-left {
    float: left;
}

.f-right {
    float: right;
}

.cardb {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    border: none;
    margin-bottom: 30px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}
    </style>
    
    </head>

	<body>
	   <?php
            require 'adminheader.php';
        ?>
	    <!-- <section id="banner">
			<div class="container"> -->
                <!-- Component Start -->
				<div class="wrapper">
  <!-- Sidebar Holder -->
  <nav id="sidebar">
    <div class="sidebar-header">
      <h3 class="dashboard-title-text ma-0">Admin Dashboard</h3>
    </div>

    <ul class="list-unstyled components">
     
      </li>
      <li>
        <a href="dashboard.php">Home</a>
      </li>
      <li>
        <a href="users.php">View Users</a>
      </li>
      <li>
        <a href="postcrop.php">Add Crop</a>
      </li>
      <li>
        <a href="registeredlandowner.php">Manage Landowners</a>
      </li>
      <li>
        <a href="registeredfarmer.php">Manage farmers</a>
      </li>
      <li>
        <a href="notifications.php ">Notifications</a>
      </li>
    </ul>

    <ul class="list-unstyled CTAs ma-0">
      <li><a href="../profileView.php" class="article">View Profile</a></li>
    </ul>
    <ul class="list-unstyled CTAs">
      <li><a href="../Login/logout.php" class="article">Logout</a></li>
    </ul>
  </nav>
  
	<!-- Component End  -->

  <!-- View Users -->
  <div class="w-100 pa-2">
  <div class='container'>
                            <div class='card'>
                                <div class='card-header'>
                                    <h1 class="text-center fw-800">Administrator Page</h1>
                                </div>
                            </div>
                            
                    <div class="row mt-2">
                        <div class="col-md-4 col-xl-3">
                            <div class="cardb bg-c-blue order-card">
                                <div class="card-block">
                                <h6 class="pt-2 text-center">Number of user`    s</h6>
                                <h2 class="text-center ms-3">
                                <?php
                                  require '../db.php';
                                  
                                  $sql = "SELECT * from user where category NOT IN('ADMIN')";
                                  $result = $conn->query($sql);
                                  echo $result->num_rows
                                  ?>
                                </h2>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-md-4 col-xl-3">
                        <div class="cardb bg-c-green order-card">
                            <div class="card-block">
                                <h6 class="pt-2 text-center">Number of farmers</h6>
                                <h2 class="text-center ms-3">
                                  <?php
                                  require '../db.php';
                                  
                                  $sql = "SELECT * from user where category IN('FARMER')";
                                  $result = $conn->query($sql);
                                  echo $result->num_rows
                                  ?>
                                
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-3">
                        <div class="cardb bg-c-green order-card">
                            <div class="card-block">
                                <h6 class="pt-2 text-center">Number of landowners</h6>
                                <h2 class="text-center ms-3">
                                  <?php
                                  require '../db.php';
                                  
                                  $sql = "SELECT * from user where category IN('LAND_OWNER')";
                                  $result = $conn->query($sql);
                                  echo $result->num_rows
                                  ?>
                                
                                </h2>
                            </div>
                        </div>
                    </div>
                            </div>
                        </div>
                    </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
  </div>
          
    		<script src="../assets/js/jquery.min.js"></script>
            <script src="../assets/js/jquery.scrolly.min.js"></script>
            <script src="../assets/js/jquery.scrollex.min.js"></script>
            <script src="../assets/js/skel.min.js"></script>
            <script src="../assets/js/util.js"></script>
            <script src="../assets/js/main.js"></script>
	</body>
</html>
