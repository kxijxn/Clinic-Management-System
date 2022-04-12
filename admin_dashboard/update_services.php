<?php
include("conn.php");

if(isset($_POST['update']))
{
	function validate($data)
    {
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

    $title = validate($_POST['Title']);
    $description = validate($_POST['Description']);
    $specialist_category = validate($_POST['Specialist_category']);
    $consultation_fees = validate($_POST['Consultation_Fees']);

    $check_existing = mysqli_query($conn,"SELECT * FROM `tbl_medical_services` WHERE ServID = '$_POST[ServID]'");
    $exist_rows = mysqli_num_rows($check_existing);
    
    if (!$exist_rows == 1) 
    {
        header("Location: update_services_form.php?error= Please Try Again !");
    } 
    else 
    {
        $sql = "UPDATE `tbl_medical_services` SET 
        `Title` = '$title',
        `Description` = '$description',
        `Specialist_category` = '$specialist_category',
        `ConsultationFees` = '$consultation_fees'
        WHERE `ServID` = '$_POST[ServID]'";

        if(mysqli_query($conn,$sql))
        {
            header("Location: update_services_form.php?success= Treatment and Services Successfully Updated !");
            
        }else
        {
            header("Location:update_services_form.php?error= Please Try Again !");
        }
    }
}

mysqli_close($conn);
?>