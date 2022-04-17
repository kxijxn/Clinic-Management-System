<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Services | Valley Clinic</title>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/NewNav.css">
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../CSS/medical_services.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/76c0529494.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <div class="container">
                <a href="" class="navbar-brand"><img src="../Images/logo.JPG" alt="Valley-Clinic-Logo" height="100%"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="../HTML/index.html" class="nav-link">Home</a>
                        </li>
                        <li class="navbar-nav">
                            <li class="nav-item">
                                <a href="../HTML/about_us.html" class="nav-link">About Us</a>
                            </li>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Services
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="../PHP/treatmentNservices.php">Treatment & Services</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="../PHP/our_doctors.php">Our Doctors</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Online Booking
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="../PHP/book_treatment.php">Bookings</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="#">Payment</a></li>
                            </ul>
                        </li>
                        <li class="navbar-nav">
                            <li class="nav-item">
                                <a href="../HTML/contact_us.html" class="nav-link">Contact Us</a>
                            </li>
                        </li>
                        <li class="navbar-nav">
                            <li class="nav-item">
                                <a href="../PHP/signin.php" class="nav-link"><i class="bi bi-person-circle"></i> Login</a>
                            </li>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container-fluid bg-info">&nbsp;</div>
    <div class="container-flex">
        <?php
            include("conn.php");
            $ServID = $_GET["ServID"];
            $treatment_details = mysqli_query($con, "SELECT * FROM tbl_medical_services WHERE ServID = $ServID");

            while ($row = mysqli_fetch_array($treatment_details)) {
                $treatment_title = $row['Title'];
                $doctor_reference = $row['Specialist_category'];

                if ($row['Description'] == "") {
                    $treatment_desc = "No additional information to be displayed. Please refer to your nearest healthcare center for further diagnosis.";
                } else {
                    $treatment_desc = $row['Description'];
                }

                if ($row['ConsultationFees'] == 0) {
                    $treatment_price = "Further payment are to be determined after treatment session.";
                } else {
                    $treatment_price = "RM " . $row['ConsultationFees'] . "~ Per Consultation";
                }
                // Star Rating
                // $star_rating = $row['Rating'];
                // $print_star = "";
                // while($star_rating > 0 ) {
                //     $print_star = $print_star . '<span class="fa fa-star checked"></span>';
                //     $star_rating = $star_rating - 1;
                // }
                // $empty_stars = 5 - $row['Rating'];
                // while ($empty_stars > 0 ){
                //     $print_star = $print_star . '<span class="fa fa-star"></span>';
                //     $empty_stars = $empty_stars - 1;
                // }
            }
        ?>
        <main>
            <div class="heading-wrap">
                <div class="medical-heading">
                    <h2><?php echo $treatment_title; ?></h2>
                </div>
            </div>
            <div class="body-content">
                <div class="desc-col">
                    <h3>Description</h3>
                    <p><?php echo $treatment_desc ?></p>
                </div>
                <div class="misc-col">
                    <div class="consultation-fee">
                        <h3>Consultation Fees</h3>
                        <p><?php echo $treatment_price?></p>
                    </div>
                    <!-- <div class="rating">
                        <h3>Rating</h3>
                        <div class="stars-rating">
                            echo $print_star
                        </div>
                    </div> -->
                </div>
                <div class="doctor-col">
                    <h3>Specialist Doctors</h3>
                    <div class="doc-gallery-container">
                        <?php
                            $doctor_treatment = mysqli_query($con, "SELECT * FROM tbl_doctor WHERE Specialist_category = '$doctor_reference'");
                            while ($column = mysqli_fetch_array($doctor_treatment)) {

                                $doctor_gallery = '<div class="doc-gallery">
                                <img src="../Images/doctor-test.jpg" alt="' .$column['Name']. '">
                                <h4>' .$column['Name']. '</h4>
                                </div>';
                                echo $doctor_gallery;
                            }
                            mysqli_close($con);
                        ?>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <footer>
        <div class="footer"> <!--Footer Container-->
            <div class="about-us">
                <h3>About Us</h3>
                <p>We at Valley Clinic provides medical services to all patients with a sense of security while welcoming you with a smile on our face. 
                    No matter the seriousness of your condition, we at Valley Clinic are well equip with latest medical equipment along with experienced doctors.
                 Your health is our priority, pay us a visit at Valley Clinic for your medical needs.</p>           
            </div>
            <div class="contact-us">
                <h3>Contact Us</h3>
                <p>For more information;</p>
                <div class="footer-box address">
                    <i class="fa fa-location-arrow" aria-hidden="true"></i>
                    <p>2, Jalan Alam Jaya 15, Taman Alam Jaya, <br>43200 Cheras, Selangor</p>
                </div>
                <div class="footer-box phone-number">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <p>+60 3-9226 9999</p>
                </div>
                <div class="footer-box email">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <a>help@valleycl.com.my</a>
                </div>
            </div>
            <div class="follow-us">
                <h3>Follow Us</h3>
                <div class="follow-box">
                    <a id="fbLink" href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"> ValleyClinic</i></a>
                </div>
                <div class="follow-box">
                    <a id="instaLink" href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"> ValleyClinicMY</i></a>
                </div>
                <div class="follow-box">
                    <a id = "twitterLink" href="https://twitter.com/?lang=en"><i class="fa fa-twitter" aria-hidden="true"> @ValleyClinicMY</i></a>
                </div>
            </div>
        </div><!--Close Container-->
    </footer>
    <script src="../Bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>