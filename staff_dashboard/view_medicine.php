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
    <title>View Treatment & Services - Valley Clinic</title>
    <link rel="stylesheet" href="css/admin_dashboard.css">
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
                    <div class="card shadow mb-2">
                      <div class="card-body">
                          <div class="row">
                            <div class="col-4">
                              <img src="../Images/treatment icon.png" alt="icon" class="img-fluid pt-2">
                            </div>
                            <div class="col-8">
                              <h6 class="pt-1 card-title">Treatment & Services</h6>
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
                      <h1>Treatment & Services</h1>
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
                <!---------------- white box-------------------->
                <div class="row row-cols-1 g-4 mx-4">
                  <div class="col">
                    <div class="card shadow bg-white rounded-3 w-auto">
                      <div class="card-body m-4">

                        <!-- -------------treatment details------------------------ -->

                        <?php
                          $ServID = $_GET["ServID"];

                          $sql = "SELECT * 
                          FROM `tbl_medical_services`
                          WHERE `ServID`= '$ServID'";
                    
                          $result = mysqli_query($conn, $sql);
                    
                          while($row = mysqli_fetch_array($result))
                          {
                        ?>
                        
                        <div class="row justify-content-between mb-5">
                            <div class="col-9">
                                <div class="mb-5">
                                    <h3 class="card-title"><?php echo $row['Title'] ?></h3>
                                    <p class="card-text"><?php echo $row['Description'] ?></p>
                                </div>

                                <div class="mb-5">
                                    <h5 class="card-title">Consultation Fee Range</h5>
                                    <p class="card-text"><?php echo $row['ConsultationFees'] ?></p>
                                </div>
                                <div class="mb-5">
                                    <h5 class="card-title">Specialist Category</h5>
                                    <p class="card-text"><?php echo $row['Specialist_category'] ?></p>
                                </div>
                                <div class="mb-5">
                                    <img src="../treatment_images/<?php echo $row['Picture'] ?>" alt="Treatment & Services" class="img-fluid w-100 img-thumbnail">
                                </div>
                            </div>
                            <div class="col-2 g-5 px-5 mx-0">
                                <div class="col m-5">
                                  <a href="medicine.php">
                                    <button type="button" class="btn btn-dark shadow"><i class="bi bi-search-heart-fill col-icon"></i>SEARCH</button>
                                  </a>
                                </div>
                                <div class="col m-5">
                                    <form action="update_services_form.php"method="post">
                                      <input type="hidden" name="ServID" value="<?php echo $row['ServID']?>">
                                      <button type="submit" class="btn btn-dark shadow" name="update"><i class="bi bi-pen-fill col-icon"></i>UPDATE</button>
                                    </form>
                                </div>
                                <div class="col m-5">
                                  <form action="delete_medicine.php" method="post">
                                    <input type="hidden" name="ServID" value="<?php echo $row['ServID']?>">
                                    <button type="submit" class="btn btn-dark shadow" name="delete"><i class="bi bi-trash-fill col-icon"></i>DELETE</button>
                                  </form>
                                </div>
                                <?php
                                  }
                                  mysqli_close($conn);                          
                                ?>
                            </div>
                        </div>
                      </div>
                    </div>                
                  </div>
              </div>
          </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>