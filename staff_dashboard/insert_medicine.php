<?php
include("conn.php");


$check_existing = mysqli_query($conn,"SELECT * FROM `tbl_medicine` WHERE Name = '$_POST[Name]'");
$exist_rows = mysqli_num_rows($check_existing);

if (!$exist_rows == 0) 
{
    header("Location: create_medicine.php?error= Medicine Name already exists! Please check again.");

} 
else 
{

    $sql="INSERT INTO `tbl_medicine` (Name, Description, Price, Quantity)
        VALUES
        ('$_POST[Name]','$_POST[Description]','$_POST[Price]','$_POST[Quantity]')";

    if (!mysqli_query($conn,$sql)){
        die('Error: ' . mysqli_error($conn));
    }
    else {
        header("Location: create_medicine.php?success= New Medicine Successfully Added !");

    }
}

mysqli_close($con);
?>
