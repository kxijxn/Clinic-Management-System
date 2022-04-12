<?php
require 'connection/connection.php';
if(isset($_POST["aid"]))  
{
    $output = '';
    $query = "SELECT * FROM tbl_appointment AS appointment WHERE AppID = '".$_POST["aid"]."'";  
    $result01 = mysqli_query($conn, $query);  
    $row=mysqli_fetch_array($result01);
    echo json_encode($row);

}