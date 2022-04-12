<?php

if(!isset($_SESSION))
{
    session_start();
}

$admin_username = $_SESSION['Staff_Username'];

if (!isset($_SESSION['Staff_Username']))
{
    header("location: staff_login.php");
}
    
?>