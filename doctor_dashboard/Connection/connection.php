<?php 

$databaseHost = "localhost";
$databaseUser = "root";
$databasePassword = "";
$databaseName = "valleyclinic";

$conn = mysqli_connect($databaseHost,$databaseUser,$databasePassword);


if (mysqli_connect_errno())
{
    echo "Connection Failed : Failed to Connection Database & MYSQL";
}


if(!mysqli_select_db($conn,$databaseName))
{
    echo "Connection Failed : Database Not Selected";
} 

?>