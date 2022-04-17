<?php
include("conn.php");

if(isset($_POST['delete']))
{

    $check_existing = mysqli_query($conn,"SELECT * FROM `tbl_medical_services` WHERE ServID = '$_POST[ServID]'");
    $exist_rows = mysqli_num_rows($check_existing);
    
    if (!$exist_rows == 1) 
    {
        header("Location: treatment_services.php?error= Please Try Again !");
    } 
    else 
    {
        $sql = "DELETE FROM `tbl_medical_services` WHERE `ServID` = '$_POST[ServID]'";
        mysqli_query($conn,$sql);
        header("Location: treatment_services.php?success= Treatment and Services Successfully Deleted !");
    }
}

mysqli_close($conn);
?>