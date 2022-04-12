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
    <title>Medicine - Valley Clinic</title>
    <link rel="stylesheet" href="css/admin_dashboard.css" type="text/css">
    <!-- bootstap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- datatables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <!-- additional -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    
</head>
<body>

    <div class="container-fluid">
        <div class="row">

            <!------------------left panel -------------------------  -->
            <div class="col-2 text-body my-4 vh-100">
                <a href="staff_dashboard.php">
                  <img src="../Images/clinic logo.png" alt="Clinic Logo" class="w-80 img-fluid">
                </a>
                
                <!-- ------------------------nav---------------------- -->
                <div class="container-fluid">
                  
                  <a href="staff_dashboard.php" class="text-decoration-none">
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

                  <a href="medicine.php" class="text-decoration-none">
                    <div class="card shadow mb-2">
                      <div class="card-body">
                          <div class="row">
                            <div class="col-4">
                              <img src="../Images/treatment icon.png" alt="icon" class="img-fluid pt-2">
                            </div>
                            <div class="col-8">
                              <h6 class="pt-1 card-title">Medicine</h6>
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
                        <h1>Medicine</h1>
                    </div>
                    <div class="col-1 p-3 me-3">
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
                          <div class="col-5">
                            <h5 class="card-title">Search Medicine</h5>
                          </div>
                          
                          <div class="col-3 text-end">
                            <a href="create_medicine.php">
                            <button type="button" class="btn btn-dark">New Medicine <i class="bi bi-plus-circle-fill ms-1"></i></button>
                            </a>
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

                        <script>
                          $(document).ready(function() {
                              $('#search-treatment').DataTable( {
                                  dom: 'lBfrtip',
                                  buttons: ['copy','csv','excel','pdf','print'],
                                  pagingType: 'full',
                                  initComplete: function () {
                                      var btns = $('.dt-button');
                                      btns.addClass('btn btn-dark mx-3');
                                      btns.removeClass('dt-button');
                                  }
                              } );
                          } );
                        </script>

                        <table id="search-treatment" class="display table table-striped" style="width:100%">
                          <thead>
                              <tr>
                                  <th class="text-center">Name</th>
                                  <th class="text-center">Price</th>
                                  <th class="text-center">Quantity</th>
                                  <th class="text-center">Update</th>
                                  <th class="text-center">Remove</th>
                              </tr>
                          </thead>
                          <tbody>
                          <?php
                            $query = "SELECT * FROM `tbl_medicine`";
                            $result = mysqli_query($conn, $query);

                            While($row = mysqli_fetch_array($result))
                            {
                          ?>
                              <tr>
                                <td class="text-center" >
                                  <a href='view_medicine.php?MedID=<?php echo $row['MedID'] ?>&' class="text-decoration-none text-dark" target="_blank">
                                    <?php echo $row['Name']?>
                                  </a>
                                </td>
                                <td class="text-center" >
                                  <a href='view_medicine.php?MedID=<?php echo $row['MedID'] ?>&' class="text-decoration-none text-dark" target="_blank">
                                    <?php echo $row['Price']?>
                                  </a>
                                </td>
                                <td class="text-center" >
                                  <a href='view_medicine.php?MedID=<?php echo $row['MedID'] ?>&' class="text-decoration-none text-dark" target="_blank">
                                    <?php echo $row['Quantity']?>
                                  </a>
                                </td>
                                <form action="update_medicine_form.php" method="post">
                                  <input type="hidden" name="MedID" value="<?php echo $row['MedID']?>">
                                  <td class="text-center" ><button type="submit" class="btn btn-outline-dark" name="update">Update</button></td>
                                </form>
                                <form action="delete_medicine.php" method="post">
                                  <input type="hidden" name="MedID" value="<?php echo $row['MedID']?>">
                                  <td class="text-center" ><button type="submit" class="btn btn-outline-dark" name="delete">Remove</button></td>
                                </form>                                
                              </tr>

                          <?php
                          }
                          mysqli_close($conn);
                          ?>
                          </tbody>
                          <tfoot>
                              <tr>
                                <th class="text-center">Name</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Quantity</th>
                                <th class="text-center">Update</th>
                                <th class="text-center">Remove</th>
                              </tr>
                          </tfoot>
                      </table>

                      </div>
                    </div>
                  </div>
                </div>
  
          </div>
      </div>

      <!-- boostrap -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      

  </body>
  
  </html>