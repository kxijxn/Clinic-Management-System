<?php

if(!isset($_SESSION))
{
    session_start();
}

$admin_username = $_SESSION['Admin_Username'];

if (!isset($_SESSION['Admin_Username']))
{
    header("location: admin_login.php");
}
    
?>