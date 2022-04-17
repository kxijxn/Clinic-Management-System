<?php
require "session_authentication.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Home</title>
    <style>
        .card_title{
            color: white;
        }
    </style>
</head>
<body>
    <?php
        require "Dr_header.php";
    ?>
    <?php
        require "connection/connection.php";
        $doctorid=$_SESSION['DocID'];
        $sql="SELECT appointment.AppID,appointment.Acc_ID,tbl_account.Name,appointment.DocID,appointment.App_Date,appointment.App_slot
        FROM tbl_appointment AS appointment INNER JOIN tbl_account ON appointment.Acc_ID=tbl_account.Acc_ID
        WHERE DocID=$doctorid and App_date=CURRENT_DATE";
        $records =mysqli_query($conn,$sql);

        $sql02="SELECT * FROM `tbl_doctor` WHERE DocID=$doctorid ";
        $records02 =mysqli_query($conn,$sql02);
        $data=mysqli_fetch_array($records02);
    ?>
<div id="main">
    <h2>Home <i class="bi bi-house-fill"></i></h2>
    <div class="row row-cols-1 g-4 mx-5">
        <div class="col"></div>
            <div class="col-8">
                <div class="card shadow bg-white rounded-3">
                    <div class="card-body m-4">
                        
                        <br><br>
                        <div class="row row-cols-4 justify-content-between align-items-center mb-5">
                            <div class="col-5">
                                <h2 class="card-title">Today's Schedule</h2>  
                            </div>
                            <div class="col-3 text-end">
                                <h4>Date: <a id="date"></a></h4>  
                            </div>
                        </div>
                        <?php
                            if ($records->num_rows>0){
                                while($row =mysqli_fetch_array($records))
                            {
                                echo'<div class="row col-9">
                                <div class="card shadow bg-info rounded-3">
                                <br>
                                <h4 class="card_title">AppointmentID: '.$row['AppointmentID'].'</h5>
                                <h5 class="card_title">PatientID : '.$row['Acc_ID'].'</h4>
                                <h5 class="card_title">Patient Name : '.$row['Name'].'</h4>
                                <h5 class="card_title">Time : '.$row['Time'].'</h4>
                                </div>
                                </div>
                                <br>';
                                
                            }
                            }else{
                                echo'<div class="row col-9">
                                <div class="card shadow bg-success rounded-3" >
                                <br><br>
                                <h4 class="card_title">No Appointment For Today<br></h4>
                                <br><br>
                                </div>
                                </div>
                                ';
                            }
                            
                        ?>
                        

                        
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
            <div class="col-3">
                <div class="card shadow bg-white rounded-3">
                    <div class="card-body m-4">
                        <div class="text-center">
                            <?php
                            echo '<img class ="rounded-circle" id="pp" alt="Profile Picture" style="width: 200px;height:180px;" src="data:image/png;base64,'.base64_encode($data['Profile_pic']).'"/>';
                            echo '<br>';
                            ?>
                            <h2>@<?=$_SESSION['username']?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    n =  new Date();
    y = n.getFullYear();
    m = n.getMonth() + 1;
    d = n.getDate();
    document.getElementById("date").innerHTML = d + "/" + m + "/" + y;
</script>
</body>
</html>