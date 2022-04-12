<?php
include("conn.php");
$sql="INSERT INTO `tbl_medical_services` (Title, ConsultationFees, Description, Picture, Category)
VALUES
('$_POST[Title]', '$_POST[Consultation_Fees]','$_POST[Description]', '$file_name', '$_POST[Specialist_category]')";

$check_existing = mysqli_query($con,"SELECT * FROM `tbl_medical_services` WHERE Title = '$_POST[Title]'");
$exist_rows = mysqli_num_rows($check_existing);

if (!$exist_rows == 0) 
{
    // header("Location: create_services.php?error= Title already exists! Please check again.");
    echo '<script>alert("record exits!");
		window.location.href= "create_services.php";
		</script>';
} 
else 
{
    // To set the folder, file name and file type
    $target_dir = "treatment_images/";
    $target_file = $target_dir . basename($_FILES["Picture"]["name"]);
    if (move_uploaded_file($_FILES["Picture"]["tmp_name"], $target_file)){
        //To get file name
        $file_name = basename($_FILES["Picture"]["name"]);

        $sql2="INSERT INTO `tbl_medical_services` (Title, ConsultationFees, Description, Picture, Category) VALUES ('$_POST[Title]', '$_POST[Consultation_Fees]','$_POST[Description]', '$file_name', '$_POST[Specialist_category]')";

        if (!mysqli_query($con,$sql2)){
            die('Error: ' . mysqli_error($con));
        }
        else {
            // header("Location: create_services.php?success= New Treatment & Services Successfully Created !");
            echo '<script>alert("record added!");
		window.location.href= "create_services.php";
		</script>';
        }
    } else {
        echo '<script>alert("Upload error!");
		window.location.href= "create_services.php";
		</script>';
        // header("Location: create_services.php?error= Sorry, there was an error uploading your file. Please check again.");
    }
    
}

mysqli_close($con);
?>
