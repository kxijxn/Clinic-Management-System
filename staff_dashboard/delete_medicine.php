<?php
include("conn.php");

if(isset($_POST['delete']))
{

    $check_existing = mysqli_query($conn,"SELECT * FROM `tbl_medicine` WHERE MedID = '$_POST[MedID]'");
    $exist_rows = mysqli_num_rows($check_existing);
    
    if (!$exist_rows == 1) 
    {
        header("Location: medicine.php?error= Please Try Again !");
    } 
    else 
    {
        $sql = "DELETE FROM `tbl_medicine` WHERE `MedID` = '$_POST[MedID]'";
        mysqli_query($conn,$sql);
        header("Location: medicine.php?success= Medicine Successfully Deleted !");
    }
}

mysqli_close($conn);
?>