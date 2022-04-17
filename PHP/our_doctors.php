<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Doctors | Valley Clinic</title>
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/NewNav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../CSS/our_doctor.css">
</head>
<body>
    <?php
        include("header.php");
    ?>
    <div class="container-fluid bg-info">&nbsp;</div>
    <div class="container-flex">
        <main>
           <div class="header-content">
               <img src="../Images/bg-img.jpg" alt="background-img-header">
           </div>
           <div class="title-container">
               <h2>Our Doctors</h2>
               <p>To replace any placeholder text (such as this), just click it and start typing. We think this paragraph makes a great statement just as it is. But if you’d like to try a bit of customizing to make it your own, you can change the fonts with just a click.</p>
           </div>
           <div class="body-container">
                <?php
                    include("conn.php");
                    $result_doctor = mysqli_query($con, "SELECT * FROM tbl_doctor");

                    while($row = mysqli_fetch_array($result_doctor)) {
                        
                        if ($row['Picture' == ""]) {
                            $doctor_pic = "doctor-test.jpg";
                        } else {
                            $doctor_pic = $row['Picture'];
                        }

                        $to_print = '<div class="doctor-gallery">
                        <img src="../Images/' . $doctor_pic  . '" alt="doctor-pic">
                        <h3>' .$row['Name']. '</h3>
                        <h4>' .$row['Specialist_category']. '</h4>
                        </div>';

                        echo $to_print;
                    }
                    mysqli_close($con);
                ?>
           </div>
        </main>
    </div>
    <?php
        include("footer.php");  
    ?>
    <script src="../Bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>