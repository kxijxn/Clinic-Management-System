<?php
require 'connection/connection.php';
if(isset($_POST["tdata01"])) 
{
    $output = '';  
    $query = "SELECT * FROM tbl_appointment AS appointment WHERE AppID = '".$_POST["tdata01"]."'";  
    $result = mysqli_query($conn, $query); 
    $output .= ' <div class="table-responsive">  
    <table class="table table-bordered">';  
    while($row = mysqli_fetch_array($result))  
        {  
            $output .= '  
                <tr>  
                    <td width="30%"><label>AppointmentID</label></td>  
                    <td width="70%">'.$row["AppID"].'</td>  
                </tr>  
                <tr>  
                    <td width="30%"><label>Time</label></td>  
                    <td width="70%">'.$row["App_slot"].'</td>  
                </tr>  
                <tr>  
                    <td width="30%"><label>Date</label></td>  
                    <td width="70%">'.$row["App_date"].'</td>  
                </tr>  
                <tr>  
                    <td width="30%"><label>Notes</label></td>  
                    <td width="70%">'.$row["Notes"].'</td>  
                </tr>  
            ';  
        }  
    $output .= '  
        </table>  
    </div>  
    ';  
    echo $output;  
}  
?>










