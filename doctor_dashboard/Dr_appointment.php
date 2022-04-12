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
    <!-- datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <!-- additional -->
    
    <title>Appointment</title>
    <style>
      
    </style>
</head>
<body>

  <?php
        require "Dr_header.php";
  ?>
<!-- main content -->
<div id="main">

<br>

<!-- white box -->
<div class="row row-cols-1 g-4 mx-5">
  <div class="col"></div>
  <div class="col-12">
    <div class="card shadow bg-white rounded-3">
      <div class="card-body m-4">

      <div class="row row-cols-4 justify-content-between align-items-center mb-5">
        <div class="col-5">
          <h2 class="card-title">Appointment</h2>
        </div>
      </div>

      <div>
        <script>
          $(document).ready(function() {
              $('#treatment-record').DataTable( {
                  dom: 'lBfrtip', 
                  pagingType: 'full'
              } );
          } );
        </script>

        <table id="treatment-record" class="display table table-striped" style="width:90%;">
          <thead>
            <th style="text-align: right;">AppointmentID</th>
            <th style="text-align: right;">PatientID</th>
            <th style="text-align: right;">Patient Name</th>
            <th style="text-align: right;">Time</th>
            <th style="text-align: right;">Date</th>
          </thead>
          <tbody>
            <?php require "connection/connection.php";
            $drid=$_SESSION['DocID'];
            $sql="SELECT appointment.AppID, appointment.Acc_ID ,tbl_account.Name,appointment.App_slot,appointment.App_date 
            FROM tbl_appointment AS appointment INNER JOIN tbl_account ON appointment.Acc_ID=tbl_account.Acc_ID where DocID= $drid";
            $records=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($records))
            {
              echo "<tr>";
              echo "<td style='text-align:right;' >".$row['AppID']."</td>";
              echo "<td style='text-align:right;' >".$row['Acc_ID']."</td>";
              echo "<td style='text-align:right;' >".$row['Name']."</td>";
              echo "<td style='text-align:right;' >".$row['App_slot']."</td>";
              echo "<td style='text-align:right;' >".$row['App_date']."</td>";             
            }
            ?>
          </tbody>

        </table>
        
      </div>


      </div>
    </div>
  </div>
</div>


</body>
</html>