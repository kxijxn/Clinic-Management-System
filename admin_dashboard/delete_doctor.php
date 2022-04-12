<?php
include("conn.php");

if(isset($_POST['delete']))
{

    $check_existing = mysqli_query($conn,"SELECT * FROM `tbl_doctor` WHERE DocID = '$_POST[DocID]'");
    $exist_rows = mysqli_num_rows($check_existing);
    
    if (!$exist_rows == 1) 
    {
        header("Location: search_doctor.php?error= Please Try Again !");
    } 
    else 
    {
        $sql_doc = "DELETE FROM `tbl_doctor` WHERE `DocID` = '$_POST[DocID]'";
        mysqli_query($conn,$sql_doc);
        header("Location: search_admin.php?success= Doctor Account Successfully Deleted !");
    }
}

mysqli_close($conn);
?>