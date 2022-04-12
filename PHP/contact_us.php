<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Valley Clinic</title>
    <link rel="stylesheet" href="../CSS/NewNav.css">
    <link rel="stylesheet" href="../CSS/contactus.css">
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php
        include("header.php");
    ?>
    <div class="container-fluid bg-info">&nbsp;</div>
        <main>
            <div class="topic-heading"><h1>Contact Us</h1></div>
            <div class="google-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63746.22988678856!2d101.74131264103177!3d3.0573609321592627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc345abef241fd%3A0x39b44329d44af7a2!2sKlinik%20Mediviron!5e0!3m2!1sen!2smy!4v1642935399247!5m2!1sen!2smy" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="container-flex">
                <div class="content-heading">
                    <h2>Get in Touch With Us!</h2>
                </div>
                <div class="main-content-container">
                    <div class="contact-gallery box1">
                        <h3>Our Socials</h3>
                        <a id="fbLink" href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"> ValleyClinic</i></a>
                        <a id="instaLink" href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"> ValleyClinicMY</i></a>
                        <a id = "twitterLink" href="https://twitter.com/?lang=en"><i class="fa fa-twitter" aria-hidden="true"> @ValleyClinicMY</i></a>
                    </div>
                    <div class="contact-gallery box2">
                        <h3>Contacts</h3>
                        <div class="phone-block">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <p style="margin-left: 0.3em;">+60 3-9226 9999</p>
                        </div>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <a href="mailto:iaiassignment22@gmail.com">help@valleycl.com.my</a>
                    </div>
                    <div class="contact-gallery box3">
                        <h3>Location</h3>
                        <div class="location-block">
                            <i class="fa fa-location-arrow" aria-hidden="true"></i>
                            <p>2, Jalan Alam Jaya 15, Taman Alam Jaya, <br>43200 Cheras, Selangor</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <h2>Contact Us</h2>
                    <form action="" method="POST" id="form">
                        <div class="contact-container">
                            <div class="section name">
                                <div class="label">Name</div>
                                <div class="field"><input id="contact_name" type="text" name="contact_name" required placeholder="Your Name...*"></div>
                            </div>
                            <div class="section contacts">
                                <div class="label">Contact Number</div>
                                <div class="field"><input id="contact_phone" type="tel" name="contact_number" required placeholder="Your Contact Number...*"></div>
                            </div>
                        </div>
                        <div class="section email">
                            <div class="label">Email</div>
                            <div class="field"><input id="contact_email" type="email" name="contact_email" required placeholder="Your Email Address...*"></div>
                        </div>
                        <div class="section comment">
                            <div class="label">Comment</div>
                            <div class="field"><textarea name="comment" placeholder="Comment...*" required></textarea></div>
                        </div>
                        <div class="section">
                            <div class="label">&nbsp;</div>
                            <div class="field">
                                <button  type="reset" class="btn-control">Reset</button>
                                <button type="submit" onclick="return confirm('Are you sure you wish to submit this comment?')" class="btn-control">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
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