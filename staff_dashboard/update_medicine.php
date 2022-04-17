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

    $title = validate($_POST['Name']);
    $description = validate($_POST['Description']);
    $specialist_category = validate($_POST['Price']);
    $consultation_fees = validate($_POST['Quantity']);

    $check_existing = mysqli_query($conn,"SELECT * FROM `tbl_medicine` WHERE MedID = '$_POST[MedID]'");
    $exist_rows = mysqli_num_rows($check_existing);
    
    if (!$exist_rows == 1) 
    {
        header("Location: update_medicine_form.php?error= Please Try Again !");
    } 
    else 
    {
        $sql = "UPDATE `tbl_medicine` SET 
        `Name` = '$title',
        `Description` = '$description',
        `Price` = '$specialist_category',
        `Quantity` = '$consultation_fees'
        WHERE `MedID` = '$_POST[MedID]'";

        if(mysqli_query($conn,$sql))
        {
            header("Location: update_medicine_form.php?success= Medicine Successfully Updated !");
            
        }else
        {
            header("Location:update_medicine_form.php?error= Please Try Again !");
        }
    }
}

mysqli_close($conn);
?>