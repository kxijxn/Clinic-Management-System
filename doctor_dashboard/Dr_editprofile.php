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
    <title>Edit Profile</title>
</head>
<body>
    <?php
    require "Dr_header.php"
    ?>

    <?php
        require "connection/connection.php";
        $doctorid=$_SESSION['DocID'];
        $sql="SELECT * FROM `tbl_doctor` WHERE DocID=$doctorid ";
        $records =mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($records);
    ?>
<div id="main">
    <div class="row row-cols-1 g-4 mx-5">
        <div class="col"></div>
        <div class="col-12">
            <div class="card shadow bg-white rounded-3">
                <div class="card-body m-4">
                    <div class="row">
                        <h2>Edit Profile</h2>
                    </div>
                    <br>
                    <div class="row">
                        <div class="container">
                            <form method="POST" enctype="multipart/form-data" name="editform">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="Name_input">Name:</label>
                                                <?php
                                                    echo '<input type="text" class="form-control" id="Name_input" aria-describedby="titleHelp" name="Name" value="' .$row['Name'].' "required >'
                                                ?>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label for="No_input">Contact Number:</label>
                                                <?php
                                                    echo '<input type="tel" class="form-control" id="No_input" aria-describedby="titleHelp" name="ContactNo" value="'.$row['Contact_number'].' "required>'
                                                ?>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label for="Address_input">Address:</label>
                                                <?php
                                                    echo '<input type="text" class="form-control" id="Address_input" aria-describedby="titleHelp" name="Address" value="'.$row['Address'].'" required>'
                                                ?>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label for="Email_input">Email:</label>
                                                <?php
                                                    echo '<input type="email" class="form-control"  id="Name_Email_inputinput" aria-describedby="titleHelp" name="Email" value="'.$row['Email'].'" required>'
                                                ?>
                                            </div>
                                            
                                        </div>

                                        <div class="col">
                                            <div class="form-group">
                                                <label for="Spec_input">Specialist Category:</label>
                                                <?php
                                                    echo '<input type="text" class="form-control" id="Spec_input" aria-describedby="titleHelp" name="Spec" value="'.$row['Specialist_category'].'"required>'
                                                ?>
                                            </div>
                                            <br>
                                            
                                            <div class="form-group">
                                                <label for="Gend_input">Gender:</label>
                                                <select class="form-select" id="Gend_input" aria-label="Floating label select example" name="Gender" >
                                                <option value="Male" <?php if ($row['Gender'] == "Male") echo "selected"; ?> >Male </option>
                                                <option value="Female" <?php if ($row['Gender'] == "Female") echo "selected"; ?> >Female</option>
                                                </select>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label for="DOB_input">Date of Birth:</label>
                                                <?php
                                                    echo '<input type="date" class="form-control" id="DOB_input" aria-describedby="titleHelp" name="DOB" value="'.$row['DOB'] .'" required>'
                                                ?>
                                            </div>
                                            <br><br><br><br>

                                            <br>

                                            
                                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                <button class="btn btn-outline-primary me-md-2" type="reset" value="reset">Reset</button>
                                                <button class="btn btn-outline-primary" type="submit" name="update">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <button class="btn btn-primary" onclick="location.href= 'Dr_acc.php'" name="back">Back</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- update into database -->
<?php
if(isset($_POST['update']))
{
    require "connection/connection.php";
    $doctorid=$_SESSION['DocID'];
    $name=$_POST['Name'];
    $ContNo=$_POST['ContactNo'];
    $Add=$_POST['Address'];
    $email=$_POST['Email'];
    $SpecCat=$_POST['Spec'];
    $gender=$_POST['Gender'];
    $DOB=$_POST['DOB'];

    
    $sql= "UPDATE tbl_doctor SET Name='$name', Contact_number='$ContNo',Address='$Add',Email='$email',Specialist_category='$SpecCat',Gender='$gender',DOB='$DOB' WHERE DocID=$doctorid ";

    if(!mysqli_query($conn,$sql))
    {
        echo "<script>alert('Failed : Update failed')</script>";
    }else{
        echo "<script>alert('Account has been updated')
        window.location.href = 'Dr_acc.php'
        </script>";
    }
}

?>
</body>
</html>