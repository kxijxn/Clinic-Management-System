<?php
  include("admin_session.php");
  include("conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports - Valley Clinic</title>
    <link rel="stylesheet" href="css/admin_dashboard.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

    <div class="container-fluid">
        <div class="row">

            <!------------------left panel -------------------------  -->
            <div class="col-2 text-body my-4 vh-100">
                <img src="../Images/clinic logo.png" alt="Clinic Logo" class="w-80 img-fluid">
                
                <!-- ------------------------nav---------------------- -->
                <div class="container-fluid">
                  
                  <a href="admin_dashboard.php" class="text-decoration-none">
                    <div class="card mt-5 mb-2">
                      <div class="card-body">
                          <div class="row">
                            <div class="col-4">
                              <img src="../Images/muted dashboard icon.png" alt="icon" class="img-fluid">
                            </div>
                            <div class="col-8">
                              <h6 class="pt-1 card-title text-muted">Dashboard</h6>
                            </div>
                          </div>
                      </div>
                    </div>
                  </a>

                  <a href="treatment_services.php" class="text-decoration-none">
                    <div class="card mb-2">
                      <div class="card-body">
                          <div class="row">
                            <div class="col-4">
                              <img src="../Images/muted treatment icon.png" alt="icon" class="img-fluid pt-2">
                            </div>
                            <div class="col-8">
                              <h6 class="pt-1 card-title text-muted">Treatment & Services</h6>
                            </div>
                          </div>
                      </div>
                    </div>
                  </a>

                  <a href="search_admin.php" class="text-decoration-none">
                    <div class="card mb-2">
                      <div class="card-body">
                          <div class="row">
                            <div class="col-4">
                              <img src="../Images/muted admin icon.png" alt="icon" class="img-fluid">
                            </div>
                            <div class="col-8">
                              <h6 class="pt-1 card-title text-muted">Admin</h6>
                            </div>
                          </div>
                      </div>
                    </div>
                  </a>

                  <a href="search_staff.php" class="text-decoration-none">
                    <div class="card mb-2">
                      <div class="card-body">
                          <div class="row">
                            <div class="col-4">
                              <img src="../Images/muted staff icon.png" alt="icon" class="img-fluid">
                            </div>
                            <div class="col-8">
                              <h6 class="pt-1 card-title text-muted">Staff</h6>
                            </div>
                          </div>
                      </div>
                    </div>
                  </a>

                  <a href="search_doctor.php" class="text-decoration-none">
                    <div class="card mb-2">
                      <div class="card-body">
                          <div class="row">
                            <div class="col-4">
                              <img src="../Images/muted doctor icon.png" alt="icon" class="img-fluid">
                            </div>
                            <div class="col-8">
                              <h6 class="pt-1 card-title text-muted">Doctor</h6>
                            </div>
                          </div>
                      </div>
                    </div>
                  </a>

                  <a href="report.php" class="text-decoration-none">
                    <div class="card shadow mb-2">
                      <div class="card-body">
                          <div class="row">
                            <div class="col-4">
                              <img src="../Images/report icon.png" alt="icon" class="img-fluid">
                            </div>
                            <div class="col-8">
                              <h6 class="pt-1 card-title">Reports</h6>
                            </div>
                          </div>
                      </div>
                    </div>
                  </a>

                  <a href="admin_logout.php" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <div class="card mb-1">
                      <div class="card-body">
                          <div class="row">
                            <div class="col-4">
                              <img src="../Images/muted logout icon.png" alt="icon" class="img-fluid">
                            </div>
                            <div class="col-8">
                              <h6 class="pt-1 card-title text-muted">Logout</h6>
                            </div>
                          </div>
                      </div>
                    </div>
                  </a>

                </div>

              </div>

            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Confirm Logout ?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">No</button>
                    <a href="admin_logout.php">
                      <button type="button" class="btn btn-outline-dark">Yes</button>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <!-- --------------------right dashboard------------------- -->

            <div class="col-10 bg-secondary bg-opacity-10 text-dark">

              <!-- ----------------------header----------------------- -->
              
              <div class="container-fluid p-5">
                <div class="row row-cols-2 justify-content-between">
                  <div class="col p-3">
                      <h1>Reports</h1>
                  </div>
                  <div class="col-1 p-3 me-3">
                    <div class="row g-0 align-items-center justify-content-center">
                      <div class="col-10">
                          <img src="../Images/admin profile icon.png" alt="Admin Profile Icon" class="img-fluid justify-content-center">
                      </div>
                      <div class="col-2">
                        <div class="card-body">
                            <h5 class="text-decoration text-dark"><?php echo $admin_username ?></h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!---------------------------content ------------------- -->

              <div class="row row-cols-4 justify-content-between align-items-center g-4 mx-5 mb-5">
                <div class="col-2 g-3">
                  <div class="card shadow bg-white rounded-3">
                    <div class="card-body text-center">
                      <?php
                        $sql_sum ="SELECT SUM(`Payment_total`) AS sum FROM `tbl_payment`";
                        $result_sum = mysqli_query($conn, $sql_sum);
                        $sum = mysqli_fetch_array($result_sum);
                        $sum = round(floatval($sum['sum']/1000),2);
                        
                        echo '<h1 class="card-title text-warning">$'. $sum.'k</h1>';                                     
                      ?>                   
                      <i class="bi bi-clipboard2-pulse-fill mini-col-icon text-warning"></i>
                      <h6 class="card-text">Total Sales</h6>
                    </div>
                  </div>
                </div>
                <div class="col-2 g-4">
                  <div class="card shadow bg-white rounded-3">
                    <div class="card-body text-center">
                      <?php
                        $sql_booking ="SELECT COUNT(*) AS num FROM `tbl_appointment`";
                        $result_booking = mysqli_query($conn, $sql_booking);
                        $booking = mysqli_fetch_array($result_booking);
                        
                        echo '<h1 class="card-title text-info">'. $booking['num'].'</h1>';                                     
                      ?>
                      <i class="bi bi-journal-album mini-col-icon text-info"></i>
                      <h6 class="card-text">Total Bookings</h6>
                    </div>
                  </div>
                </div>

                <div class="col-2 g-4">
                  <div class="card shadow bg-white rounded-3">
                    <div class="card-body text-center">
                      <?php
                        $sql_cus ="SELECT COUNT(*) AS num FROM `tbl_account`";
                        $sql_admin ="SELECT COUNT(*) AS num FROM `tbl_admin_acc`";
                        $sql_doc ="SELECT COUNT(*) AS num FROM `tbl_doctor`";
                        $sql_staff ="SELECT COUNT(*) AS num FROM `tbl_staff_acc`";

                        $result_cus = mysqli_query($conn, $sql_cus);
                        $result_admin = mysqli_query($conn, $sql_admin);
                        $result_doc = mysqli_query($conn, $sql_doc);
                        $result_staff = mysqli_query($conn, $sql_staff);

                        $cus = mysqli_fetch_array($result_cus);
                        $admin = mysqli_fetch_array($result_admin);
                        $doc = mysqli_fetch_array($result_doc);
                        $staff = mysqli_fetch_array($result_staff);

                        $total = $cus['num'] + $admin['num'] + $doc['num'] + $staff['num'];                                 
                      ?>
                      <h1 class="card-title text-danger"><?php echo $total ?></h1>
                      <i class="bi bi-people-fill mini-col-icon text-danger"></i>
                      <h6 class="card-text">Total Users</h6>
                    </div>
                  </div>

                </div>
                <div class="col-2 g-4">
                  <div class="card shadow bg-white rounded-3">
                    <div class="card-body text-center">
                      <?php
                        $sql_s ="SELECT COUNT(*) AS num FROM `tbl_medical_services`";
                        $result_s = mysqli_query($conn, $sql_s);
                        $sales = mysqli_fetch_array($result_s);
                        
                        echo '<h1 class="card-title text-primary">'. $sales['num'].'</h1>';                                     
                      ?>                      
                      <i class="bi bi-stars mini-col-icon text-primary"></i>
                      <h6 class="card-text">Total Services</h6>
                    </div>
                  </div>
                </div>
                
              </div>
              <!------------------------ list of reports ---------------->

              <!---------------- total Sales chart -------------------->
              <div class="row row-cols-2 g-4 mx-4">
                <div class="col-8">
                  <div class="card shadow bg-white rounded-3 mt-5">
                    <div class="card-body m-4">
                      <h5 class="card-title">Appointment Status</h5>
                          <div style="position: relative; width: 40vh; margin-left: 26vh;">
                            <canvas id="appChart"></canvas>
                          </div>
                    </div>
                  </div>
                  <div class="card shadow bg-white rounded-3 mt-5 mb-5">
                    <div class="card-body m-4">
                      <h5 class="card-title">Daily Average Sale</h5>
                        <div style="position: relative; width: 72vh; margin-left: 8vh;">
                          <canvas id="avgSaleChart"></canvas>
                        </div>
                    </div>
                  </div>
                </div>

                <!-- -------------Top 10 Doctors ------------------- -->
                <div class="col-4">
                  <div class="card shadow bg-white rounded-3 mx-2 mt-5 mb-2">
                    <div class="card-body">
                      <h4 class="card-title mt-4 mx-4">Top 10 Doctors</h4>
                      <div class="container">
                        <div class="row row-cols-2 justify-content-center align-items-center">
                          <?php
                            $sql_top = "SELECT `tbl_doctor`.* , SUM(`tbl_payment`.`Payment_total`) AS sales
                              FROM `tbl_payment`
                              INNER JOIN `tbl_appointment` ON `tbl_payment`.`AppID` = `tbl_appointment`.`AppID`
                              INNER JOIN `tbl_doctor` ON `tbl_appointment`.`DocID` = `tbl_doctor`.`DocID`
                              GROUP BY `tbl_doctor`.`DocID`
                              ORDER BY SUM(`tbl_payment`.`Payment_total`) DESC 
                              LIMIT 10";

                              $result_top = mysqli_query($conn, $sql_top);
                              
                              $num = 1;
                              while($row_serv = mysqli_fetch_array($result_top))
                              {
                          ?>
                          <div class="col-4">
                            <div class="mt-4 mb-2">
                              <div class="row">
                                  <h3 class="card-title text-info"><?php echo $num ?></h3>
                              </div>
                            </div>
                          </div>

                          <div class="col-6">
                            <div class="mt-4 mb-2">
                              <div class="row">
                                  <h6 class="card-title"><?php echo $row_serv['Name'] ?></h6>
                                  <p card-text>RM <?php echo $row_serv['sales'] ?></p>
                              </div>
                            </div>
                          </div>

                          <?php 
                            $num++;  
                            }
                          ?>
                        </div>                   
                    </div>
                  </div>
                </div>                

                  </div>
                </div>

              </div>

            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>

    <?php

    //appointment status

    $sql_all = "SELECT COUNT(*) AS num
    FROM `tbl_appointment`";
    $result_all = mysqli_query($conn, $sql_all);
    $row_all = mysqli_fetch_array($result_all);
    $all = $row_all['num'];

    $sql_sch = "SELECT COUNT(*) AS num
    FROM `tbl_appointment`
    WHERE `App_date` >= CURDATE()";
    $result_sch = mysqli_query($conn, $sql_sch);
    $row_sch = mysqli_fetch_array($result_sch);
    $scheduled = $row_sch['num'];

    $sql_comp = "SELECT COUNT(*) AS num
    FROM `tbl_appointment` 
    WHERE `App_date` < CURDATE()";
    $result_comp = mysqli_query($conn, $sql_comp);
    $row_comp = mysqli_fetch_array($result_comp);
    $completed = $row_comp['num'];

    // avg daily sales
    $sql_avg ="SELECT MONTH(`Payment_date`), SUM(`Payment_total`) / 30.42 AS avg_sale
    FROM `tbl_payment`
    GROUP by  MONTH(`Payment_date`)";

    $result_avg = mysqli_query($conn, $sql_avg);
    $row_avg = mysqli_fetch_array($result_avg);
    $avg = array();

    foreach($result_avg as $row_avg)
    {
      array_push($avg, intval($row_avg['avg_sale']));
    }
    
    $avg = implode(',', $avg);

    ?>

    <script>
      //appointment status
        const scheduled = [<?php echo $scheduled ?>];
        const completed = [<?php echo $completed ?>];

        const app_labels = [
          'Scheduled','Completed'
        ];

        const app_data = {
          labels: app_labels,
          datasets: [{
            label: 'Status',
            backgroundColor: ['#84ffc9','#aab2ff'],
            data: [scheduled,completed]
          }]};
      
        const app_config = {
          type: 'pie',
          data: app_data,
          options: {}
        };
        
        const appChart = new Chart(
        document.getElementById('appChart'),
        app_config
        );
        
        // average sale
        const avg = [<?php echo $avg ?>];

        const avg_labels = [
          'Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'
        ];

        const avg_data = {
          labels: avg_labels,
          datasets: [{
            label: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
            backgroundColor: ['#FBF8CC','#FDE4CF', '#FFCFD2','#F1C0E8','#CFBAF0','#A3C4F3','#90DBF4','#8EECF5','#98F5E1','#B9FBC0','#9BF6FF','#BEE1E6'],
            data: avg
          }]
        };    

        const config_avg = {
          type: 'polarArea',
          data: avg_data,
          options: {}
        };

        const avgSaleChart = new Chart(
        document.getElementById('avgSaleChart'),
        config_avg
        );

    </script>
<?php
mysqli_close($conn);
?>
</body>

</html>