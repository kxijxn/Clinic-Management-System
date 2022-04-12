<?php 
session_start();
include "conn.php";

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password2'])) 
{

	function validate($data)
    {
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = validate($_POST['username']);
	$pass = validate($_POST['password']);
    $pass2 = validate($_POST['password2']);

    $userdata = 'username=' . $username;

    if (empty($username) && empty($pass) && empty($pass2))
    {
		header("Location: signup.php?error=Fields cannot be empty!&$userdata");
	    exit();
	}
	else if(empty($username)) 
    {
		header("Location: signup.php?error=Username is required!&$userdata");
	    exit();
	}
    else if(empty($pass))
    {
        header("Location: signup.php?error=Password is required!&$userdata");
	    exit();
	}
    else if(empty($pass2))
    {
        header("Location: signup.php?error=Confirmation password is required!&$userdata");
	    exit();
    }
    else if($pass !== $pass2)
    {
        header("Location: signup.php?error=Passwords do not match!&$userdata");
	    exit();
    }
    else
    {
        
        $pass = md5($pass);
        $sql = "SELECT * FROM tbl_account WHERE Username = '$username'";

        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0){
            header("Location: signup.php?error=Username has been taken!&$userdata");
	        exit();
        }
        else
        {
            $sql2 = "INSERT INTO tbl_account(Username, Password) VALUES('$username', '$pass')";
            $result2 = mysqli_query($con, $sql2);
            if ($result2)
            {
                header("Location: signin.php");
	            exit();
            }
            else
            {
                header("Location: signup.php?error=Unkown error occured!&$userdata");
	            exit();
            }
        }
    }
}
else
{
	header("Location: signup.php");
	exit();
}