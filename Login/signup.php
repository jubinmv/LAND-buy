<?php
    session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$name = dataFilter($_POST['name']);
	$mobile = dataFilter($_POST['mobile']);
	$user = dataFilter($_POST['uname']);
	$email = dataFilter($_POST['email']);
	$pass =	dataFilter(password_hash($_POST['pass'], PASSWORD_BCRYPT));
	$hash = dataFilter( md5( rand(0,1000) ) );
	$category = dataFilter($_POST['category1']);
    $addr = dataFilter($_POST['addr']);
    $gender = dataFilter($_POST['gender']);

	$_SESSION['Email'] = $email;
    $_SESSION['Name'] = $name;
    $_SESSION['Password'] = $pass;
    $_SESSION['Username'] = $user;
    $_SESSION['Mobile'] = $mobile;
    $_SESSION['Category'] = $category;
    $_SESSION['Hash'] = $hash;
    $_SESSION['Addr'] = $addr;
    $_SESSION['Gender'] = $gender;
}


require '../db.php';

$length = strlen($mobile);

if($length != 10)
{
	$_SESSION['message'] = "Invalid Mobile Number !!!";
	header("location: error.php");
	die();
}
    $sql = "SELECT * FROM user WHERE username='$email'";

    $result = mysqli_query($conn, "SELECT * FROM user WHERE email='$email'") or die($mysqli->error());

    if ($result->num_rows > 0 )
    {
        $_SESSION['message'] = "User with this email already exists!";
        //echo $_SESSION['message'];
        header("location: error.php");
    }
    else
    {
    	$sql = "INSERT INTO user (name, password, mobile, email, address, category)
    			VALUES ('$name','$pass','$mobile','$email','$addr', '$category')";

    	if (mysqli_query($conn, $sql))
    	{
    	    $_SESSION['Active'] = 0;
            $_SESSION['logged_in'] = true;

            $_SESSION['picStatus'] = 0;
            $_SESSION['picExt'] = false;

            $sql = "SELECT * FROM user WHERE username='$user'";
            $result = mysqli_query($conn, $sql);
            $User = $result->fetch_assoc();
            $_SESSION['id'] = $User['id'];

            

            // $to      = $email;
            // $subject = "Account Verification ( ArtCircle.com )";
            // $message_body = "
            // Hello '.$user.',

            // Thank you for signing up!


            // http://localhost/project/Login/verify.php?email=".$email."&hash=".$hash;

            header("location: farmer.php");
    	}
    	else
    	{
    	    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    	    $_SESSION['message'] = "Registration failed!";
            header("location: error.php");
    	}
     }

//   elseif($category== LAND_OWNER)
//   {
//       $sql = "SELECT * FROM user WHERE username='$email'";

//       $result = mysqli_query($conn, "SELECT * FROM user WHERE username='$email'") or die($mysqli->error());

//       if ($result->num_rows > 0 )
//       {
//           $_SESSION['message'] = "User with this email already exists!";
//           //echo $_SESSION['message'];
//           header("location: error.php");
//       }
//       else
//       {
//       	$sql = "INSERT INTO user (name, username, password, hash, mobile, email, address,category)
//       			VALUES ('$name','$user','$pass','$mobile','$email','$addr',$category')";

//       	if (mysqli_query($conn, $sql))
//       	{
//       	    $_SESSION['Active'] = 0;
//               $_SESSION['logged_in'] = true;

//               $sql = "SELECT * FROM user WHERE username='$email'";
//               $result = mysqli_query($conn, $sql);
//               $User = $result->fetch_assoc();
//               $_SESSION['id'] = $User['id'];

//               $_SESSION['message'] =

//                        "Confirmation link has been sent to $email, please verify
//                        your account by clicking on the link in the message!";

//               $to      = $email;
//               $subject = "Account Verification ( ArtCircle.com )";
//               $message_body = "
//              Hello '.$user.',

//               Thank you for signing up!

//               http://localhost/project/Login/verify.php?email=".$email."&hash=".$hash;

//               //$check = mail( $to, $subject, $message_body );

//               header("location: landowner.php");
//       	}
//     }
//       	else
//       	{
//       	    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//       	    $_SESSION['message'] = "Registration not successfull!";
//               header("location: error.php");
//       	}
//     }


function dataFilter($data)
{
	$data = trim($data);
 	$data = stripslashes($data);
	$data = htmlspecialchars($data);
  	return $data;
}

?>
