<!DOCTYPE html>
<html>
<head>
<?php
            require 'menu.php';
        ?>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="login.css"/>
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
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

<h2 class="mt-2"><center>Welcome to Farmland Divination, India's First Agri Land Marketplace.</center></h2>
<p><center>A liquidity platform to lease agricultural lands, small farms and estate lands.
The simplest way to make the agricultural lands more productive</center></p>
<br>
<div class="row w-90 ma-auto">
  <div class="column pa-1  mb-0">
    <div class="card pa-2">
    <div class="land-img">
     <img src="./images/5.jpg" class="w-100 h-100">
    </div>
      
      <div>
        <h2>Agri Land</h2>
        <p>The simplest way of bringing land developers together with small farms. Land developers can list or post their small farms for lease.</p>
        <p class="ma-0"><a href="../Login/postland.php?category=cat1" class="button pa-0">View Lands</a></p>
      </div>
    </div>
  </div>

  <div class="column pa-1  mb-0">
    <div class="card pa-2">
    <div class="land-img">
      <img src="./images/2.jpg" class="w-100 h-100">
    </div>
      <div >
        <h2>Small Farms</h2>
        <p>List your Agricultural land for  lease. Our numerous buyers will search your agri property listings and contact you directly for leasing.</p>
        <p class="ma-0"><a href="../Login/postland.php?category=cat2" class="button pa-0">View Lands</a></p>
      </div>
    </div>
  </div>
  <div class="column pa-1  mb-0">
    <div class="card pa-2">
    <div class="land-img">
      <img src="./images/4.jpg" class="w-100 h-100">
    </div>
      <div>
        <h2>Estate Lands</h2>
        <p>Estate owners can list or post coffee plantation, coconut, tea, rubber, cashew, areca nut, cocoa and oil palm estate for lease.</p>

        <p class="ma-0"><a href="../Login/postland.php?category=cat3" class="button pa-0">View Lands</a></p>
 
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
