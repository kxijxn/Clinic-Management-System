<?php
include("conn.php");

if(isset($_POST['delete']))
{

    $check_existing = mysqli_query($conn,"SELECT * FROM `tbl_staff_acc` WHERE StaffID = '$_POST[StaffID]'");
    $exist_rows = mysqli_num_rows($check_existing);
    
    if (!$exist_rows == 1) 
    {
        header("Location: search_staff.php?error= Please Try Again !");
    } 
    else 
    {
        $sql = "DELETE FROM `tbl_staff_acc` WHERE `StaffID` = '$_POST[StaffID]'";
        mysqli_query($conn,$sql);
        header("Location: search_staff.php?success= Staff Account Successfully Deleted !");
    }
}

mysqli_close($conn);
?>