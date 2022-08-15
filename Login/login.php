<?php
    session_start();

    $user = dataFilter($_POST['uname']);
    $pass = $_POST['pass'];

    require '../db.php';

    $sql = "SELECT * FROM logins WHERE lemail='$user'";
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
        $id = $User['urefid'];

        if (password_verify($_POST['pass'], $User['lpass']))
        {
            $sql2 = "SELECT * from user WHERE id='$id'";
            $result = mysqli_query($conn, $sql2);
            $num_rows = mysqli_num_rows($result);

            if($num_rows == 0)
            {
                $_SESSION['message'] = "Oops! Something went wrong.";
                header("location: error.php");
            }
            else
            {
                $UserInfo = $result->fetch_assoc();
                $_SESSION['id'] = $UserInfo['id'];
                $_SESSION['Category'] = $UserInfo['category'];
                $_SESSION['Hash'] = $UserInfo['hash'];
                $_SESSION['Password'] = $UserInfo['pass'];
                $_SESSION['Email'] = $UserInfo['email'];
                $_SESSION['Name'] = $UserInfo['name'];
                $_SESSION['Username'] = $UserInfo['username'];
                $_SESSION['Mobile'] = $UserInfo['mobile'];
                $_SESSION['Addr'] = $UserInfo['address'];
                $_SESSION['Active'] = $UserInfo['active'];
                $_SESSION['picStatus'] = $UserInfo['picStatus'];
                $_SESSION['picExt'] = $UserInfo['picExt'];
                $_SESSION['logged_in'] = true;
                
                // // error_log('category', $_SESSION['Category']);

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
                echo $_SESSION['Email']."  ".$_SESSION['Name'];
                

                if($_SESSION['Category'] == 'LAND_OWNER') {
                    header("location: landowner.php");
                } 
                elseif($_SESSION['Category'] == 'ADMIN') {
                    header("location: dashboard.php");
                }
                elseif($_SESSION['Category']== 'FARMER') {
                    header("location: farmer.php");
                }else {
                    header("location: error.php");
                }
            }
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
