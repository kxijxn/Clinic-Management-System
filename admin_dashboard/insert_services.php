<?php
include("conn.php");


$check_existing = mysqli_query($conn,"SELECT * FROM `tbl_medical_services` WHERE Title = '$_POST[Title]'");
$exist_rows = mysqli_num_rows($check_existing);

if (!$exist_rows == 0) 
{
    header("Location: create_services.php?error= Title already exists! Please check again.");
} 
else 
{
    $target_dir = "../treatment_images/";
    $target_file = $target_dir . basename($_FILES["Picture"]["name"]);
    if (move_uploaded_file($_FILES["Picture"]["tmp_name"], $target_file)){
        //To get file name
        $file_name = basename($_FILES["Picture"]["name"]);
        $sql="INSERT INTO `tbl_medical_services` (Title, Description, Specialist_category, ConsultationFees, Picture)
            VALUES
            ('$_POST[Title]','$_POST[Description]','$_POST[Specialist_category]','$_POST[Consultation_Fees]','$file_name')";

        if (!mysqli_query($conn,$sql)){
            die('Error: ' . mysqli_error($conn));
        }
        else {
            header("Location: create_services.php?success= New Treatment & Services Successfully Created !");
        }
    } else {
        header("Location: create_services.php?error= Sorry, there was an error uploading your file. Please check again.");
    }
}

mysqli_close($con);
?>
