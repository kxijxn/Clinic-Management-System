<?php
session_start();
require "connection/connection.php";
if (!isset($_POST['username'], $_POST['password']) ) {
    
    exit('Please fill in all required field ');
}
if($stmt= $conn->prepare('SELECT DocID, password FROM tbl_doctor WHERE username=?')) {
    $stmt->bind_param('s',$_POST['username']);
    $stmt->execute();

    $stmt->store_result();

    if($stmt->num_rows >0){
        $stmt->bind_result($docID,$password);
        $stmt->fetch();

        if($_POST['password']==$password){
            session_regenerate_id();
            $_SESSION['loggedin']=TRUE;
            $_SESSION['username']=$_POST['username'];
            $_SESSION['DocID']=$docID;

            echo "<script>alert('Login Success!')
            window.location.href='Dr_home.php'
            </script>";
        }else{
            // incorrect password
            echo "<script>alert('Incorrect username or password, please try again!')
            window.location.href='Dr_login.php'
            </script>";
        }
    }else{
        // incorrect username
        echo "<script>alert('Incorrect username or password, please try again!')
            window.location.href='Dr_login.php'
            </script>";
    }
    $stmt->close();
}
?>