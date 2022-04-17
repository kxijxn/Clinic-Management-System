<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: logout_success.php?success= Logged Out Successfully !");
   }
?>

<!-- store design hereee -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout - Valley Clinic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<!-- 
    container
    container-fluid
    row
    row-cols-2
    align-item-... (up down)
    justify-content-.. (left right)
    my mx (margin of col)
    gx gy (padding of col)
    w75 (width 75%)
    card
    card body/img-top/text/header/footer/group
    card - background/border for dashboard (text-white bg-dark)
    headings/display/inline text
    list unstyle
    img-fluid (fit in border)/thumbnail(round border)
    arrage img - float-end (inlinetext) / clearfix (under img)
    alert
    rounded (img)
    border
    shadow
    table hover striped
    toast
-->
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

                  <a href="treatment_services.html" class="text-decoration-none">
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

                  <a href="search_admin.html" class="text-decoration-none">
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

                  <a href="search_staff.html" class="text-decoration-none">
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

                  <a href="search_doctor.html" class="text-decoration-none">
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

                  <a href="report.html" class="text-decoration-none">
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

                  <a href="logout.php" class="text-decoration-none">
                    <div class="card shadow mb-1">
                      <div class="card-body">
                          <div class="row">
                            <div class="col-4">
                              <img src="../Images/logout icon.png" alt="icon" class="img-fluid">
                            </div>
                            <div class="col-8">
                              <h6 class="pt-1 card-title">Logout</h6>
                            </div>
                          </div>
                      </div>
                    </div>
                  </a>

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
                  <div class="col-1 p-3">
                      <img src="../Images/admin profile icon.png" alt="Admin Profile Icon" class="img-fluid">
                  </div>
                </div>
              </div>

              <!---------------------------content ------------------- -->

  

            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>