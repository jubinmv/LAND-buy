<?php
    session_start();

    $user = dataFilter($_POST['uname']);
    $pass = $_POST['pass'];
    $category = dataFilter($_POST['category']);

    require '../db.php';

    $sql = "SELECT * FROM user WHERE email='$user'";
    $result = mysqli_query($conn, $sql);
    $num_rows = mysqli_num_rows($result);

    if($num_rows == 0)
    {
        $_SESSION['message'] = "Invalid User Credentialss!";
        header("location: error.php");
    }

    else
    {
        $User = $result->fetch_assoc();

        if (password_verify($_POST['pass'], $User['password']))
        {
            $_SESSION['id'] = $User['id'];
            $_SESSION['Hash'] = $User['hash'];
            $_SESSION['Password'] = $User['password'];
            $_SESSION['Email'] = $User['email'];
            $_SESSION['Name'] = $User['name'];
            $_SESSION['Username'] = $User['username'];
            $_SESSION['Mobile'] = $User['mobile'];
            $_SESSION['Addr'] = $User['address'];
            $_SESSION['Active'] = $User['active'];
            $_SESSION['picStatus'] = $User['picStatus'];
            $_SESSION['picExt'] = $User['picExt'];
            $_SESSION['logged_in'] = true;
            $_SESSION['Category'] = $User['category'];

            if($_SESSION['picStatus'] == 0)
            {
                $_SESSION['picId'] = 0;
                $_SESSION['picName'] = "profile0.png";
            }
            else
            {
                $_SESSION['picId'] = $_SESSION['id'];
                $_SESSION['picName'] = "profile".$_SESSION['picId'].".".$_SESSION['picExt'];
            }
            //echo $_SESSION['Email']."  ".$_SESSION['Name'];

            if($category == 'LAND_OWNER') {
                header("location: error.php");
            } 
            elseif($category == 'ADMIN') {
                header("location: profile.php");
            }
            elseif($category == 'FARMER') {
                header("location: error.php");
            }
            header("location: profile.php");

               
        
        }
        else
        {
            //echo mysqli_error($conn);
            $_SESSION['message'] = "Invalid User Credentials!";
            header("location: error.php");
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
