<?php  
     require 'connection/connection.php';
     $notes = mysqli_real_escape_string($conn, $_POST["notes"]);  
     $query = "UPDATE tbl_appointment SET Notes='$notes' WHERE AppID='".$_POST["appid"]."'";  
     mysqli_query($conn, $query);
?>