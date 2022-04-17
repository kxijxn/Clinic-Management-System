<?php
  include("staff_session.php");
  include("conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Dashboard - Valley Clinic</title>
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
                  
                  <a href="staff_dashboard.php" class="text-decoration-none">
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

                  <a href="medicine.php" class="text-decoration-none">
                    <div class="card mb-2">
                      <div class="card-body">
                          <div class="row">
                            <div class="col-4">
                              <img src="../Images/muted treatment icon.png" alt="icon" class="img-fluid pt-2">
                            </div>
                            <div class="col-8">
                              <h6 class="pt-1 card-title text-muted">Medicine</h6>
                            </div>
                          </div>
                      </div>
                    </div>
                  </a>

                  <a href="appointment.php" class="text-decoration-none">
                    <div class="card mb-2">
                      <div class="card-body">
                          <div class="row">
                            <div class="col-4">
                              <img src="../Images/muted admin icon.png" alt="icon" class="img-fluid">
                            </div>
                            <div class="col-8">
                              <h6 class="pt-1 card-title text-muted">Appointment</h6>
                            </div>
                          </div>
                      </div>
                    </div>
                  </a>

                  <a href="staff_logout.php" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
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
                    <a href="staff_logout.php">
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
                <div class="col-6">
                  <div class="card shadow bg-white rounded-3">
                    <div class="card-body m-4">
                      <h3 class="card-title  text-center">Manage Medicine</h3>
                        <div class="container" style="margin-left: 12% !important;">
                          <div class="row row-cols-1 justify-content-between">
                            <div class="col m-5" >
                              <a href="create_medicine.php">
                                <button type="button" class="btn btn-dark w-50" style="height: 150%;">Add<i class="bi bi-plus-circle-fill ms-3"></i></button>
                              </a>
                            </div>
                            <div class="col m-5">
                              <a href="update_medicine_form.php">
                                <button type="button" class="btn btn-dark w-50" style="height: 150%;">Edit<i class="bi bi-pencil-square ms-3"></i></button>
                              </a>
                            </div>
                            <div class="col m-5">
                              <a href="medicine.php">
                                <button type="button" class="btn btn-dark w-50" style="height: 150%;">Search<i class="bi bi-search ms-3"></i></button>
                              </a>
                            </div>
                            <div class="col m-5">
                              <a href="medicine.php">
                                <button type="button" class="btn btn-dark w-50" style="height: 150%;">Delete<i class="bi bi-trash3-fill ms-3"></i></button>
                              </a>
                            </div>                                                                            
                          </div>                            
                        </div>
                    </div>
                  </div>
                </div>


                <!-- -- ------------------doctors---------------------- -->
                <div class="col-6">
                  <div class="card shadow bg-white rounded-3">
                    <div class="card-body" style="height:91vh;">
                      <h3 class="card-title p-3 text-center">Check Appointments</h3>
                        <div class="container" style="margin-left: 12% !important;">
                          <div class="row row-cols-1">
                            <div class="col m-5" style="margin-top: 35% !important;">
                              <a href="appointment.php">
                                <button type="button" class="btn btn-dark w-50" style="height: 500%">Check Appointment<i class="bi bi-card-checklist ms-3"></i></button>
                              </a>
                            </div>                                                                          
                          </div>                            
                        </div>                      
                    </div>
                  </div>
                </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>


<?php
mysqli_close($conn);
?>

</body>

</html>