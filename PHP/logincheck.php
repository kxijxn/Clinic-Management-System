<?php 
session_start(); 
include "conn.php";

if (isset($_POST['username']) && isset($_POST['password'])) 
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

    if (empty($username) && empty($pass))
    {
		header("Location: signin.php?error=Fields cannot be empty!");
	    exit();
	}
	else if (empty($username)) 
    {
		header("Location: signin.php?error=Username is required!");
	    exit();
	}
    else if(empty($pass))
    {
        header("Location: signin.php?error=Password is required!");
	    exit();
	}
    else
    {
        $pass = md5($pass);
        $sql = "SELECT * FROM tbl_account WHERE Username = '$username' AND Password = '$pass'";

        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) === 1)
        {
            $row = mysqli_fetch_assoc($result);

            if ($row['Username'] === $username && $row['Password'] === $pass)
            {
               $_SESSION['Username'] = $row['Username'];
               $_SESSION['Acc_ID'] = $row['Acc_ID'];
               $_SESSION['Name'] = $row['Name']; 
               header("Location: ../PHP/index.PHP");
            }
            else
            {
                header("Location: signin.php?error= Incorrect Username or Password!");
                exit();
            }
        }
        else
        {
            header("Location: signin.php?error= Incorrect Username or Password!");
	        exit();
        }
    }
}
else
{
	header("Location: signin.php");
	exit();
}