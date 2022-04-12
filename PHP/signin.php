<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valley Clinic | Medical Institution for locals</title>
    <link rel="stylesheet" href="../CSS/signin.css">
    <link href="https://fonts.googleapis.com/css2?family=Sora&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php
        include("header.php");
    ?>
    <div class="container">
        <div class="header">
                    <h2>Sign In</h2>
                    <div class="error">
                        <?php if (isset($_GET['error'])) 
                        { ?>
                            <p class="error"><?php echo $_GET['error']; ?></p>
                        <?php 
                        } ?>
                    </div>
                </div>

            <form method="POST" class="form" action="logincheck.php">    
                <div class="form-control">  
                    Username:   
                    <input type="text" name="username" placeholder="Username" autocomplete="off">  
                </div> 
                <div class="form-control">   
                    Password:   
                    <input type="password" name="password" placeholder="Password" autocomplete="off">  
                </div>                                 
                <button name="submit">Sign In</button>  
                <div class="signup_link">
                    Not a member? <a href="signup.php">Click here to Sign Up!</a>
                </div>                             
            </form>
        </div>
    </div>


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
            <div class="footer-box">
                <a id="fbLink" href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"> ValleyClinic</i></a>
            </div>
            <div class="footer-box">
                <a id="instaLink" href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"> ValleyClinicMY</i></a>
            </div>
            <div class="footer-box">
                <a id = "twitterLink" href="https://twitter.com/?lang=en"><i class="fa fa-twitter" aria-hidden="true"> @ValleyClinicMY</i></a>
            </div>
        </div>
    </div>

</body>
</html>