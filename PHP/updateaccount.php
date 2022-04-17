<?php
    session_start();
    include 'conn.php';

    if(isset($_POST['submit']))
    {
        $newUser = $_POST['username'];
        $newPass = $_POST['password'];
        $newName = $_POST['name'];
        $newPhone = $_POST['phone'];
        $newEmail = $_POST['email'];

        if(!empty($newUser) && !empty($newPass) && !empty($newName) && !empty($newPhone) && !empty($newEmail))
        {
            $loggedinuser = $_SESSION['Username'];
            $sql = "UPDATE tbl_account SET Username = '$newUser', Password = '$newPass', Name = '$newName', Phone_number = '$newPhone', Email = '$newEmail' WHERE Username = '$loggedinuser'";
            $result = mysqli_query($con, $sql);
            header("Location: account.php?success=Succesfuly Updated Account Details!");
	        exit();

        }
        else 
        {
            header("Location: account.php?error=Fields cannot be empty!");
	        exit();
        }
    }

?>