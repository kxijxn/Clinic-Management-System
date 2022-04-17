<?php 
session_start(); 
include "conn.php";

if (isset($_POST['Username']) && isset($_POST['Password'])) 
{

	function validate($data)
    {
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = validate($_POST['Username']);
	$password = validate($_POST['Password']);

    if (empty($username) && empty($password))
    {
		header("Location: admin_login.php?error=Fields cannot be empty!");
	    exit();
	}
	else if (empty($username)) 
    {
		header("Location: admin_login.php?error=Username is required!");
	    exit();
	}
    else if(empty($password))
    {
        header("Location: admin_login.php?error=Password is required!");
	    exit();
	}
    else
    {
        $password = md5($password);
        $sql = "SELECT * FROM `tbl_admin_acc` WHERE Username = '$username' AND Password = '$password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1)
        {
            $row = mysqli_fetch_assoc($result);

            if ($row['Username'] === $username && $row['Password'] === $password)
            {
               $_SESSION['Admin_Username'] = $row['Username'];

               header("Location: admin_dashboard.php");
            }
            else
            {
                header("Location: admin_login.php?error= Incorrect Username or Password!");
                exit();
            }
        }
        else
        {
            header("Location: admin_login.php?error= Incorrect Username or Password!");
	        exit();
        }
    }
}
else
{
	header("Location: admin_login.php");
	exit();
}