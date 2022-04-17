<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treatment & Services | Valley Clinic</title>
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/NewNav.css">
    <link rel="stylesheet" href="../CSS/treatmentNservices.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/76c0529494.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        include("header.php");
    ?>
    <div class="container-flex">
        <main>
            <div class="header-img">
                <img src="../Images/bg-img-TS.jpg" alt="Background Image">
            </div>
            <div class="search-panel">
                <h2 class="fw-bold">Treatment & Services</h2>
                <div class="search-bar">
                    <form method="POST">
                        <input type="text" name="search-keyword" class="search-panel" placeholder="Keyword">
                        <button type="submit" class="btn btn-outline-secondary py-0"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
            <div class="content-body">
                    <?php
                        include("conn.php");
                        $result_per_page = 8;
                        $search_key = "";

                        if(isset($_POST['search-keyword'])) {
                            $search_key = $_POST['search-keyword'];
                        } else {
                            $search_key = "";
                        }
                        $sql_treatment = "SELECT * FROM tbl_medical_services WHERE Title LIKE '%$search_key%'";
                        $result_row = mysqli_query($con, $sql_treatment);
                        $num_rows = mysqli_num_rows($result_row);

                        $numPages = ceil($num_rows / $result_per_page);

                        //Current Page
                        if (!isset($_GET['page'])) {
                            $page = 1;
                        } else {
                            $page = $_GET['page'];
                        }

                        $starting_limit = ($page - 1) * $result_per_page;

                        // Display pagination
                        echo '<div class="pagination">';
                        echo '<ul class="pagination-menu">';
                        if ($page > 1) {
                            echo '<li class="nav-prev"><a href="treatmentNservices.php?page=' . ($page - 1) . '">&laquo</a></li>';
                        }
                        for ($i = 1; $i <= $numPages; $i++) {
                            echo '<li class="nav-numb"><a href="treatmentNservices.php?page=' . $i . '">' . $i . '</a></li> ';
                          }
              
                          if ($i>$page) {
                            echo '<li class="nav-next"><a href="treatmentNservices.php?page' . ($page + 1) . '">&raquo;</a></li>';
                          }
                          
                          echo '</ul>';
                          echo '</div>';

                        mysqli_close($con);
                    ?>
                
                <div class="main-content">
                    <?php
                        include("conn.php");
                        $result_treatments = mysqli_query($con, $sql_treatment);

                        if (mysqli_num_rows($result_treatments) == 0 ) {
                            echo '<div class="ts_gallery" style="border: none; margin: 0 auto; width: 100%;"><p>There is no such treatment available!<br>Please contact our staff for more information.</p></div>';
                        }
                        
                        while($row = mysqli_fetch_array($result_treatments)) {
                        
                            if ($row['Picture' == ""]) {
                                $treatment_pic = "img-placeholder.png";
                            } else {
                                $treatment_pic = $row['Picture'];
                            }

                            $to_print = '<div class="ts_gallery">
                            <img src="../Images/' .$treatment_pic. '" alt="img-treatment">
                            <a href="medical_services.php?ServID=' .$row['ServID']. '">' .$row['Title']. '</a>
                            </div>';

                            echo $to_print;
                        }
                        mysqli_close($con);
                    ?>
                </div>
            </div>
            <div class="content-subtitle">
                <div class="treatment-highlight">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <h3>Birthing Care</h3>
                </div>
                <div class="treatment-highlight">
                    <i class="fa fa-heartbeat" aria-hidden="true"></i>
                    <h3>Healthcare</h3>
                </div>
                <div class="treatment-highlight">
                    <i class="fa fa-ambulance" aria-hidden="true"></i>
                    <h3>Emergencies</h3>
                </div>
                <div class="treatment-highlight">
                    <i class="fa fa-stethoscope" aria-hidden="true"></i>
                    <h3>Family Medicine</h3>
                </div>
                <div class="treatment-highlight">
                    <i class="fa fa-medkit" aria-hidden="true"></i>
                    <h3>Cancer Care</h3>
                </div>
                <div class="treatment-highlight">
                    <i class="fa-solid fa-bone"></i>
                    <h3>Orthopedics</h3>
                </div>
            </div>
            <div class="title-content2">
                <h2 class="fw-bold">Services & Equipments</h2>
            </div>
            <div class="content2-body">
                <div class="content2-img">
                    <img src="../Images/content-bg-TS.jpg" alt="Services-and-equipment">
                </div>
                <div class="service-overview">
                    <p>We have placed an emphasis on hygiene, comfort and service to ensure that we create a safe space for all your medical needs. Led by a team of experienced doctors and nursing staff to make your visit with us as comfortable and seamless as possible.</p>
                
                    <div class="equipment-content">
                        <h4 class="fw-bold  ">Our Equipment</h4>
                        <div class="equipment-gallery">
                            <img src="../Images/equipment-gallery.jpg" alt="equipment-gallery">
                            <img src="../Images/equipment-gallery-2.jpg" alt="equipment-gallery">
                            <img src="../Images/equipment-gallery-3.jpg" alt="equipment-gallery">
                            <img src="../Images/equipment-gallery-4.jpg" alt="equipment-gallery">
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div> <!--Close Container-->
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
    <script src="../Bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>