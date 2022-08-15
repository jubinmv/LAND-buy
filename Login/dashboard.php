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
    </head>

	<body>
	   <?php
            require 'menu.php';
        ?>
	    <!-- <section id="banner">
			<div class="container"> -->
                <!-- Component Start -->
				<div class="wrapper">
  <!-- Sidebar Holder -->
  <nav id="sidebar">
    <div class="sidebar-header">
      <h3 class="dashboard-title-text ma-0">Admin Dashboard</h3>
      


</table>
    </div>

    <ul class="list-unstyled components">
     
      </li>
      <li>
        <a href="dashboard.php?page=users">View Users</a>
      </li>
      <li>
        <a href="registeredlandowner.php">Manage Landowners</a>
      </li>
      <li>
        <a href="registeredfarmer.php">Manage farmers</a>
      </li>
      <li>
        <a href="#">Notifications</a>
      </li>
    </ul>

    <ul class="list-unstyled CTAs ma-0">
      <li><a href="../Login/profile.php" class="article">View Profile</a></li>
    </ul>
    <ul class="list-unstyled CTAs">
      <li><a href="../Login/logout.php" class="article">Logout</a></li>
    </ul>
  </nav>
  
	<!-- Component End  -->

  <!-- View Users -->
  <div class="w-100 pa-2">
            <div>
            
<?php
 require '../db.php';
 
$sql = "SELECT * from user where category NOT IN('ADMIN')";
$result = $conn->query($sql);
?>
 <br> <br>
 <h1 id="h1" class="text-center">Users Detail</h1><br>
 <table>

  <tr>
     <th>NAME</th>
     <th>PHONE</th>
     <th>EMAIL</th>
     <th>ADDRESS</th>
     <th>GENDER</th>
     <th>CATEGORY</th>
  </tr>
 <?php
 if ($result !== false && $result->num_rows > 0){

  while($row = $result->fetch_assoc()) {
 ?>
  <tr>
 <td><?php echo $row['name'] ?></td>
<td><?php echo $row['mobile'] ?></td>
<td><?php echo $row['email'] ?></td>
<td><?php echo $row['address'] ?></td>
<td><?php echo $row['gender'] ?></td>
<td><?php echo $row['category'] ?></td>
  </tr>
  <?php
 }
}
  ?>
    </div>
  <!-- View Users -->
</div>

    		<script src="../assets/js/jquery.min.js"></script>
            <script src="../assets/js/jquery.scrolly.min.js"></script>
            <script src="../assets/js/jquery.scrollex.min.js"></script>
            <script src="../assets/js/skel.min.js"></script>
            <script src="../assets/js/util.js"></script>
            <script src="../assets/js/main.js"></script>
	</body>
</html>
