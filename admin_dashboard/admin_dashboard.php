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
    <title>Admin Dashboard - Valley Clinic</title>
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
                    <div class="card shadow mt-5 mb-2">
                      <div class="card-body">
                          <div class="row">
                            <div class="col-4">
                              <img src="../Images/dashboard icon.png" alt="icon" class="img-fluid">
                            </div>
                            <div class="col-8">
                              <h6 class="pt-1 card-title">Dashboard</h6>
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
                    <div class="card mb-2">
                      <div class="card-body">
                          <div class="row">
                            <div class="col-4">
                              <img src="../Images/muted report icon.png" alt="icon" class="img-fluid">
                            </div>
                            <div class="col-8">
                              <h6 class="pt-1 card-title text-muted">Reports</h6>
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
                      <h1>Overview</h1>
                      <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                      </nav> 
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

              <!---------------- total Sales chart -------------------->
              <div class="row row-cols-2 g-4 mx-4">
                <div class="col-8">
                  <div class="card shadow bg-white rounded-3">
                    <div class="card-body m-4">
                      <h5 class="card-title">Total Sales</h5>
                          <canvas id="totalSalesChart"></canvas>
                    </div>
                  </div>
                </div>


                <!-- -- ------------------doctors---------------------- -->
                <div class="col-4">
                  <div class="card shadow bg-white rounded-3">
                    <div class="card-body" style="height:59vh;">
                      <h5 class="card-title p-3">Information About Clinic Doctors</h5>
                      <div class="ms-3 mt-4" style="position: relative; width: 39vh;">
                        <canvas id="genderChart"></canvas>
                      </div>
                    </div>
                  </div>
                </div>

                <!---------------- mini report column------------->
                <div class="col-8">
                  <div class="card shadow bg-white rounded-3 mb-5">
                    <div class="container">
                      <div class="row row-cols-3 justify-content-around">

                        <div class="col-3">
                          <div class="card bg-info bg-opacity-10 rounded mt-4 mb-2">
                            <div class="card-body mini-col">
                                <div class="row">
                                  <div class="col-4">
                                    <i class="bi bi-person-fill mini-col-icon"></i>
                                  </div>
                                  <div class="col-8">
                                    <h6 class="card-title">Total Users</h6>
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
                                      
                                      echo '<p card-text>'. $total.'</p>';                                  
                                    ?>
                                  </div>
                                </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-3">
                          <div class="card bg-warning bg-opacity-10 rounded mt-4 mb-2">
                            <div class="card-body mini-col">
                                <div class="row">
                                  <div class="col-4">
                                    <i class="bi bi-calendar-day mini-col-icon"></i>
                                  </div>
                                  <div class="col-8">
                                    <h6 class="card-title">Total Services</h6>
                                    <?php
                                      $sql_s ="SELECT COUNT(*) AS num FROM `tbl_medical_services`";
                                      $result_s = mysqli_query($conn, $sql_s);
                                      $services = mysqli_fetch_array($result_s);
                                      
                                      echo '<p card-text>'. $services['num'].'</p>';                                     
                                    ?>
                                  </div>
                                </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-3">
                          <div class="card bg-danger bg-opacity-10 rounded mt-4 mb-2">
                            <div class="card-body mini-col">
                                <div class="row">
                                  <div class="col-4">
                                    <i class="bi bi-clock-fill mini-col-icon"></i>
                                  </div>
                                  <div class="col-8">
                                    <h6 class="card-title">Total Bookings</h6>
                                    <?php
                                      $sql_booking ="SELECT COUNT(*) AS num FROM `tbl_appointment`";
                                      $result_booking = mysqli_query($conn, $sql_booking);
                                      $booking = mysqli_fetch_array($result_booking);
                                      
                                      echo '<p card-text>'. $booking['num'].'</p>';                                     
                                    ?>                                    
                                  </div>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!---------------- top treatment & services------------->

                    <div class="card-body mt-4 mx-3">
                      <h3 class="card-title">Top Doctors</h3>
                      <div class="container">
                        <div class="row row-cols-4 justify-content-around">
                      <?php
                        $sql_top = "SELECT `tbl_doctor`.* , SUM(`tbl_payment`.`Payment_total`) AS sales
                        FROM `tbl_payment`
                        INNER JOIN `tbl_appointment` ON `tbl_payment`.`AppID` = `tbl_appointment`.`AppID`
                        INNER JOIN `tbl_doctor` ON `tbl_appointment`.`DocID` = `tbl_doctor`.`DocID`
                        GROUP BY `tbl_doctor`.`DocID`
                        ORDER BY SUM(`tbl_payment`.`Payment_total`) DESC 
                        LIMIT 2";

                        $result_top = mysqli_query($conn, $sql_top);                        

                        while($top_serv = mysqli_fetch_array($result_top))
                        {
                          $top1 = $top_serv['DocID'];
                          $sql_top1 ="SELECT COUNT(*) AS num FROM `tbl_appointment` WHERE `DocID` = '$top1'";
                          $result_top1 = mysqli_query($conn, $sql_top1);
                          $top1 = mysqli_fetch_array($result_top1);
                      ?>

                          <div class="col-4">
                            <div class="mt-4 mb-2">
                              <div class="row">
                                  <h5 class="card-title pt-3"><?php echo $top_serv['Name'] ?></h5>
                              </div>
                            </div>
                          </div>

                          <div class="col-2">
                            <div class="mt-4 mb-2">
                              <div class="row">
                                  <p class="card-title">Sales</p>
                                  <h6 card-text>RM <?php echo $top_serv['sales'] ?></h6>
                              </div>
                            </div>
                          </div>

                          <div class="col-3">
                            <div class="mt-4 mb-2">
                              <div class="row">
                                <p class="card-title">Specialist Category</p>
                                <h6 card-text><?php echo $top_serv['Specialist_category'] ?></h6>
                              </div>
                            </div>
                          </div>

                          <div class="col-3">
                            <div class="mt-4 mb-2 p-1">
                              <div class="row">
                                <p class="card-title">Total Bookings</p>
                                <h6 card-text><?php echo $top1['num'] ?></h6>
                              </div>
                            </div>
                          </div>
                      <?php
                        }
                      ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- -------------Users ------------------- -->
                <div class="col-4">
                  <div class="card shadow bg-white rounded-3 pt-3 mb-5" style="height: 57vh;">
                      <div class="card-body">
                        <h5 class="card-title mx-4">Users</h5>
                        <p class="card-text mx-4 pb-4">Information About Users</p>
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
                        <div class="row row-cols-2 g-5 mx-1">
                          <div class="col-6">
                            <div class="card text-center bg-opacity-50 shadow-lg bg-info">
                              <div class="card-body">
                                <?php
                                  $c = $cus['num'] / $total * 100;
                                  $c = intval($c);
                                  echo '<h5 class="card-title">'.$c .'%</h5>';
                                ?>
                                <p class="card-text">Customer</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="card text-center shadow-lg bg-opacity-50 bg-warning">
                              <div class="card-body">
                                <?php
                                  $a = $admin['num'] / $total * 100;
                                  $a = intval($a);
                                  echo '<h5 class="card-title">'.$a .'%</h5>';
                                ?>
                                <p class="card-text">Admin</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="card text-center shadow-lg bg-opacity-50 bg-danger">
                              <div class="card-body">
                                <?php
                                  $s = $staff['num'] / $total * 100;
                                  $s = intval($s);
                                  echo '<h5 class="card-title">'.$s .'%</h5>';
                                ?>
                                <p class="card-text">Staff</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="card text-center shadow-lg bg-opacity-50 bg-primary">
                              <div class="card-body">
                                <?php
                                  $d = $doc['num'] / $total * 100;
                                  $d = intval($d);
                                  echo '<h5 class="card-title">'.$d .'%</h5>';
                                ?>
                                <p class="card-text">Doctor</p>
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

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>


    <?php

    // total sales

    $sql_2021 = "SELECT MONTH(`Payment_date`) AS Month , SUM(`Payment_total`) AS Sales
    FROM `tbl_payment`
    WHERE YEAR(`Payment_date`) = 2021
    GROUP BY MONTH(`Payment_date`)
    ORDER BY MONTH(`Payment_date`)";

    $result_1 = mysqli_query($conn, $sql_2021);
    $row_1 = mysqli_fetch_array($result_1);
    $total_1 = array();

    foreach ($result_1 as $row_1) 
    {
      array_push($total_1, $row_1['Sales']);
    }
    
    $Sales2021 = implode(',', $total_1);

    $sql_2022 = "SELECT MONTH(`Payment_date`) AS Month , SUM(`Payment_total`) AS Sales
    FROM `tbl_payment`
    WHERE YEAR(`Payment_date`) = 2022
    GROUP BY MONTH(`Payment_date`)
    ORDER BY MONTH(`Payment_date`)";

    $result_2 = mysqli_query($conn, $sql_2022);
    $row_2 = mysqli_fetch_array($result_2);
    $total_2 = array();

    foreach ($result_2 as $row_2) 
    {
      array_push($total_2, $row_2['Sales']);
    }
    
    $Sales2022 = implode(',', $total_2);

    // gender chart

    $sql ="SELECT `Gender`, COUNT(`Gender`) AS Amount
    FROM `tbl_doctor`
    GROUP BY `Gender`";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $gender = array();

    foreach ($result as $row) 
    {
      array_push($gender, $row['Amount']);
    }

    $male = $gender[0];
    $female = $gender[1];
    ?>

    <script>
        const Sales2021 = [<?php echo $Sales2021 ?>];
        const Sales2022 = [<?php echo $Sales2022 ?>];

        const labels = [
          'Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'
        ];
      
        const data = {
          labels: labels,
          datasets: [{
            label: '2021',
            borderColor: '#CFBAF0',
            backgroundColor: ['#FBF8CC','#FDE4CF', '#FFCFD2','#F1C0E8','#CFBAF0','#A3C4F3','#90DBF4','#8EECF5','#98F5E1','#B9FBC0','#9BF6FF','#BEE1E6'],
            data: Sales2021
          },{
            label: '2022',
            borderColor: '#A3C4F3',
            backgroundColor: ['#FBF8CC','#FDE4CF', '#FFCFD2','#F1C0E8','#CFBAF0','#A3C4F3','#90DBF4','#8EECF5','#98F5E1','#B9FBC0','#9BF6FF','#BEE1E6'],
            data: Sales2022          
          }]
        };
      
        const config = {
          type: 'bar',
          data: data,
          options: {}
        };
        
        const totalSalesChart = new Chart(
        document.getElementById('totalSalesChart'),
        config
        );

        
        const female = [<?php echo $female ?>];
        const male = [<?php echo $male ?>];

        const stats_labels = ['Male','Female'];
      
        const stats_data = {
          labels: stats_labels,
          datasets: [{
            label: 'Doctors',
            backgroundColor: ['#abc4ff','#fbb1bd'],
            data: [male, female]
          }]};
      
        const stats_config = {
          type: 'doughnut',
          data: stats_data,
          options: {}
        };
        
        const genderChart = new Chart(
        document.getElementById('genderChart'),
        stats_config
        );

    </script>


<?php
mysqli_close($conn);
?>

</body>

</html>