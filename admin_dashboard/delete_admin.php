<?php
include("conn.php");

if(isset($_POST['delete']))
{

    $check_existing = mysqli_query($conn,"SELECT * FROM `tbl_admin_acc` WHERE AdminID = '$_POST[AdminID]'");
    $exist_rows = mysqli_num_rows($check_existing);
    
    if (!$exist_rows == 1) 
    {
        header("Location: search_admin.php?error= Please Try Again !");
    } 
    else 
    {
        $sql = "DELETE FROM `tbl_admin_acc` WHERE `AdminID` = '$_POST[AdminID]'";
        mysqli_query($conn,$sql);
        header("Location: search_admin.php?success= Admin Account Successfully Deleted !");
    }
}

mysqli_close($conn);
?>