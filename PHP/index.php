<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valley Clinic | Medical Institution for locals</title>
    <link rel="stylesheet" href="../CSS/homepage.css">
    <link rel="stylesheet" href="../CSS/NewNav.css">
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Sora&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php
        include("header.php");
    ?>
    <div class="container-fluid bg-info mb-4">&nbsp;</div>
        <main>
            <div class="container-carousal">
                <div class="carousel">
                    <div class="slider">
                        <section><img src="../Images/carousel-banner1.png" alt="slider-image"></section>
                        <section><img src="../Images/carousel-banner1.png" alt="slider-image"></section>
                        <section><img src="../Images/carousel-banner1.png" alt="slider-image"></section>
                        <section><img src="../Images/carousel-banner1.png" alt="slider-image"></section>
                    </div>
                    <div class="control">
                        <span class="arrow left"><i class="fa fa-arrow-left" aria-hidden="true" style="color: #ccc;"></i></span>
                        <span class="arrow right"><i class="fa fa-arrow-right" aria-hidden="true" style="color: #ccc;"></i></span>
                        <ul>
                            <li class="selected"></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-flex">
                <div class="heading-container">
                    <h2>Why choose us?</h2>
                </div>
                <div class="heading-content">
                    <img src="../Images/bg-img.jpg" alt="image-reference">
                    <p>Our patient's safety and well-being is our number 1 priority. 
                        Along with our top quality medication product, we provide top tier treatment from out certified doctors with years of experience.
                        Pay us a visit and we will ensure that you leave our doorstep as good as new.</p>
                </div>
                <div class="service-container">
                    <h2>Service Highlights</h2>
                    <div class="highlight-container">
                        <div class="highlight-gallery">
                            <i class="fa fa-user-md" aria-hidden="true"></i>
                            <p>Experienced doctors and nurses</p>
                        </div>
                        <div class="highlight-gallery">
                            <i class="fa fa-hospital-o" aria-hidden="true"></i>
                            <p>Hygenic and comfortable environment</p>
                        </div>
                        <div class="highlight-gallery">
                            <i class="fa fa-stethoscope" aria-hidden="true"></i>
                            <p>Latest medical equipment</p>
                        </div>
                        <div class="highlight-gallery">
                            <i class="fa fa-address-book" aria-hidden="true"></i>
                            <p>Booking and appointment services</p>
                        </div>
                    </div>
                </div>
                <div class="medical-process-container">
                    <h2>Medical Consultation Process</h2>
                    <div class="MCP-container">
                        <div class="MCP-gallery">
                            <i class="fa fa-address-book" aria-hidden="true"></i>
                            <p>Make an Appointment</p>
                            <p>Book an appointment with our specialist through various channels</p>
                        </div>
                        <div class="MCP-gallery">
                            <i class="fa fa-bed" aria-hidden="true"></i>
                            <p>Physical Confrontation</p>
                            <p>Walk in treatment at our physical shop to your medical consultation</p>
                        </div>
                        <div class="MCP-gallery  MCP-last">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <p>Contact Us!</p>
                            <p>Give us a call or email us for any inquiries. Our staff are here to provide for your needs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <div class="footer">
                <div class="about-us">
                    <h3>About Us</h3>
                    <p>We at Valley Clinic provides medical services to all patients with a sense of security while welcoming you with a smile on our face. 
                        No matter the seriousness of your condition, we at Valley Clinic are well equip with latest medical equipment along with experienced doctors.
                     Your health is our priority, pay us a visit at Valley Clinic for your medical needs.</p>           
                </div>
                <div class="contact-us">
                    <h3>Contact Us</h3>
                    <p>For more information;</p>
                    <div class="footer-box">
                        <i class="fa fa-location-arrow" aria-hidden="true"></i>
                        <p style="margin-top: 0px; margin-left: 7px; margin-bottom: 7px">2, Jalan Alam Jaya 15, Taman Alam Jaya, <br>43200 Cheras, Selangor</p>
                    </div>
                    <div class="footer-box">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <p style="margin-top: 0; margin-left: 7px;">+60 3-9226 9999</p>
                    </div>
                    <div class="footer-box">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <a style="margin-left: 7px;" href="mailto:help@valleycl.com.my">help@valleycl.com.my</a>
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
                        <a id ="twitterLink" href="https://twitter.com/?lang=en"><i class="fa fa-twitter" aria-hidden="true"> @ValleyClinicMY</i></a>
                    </div>
                </div>
            </div>
        </footer>
    <script src="../Bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../JS/carousel.js"></script>
</body>
</html>