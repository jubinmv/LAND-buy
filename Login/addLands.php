<?php
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "myland";
  
// Create connection
$conn = new mysqli($servername, 
    $username, $password, $dbname);
  
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " 
        . $conn->connect_error);
}else{
    echo "Connected";
}
  
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
       $id = $_SESSION['id'];
        
    }




if (isset($_POST['submit'])) {

    $landarea = $_REQUEST['landarea'];
    $price = $_REQUEST['price'];
    $location = $_REQUEST['location'];
    $date = $_REQUEST['date'];
    $surveyNumber = $_REQUEST['surveyNumber'];
    $leasePeriod = $_REQUEST['leasePeriod'];
    $file = $_FILES['image'];
    print_r($file);
    $f_name = $_FILES['image']['name'];


    $f_tname = $_FILES['image']['tmp_name'];
    $f_ext = explode('.', $f_name);
    $f_aext = strtolower(end($f_ext));
    $f_new_name = uniqid('', true).".".$f_aext;
    $f_dest = 'upload/'.$f_new_name;
    move_uploaded_file($f_tname, $f_dest);
    echo "<img src='{$f_dest}' width='40px'/>";

    
    

    // $query = "SELECT `urefid` FROM `logins` WHERE urefid = '$id'";
    // $result = mysqli_query($conn,$query);
    // $num_rows = mysqli_num_rows($result);

    // if($num_rows == 0)
    // {
      // $value=$row['urefid'];
      // echo("<script>alert('$id')</script>"); 
      $sql="INSERT INTO landinfo (userId, price, location, landArea, status, surveyNumber, leasePeriod, image) VALUES ('$id','$price','$location','$landarea',0, '$surveyNumber', '$leasePeriod', '$f_dest')";
      $result1 =mysqli_query($conn,$sql);
      if ($result1==true)
      {
        echo("<script>alert('Land posted successfully</script>");
      }
     else
     {
        echo("<script>alert('Error Occured')</script>");  
     }
    // }
}
 








function dataFilter($data)
{
	$data = trim($data);
 	$data = stripslashes($data);
	$data = htmlspecialchars($data);
  	return $data;
}

?>