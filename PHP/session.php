<?php
session_start();
if (!isset($_SESSION['Username']))
{
  //header("location: login.php");
  echo "<script>alert('Please login!'); window.location.href='signin.php';</script>";
}
else {
    $Username = $_SESSION['Username'];
	  $Acc_ID = $_SESSION['Acc_ID'];
    $patientName = $_SESSION['Name'];
}
?>