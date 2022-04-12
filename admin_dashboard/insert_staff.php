<?php
include("conn.php");
$password = md5($_POST['Password']);
$sql="INSERT INTO `tbl_staff_acc` (Username, Password)
VALUES
('$_POST[Username]','$password')";

$check_existing = mysqli_query($conn,"SELECT * FROM `tbl_staff_acc` WHERE Username = '$_POST[Username]'");
$exist_rows = mysqli_num_rows($check_existing);

if (!$exist_rows == 0) 
{
    header("Location: create_staff.php?error= Username already taken! Please choose another username.");
}else
if ($_POST['Password'] != $_POST['Confirm_Password']) 
{
    header("Location: create_staff.php?error= Please ensure your password and confirm password are matched.");
} 
else 
{
    mysqli_query($conn,$sql);
    header("Location: create_staff.php?success= Staff Account Successfully Created !");
}

mysqli_close($conn);
?>