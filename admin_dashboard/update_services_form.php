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
    <title>Update Treatment & Services - Valley Clinic</title>
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
                    <div class="card shadow bg-white rounded-3">
                      <div class="card-body m-4">

                        <!-- -------------header------------------------ -->
                        <div class="row row-cols-4 justify-content-between align-items-center mb-5">
                          <div class="col-12">
                            <h5 class="card-title ms-5">Update Treatment & Services</h5>
                          </div>
                        </div>

                        <?php if(isset($_GET["success"]))
                          {
                            echo '<div class="alert alert-success d-flex align-items-center m-5" role="alert">
                                    <i class="bi bi-check-circle-fill text-success fs-4 mx-5"></i>
                                    <h6 class="pt-2">'.$_GET["success"].'</h6>
                                  </div>';
                        }?>

                        <?php if(isset($_GET["error"]))
                        {
                          echo '<div class="alert alert-danger d-flex align-items-center  m-5" role="alert">
                                  <i class="bi bi-exclamation-triangle-fill text-danger fs-4 mx-5"></i>
                                  <h6 class="pt-2">'.$_GET["error"].'</h6>
                                </div>';
                        }?>

                        <!-- ------------------treatment & services ------------------ -->
                        
                        <?php
                          if(isset($_POST['update']))
                          {
                            $ServID = $_POST["ServID"];

                            $sql = "SELECT * 
                            FROM `tbl_medical_services`
                            WHERE `ServID`= '$ServID'";
                      
                            $result = mysqli_query($conn, $sql);
                      
                            while($row = mysqli_fetch_array($result))
                            {
                        ?>                        

                          <div class="col-12">
                            <div class="row justify-content-center text-center align-items-center">
                              <div class="col-5">
                                <img src="../treatment_images/<?php echo $row['Picture']?>" class="img-fluid img-thumbnail mb-5">
                              </div>
                            </div>
                          </div>

                        <form class="mx-5 vh-100" action="update_services.php" method="post">
                          <input type="hidden" name="ServID" value="<?php echo $row['ServID'] ?>">

                          <div class="mb-3">
                            <label for="Title" class="form-label">Title</label>
                            <input class="form-control" type="text" placeholder="Title" name="Title" aria-label="Title"  value="<?php echo $row['Title'] ?>" required>
                          </div>
                          <div class="mb-3">
                            <label for="Description" class="form-label">Description</label>
                            <textarea class="form-control" placeholder="Description" name="Description" aria-label="Description"   style="height: 100px" required><?php echo $row['Description'] ?></textarea>
                          </div>
                          <div class="mb-3">
                            <label for="Specialist_category" class="form-label">Specialist Category</label>
                            <input class="form-control" type="text" placeholder="Specialist Category" name="Specialist_category" aria-label="Specialist Category" value="<?php echo $row['Specialist_category'] ?>" required>
                          </div>
                          <div class="mb-3">
                            <label for="Consultation_Fees" class="form-label">Consultation Fee Range</label>
                            <select class="form-select" aria-label="Consultation Fee" name="Consultation_Fees" required>
                              <option value="RM30 - RM50"
                              <?php if($row['ConsultationFees'] == "RM30 - RM50"){ ?> 
                              selected="selected"
                              <?php } ?> 
                              >RM30 - RM50</option>

                              <option value="RM51 - RM80"
                              <?php if($row['ConsultationFees'] == "RM51 - RM80"){ ?> 
                              selected="selected"
                              <?php } ?>                               
                              >RM51 - RM80</option>
                              
                              <option value="RM81 - RM125"
                              <?php if($row['ConsultationFees'] == "RM81 - RM125"){ ?> 
                              selected="selected"
                              <?php } ?>                               
                              >RM81 - RM125</option>

                              <option value="RM126 - RM235"
                              <?php if($row['ConsultationFees'] == "RM126 - RM235"){ ?> 
                              selected="selected"
                              <?php } ?>                               
                              >RM126 - RM235</option>

                            </select>
                          </div>
                          <div class="d-grid">
                            <button type="submit" class="btn btn-dark mt-5" name="update">Submit</button>
                          </div>
                        </form>

                        <?php
                          }
                        }

                        mysqli_close($conn);
                        ?>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>