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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <title>Account</title>
    <style>
        #pp{
            opacity: 1;
        }
        .div:hover #pp  {
        opacity: 0.3;
        }
        #pp_mid{
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }
        .div:hover #pp_mid{
            opacity: 1;
        }
        #pp_text{
            font-size: 20px;
            font-weight: bold;
        }

        .close{
            color: #aaaaaa;
            position: absolute;
            right: 25px;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <!-- header -->
    <?php require "Dr_header.php"
    ?>
    <!-- database -->
    <?php
        require "connection/connection.php";
        $doctorid=$_SESSION['DocID'];
        $sql="SELECT * FROM `tbl_doctor` WHERE DocID=$doctorid ";
        $records =mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($records);
    ?>

<!-- chg propic Modal -->
<div class="modal fade" id="ppModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Change Profile Picture</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5>Please upload your photo:</h5>
        <div class="container">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="file" accept="image/*" class="form-control" id="Propic" name="Propic" required>
                </div>
                <br>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="button" class="btn btn-secondary me-md-2" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary float-end" type="submit" name="update">Upload</button>
                </div>
                
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
    <!-- main -->
    <div id="main">
    <!-- white box -->
    <div class="row row-cols-1 g-4 mx-5">
        <div class="col"></div>
        <div class="col-3">
            <div class="card shadow bg-white rounded-3">
                <div class="card-body py-4">
                    <!-- title -->
                    <div class=" div text-center">
                        
                            <?php
                            echo '<img class ="rounded-circle" id="pp" alt="Profile Picture" style="height:220px;width:220px" src="data:image/png;base64,'.base64_encode($row['Profile_pic']).'"/>';
                            echo '<div id="pp_mid">
                            <a data-target="#ppModal" href="#ppModal" data-bs-toggle="modal" data-bs-target="#ppModal""><div id="pp_text">Change Picture</div></a>
                            </div>'
                            ?>
                        
                    </div>
                    <div class="text-center mt-3">
                        <?php
                            echo "<h5 class=\"mt-2 mb-0\" id=\"fname\">Dr. ". $row['Name']."</h5>"
                        ?>
                    </div>
                    <div class="text-center mt-3">
                        <a href="dr_editprofile.php">
                            <button type='button' class='btn btn-primary' >Edit Profile</button>
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
        <div class="col-7">
            <div class="card shadow bg-white rounded-3">
                <div class="card-body m-4">
                    <div class="text-center ">
                        <h2 style="font-family:'Verdana';" ><u>Profile</u></h2>
                        <br>

                    </div>
                    <?php
                            // Doctor ID
                            echo "<div class=\"row\">";
                            echo "<div class=\"col-sm-5\"><h4 class=\"mb-0\">Doctor ID :</h4></div>";
                            echo  "<div class=\"col-6\"><h4 >".$row['DocID']."</h4></div></div>";
                            echo "<hr>";
                            // Name
                            echo "<div class=\"row\"><div class=\"col-sm-5\"><h4 class=\"mb-0\">Full Name :</h4></div>";
                            echo  "<div class=\"col-6\"><h4 >".$row['Name']."</h4></div></div>";
                            echo "<hr>";
                            // Contact No
                            echo "<div class=\"row\"><div class=\"col-sm-5\"><h4 class=\"mb-0\">Contact Number :</h4></div>";
                            echo  "<div class=\"col-6\"><h4 >".$row['Contact_number']."</h4></div></div>";
                            echo "<hr>";
                            // Address
                            echo "<div class=\"row\"><div class=\"col-sm-5\"><h4 class=\"mb-0\">Address :</h4></div>";
                            echo  "<div class=\"col-6\"><h4 >".$row['Address']."</h4></div></div>";
                            echo "<hr>";
                            // Email
                            echo "<div class=\"row\"><div class=\"col-sm-5\"><h4 class=\"mb-0\">Email :</h4></div>";
                            echo  "<div class=\"col-6\"><h4 >".$row['Email']."</h4></div></div>";
                            echo "<hr>";
                            // Specialist
                            echo "<div class=\"row\"><div class=\"col-sm-5\"><h4 class=\"mb-0\">Specialist Category :</h4></div>";
                            echo  "<div class=\"col-6\"><h4 >".$row['Specialist_category']."</h4></div></div>";
                            echo "<hr>";
                            // gender
                            echo "<div class=\"row\"><div class=\"col-sm-5\"><h4 class=\"mb-0\">Gender :</h4></div>";
                            echo  "<div class=\"col-6\"><h4 >".$row['Gender']."</h4></div></div>";
                            echo "<hr>";
                            // DOB
                            echo "<div class=\"row\"><div class=\"col-sm-5\"><h4 class=\"mb-0\">Date of Birth :</h4></div>";
                            echo  "<div class=\"col-6\"><h4 >".$row['DOB']."</h4></div></div>";
                            echo "<hr>";
                    ?>
                </div>
            </div>
        </div>
            
    </div>
    </div>
<!-- modal script -->

<?php
if(isset($_POST['update']))
{
    require "connection/connection.php";
    $doctorid=$_SESSION['DocID'];
    $propic=$_FILES['Propic']['tmp_name'];
    $img=addslashes(file_get_contents($propic));
    $sql= "UPDATE tbl_doctor SET Profile_pic='{$img}' WHERE DocID=$doctorid ";

    if(!mysqli_query($conn,$sql))
    {
        echo "<script>alert('Failed : Update failed')</script>";
    }else{
        echo "<script>alert('Profile Picture had been update')
        window.location.href = 'Dr_acc.php'
        </script>";
    }
}

?>
</body>
</html>