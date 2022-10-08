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

$name = $_REQUEST['name'];
$uname=$_REQUEST['uname'];
$mobile=$_REQUEST['mobile'];
$email=$_REQUEST['email'];
$gender=$_REQUEST['gender'];
$addr=$_REQUEST["addr"];
$category=$_REQUEST['category1'];
$pass =	dataFilter(password_hash($_POST['pass'], PASSWORD_BCRYPT));
  
$sql = "INSERT INTO user (name,username, password, mobile, email, gender, address, category)
VALUES ('$name','$uname','$pass','$mobile','$email','$gender','$addr', '$category')";
   
if($conn->query($sql) === TRUE)

{

    $sql2 = "SELECT * from user WHERE email='$email'";
    $result = mysqli_query($conn, $sql2);
    $num_rows = mysqli_num_rows($result);

    if($num_rows == 0)
    {
        $_SESSION['message'] = "Oops! Something went wrong.";
        header("location: error.php");
    }
    else
    {
        $User = $result->fetch_assoc();
        $id = $User['id'];
        $sql1 = "INSERT INTO logins(urefid, lpass, lemail, lcategory) VALUES('$id','$pass', '$email', '$category')";
    if($conn->query($sql1) === TRUE)
    {
        echo "Successful inserted login";
    }
    else
   {
        echo "Insertion failed in login";
   }
   

//$check = mail( $to, $subject, $message_body );
   header("location: proceedtologin.php");
    }
    
}

function dataFilter($data)
{
	$data = trim($data);
 	$data = stripslashes($data);
	$data = htmlspecialchars($data);
  	return $data;
}

?>