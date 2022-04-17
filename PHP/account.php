<?php
    include 'conn.php';
    session_start();
    if (isset($_SESSION['Acc_ID']) && isset($_SESSION['Username']))
    {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valley Clinic | Medical Institution for locals</title>
    <link rel="stylesheet" href="../CSS/account.css">
    <link href="https://fonts.googleapis.com/css2?family=Sora&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- <div class="nav">
        <img src="../Images/logo.JPG" alt="Valley_Clinic_Logo" style="height: 100px; margin-left: 50px; margin-top: 7px;">
        <div id="nav_bar">
            <ul class="nav_menu">
                <li class="menu" style="border-right: 1px solid #BDC3C7;"><a href="#1">Home</a></li>
                <li class="menu" style="border-right: 1px solid #BDC3C7;"><a href="#2">About Us</a></li>
                <li class="menu" style="border-right: 1px solid #BDC3C7;"><a href="#3">Services</a></li>
                <li class="menu"style="border-right: 1px solid #BDC3C7;"><a href="#4">Online Booking</a></li>
                <li class="menu"><a href="#5">Contact Us</a></li>
                <li id="loginBtn" class="menu" style="margin-left: 120px;"><a href="logout.php"><i class="fa fa-user-circle" aria-hidden="true"> Logout</i></a><li>
            </ul>
        </div>
    </div>
    <hr class="seperator"> -->
    <div class="container">
        <div class="header">
            <h2>Edit Profile</h2>
            <div class="Req">
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
            </div>
            <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']; ?></p>
            <?php } ?>   
        </div>
            
        <form method="POST" class="form" action="updateaccount.php" >    
            <?php
                $current = $_SESSION['Username'];
                $sql = "SELECT * FROM tbl_account WHERE Username = '$current'";
                $results = mysqli_query($con,$sql);

                if($results)
                {
                    if(mysqli_num_rows($results)>0)
                    {
                        while($row = mysqli_fetch_array($results))
                        {
                            ?>
                                <div class="form-control">
                                    Username: 
                                    <input type="text" name="username" value = "<?php echo $row['Username'];?>" >
                                </div>  
                                <div class="form-control">   
                                    Password:
                                    <input type="password" name="password" value = "<?php echo $row['Password'];?>">
                                </div>
                                <div class="form-control">   
                                    Name:   
                                    <input type="text" name="name" value = "<?php echo $row['Name'];?>">  
                                </div>         
                                <div class="form-control">   
                                    Phone Number:   
                                    <input type="text" name="phone" value = "<?php echo $row['Phone_number'];?>">  
                                </div> 
                                <div class="form-control">   
                                    Email:   
                                    <input type="text" name="email" value = "<?php echo $row['Email'];?>"> 
                                </div>                   
                                <button name="submit">Save</button>
                                <a href="../PHP/index.php"><button type="button">Back</button></a>
                            <?php
                        }
                    }
                }
            ?>                             
        </form>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>

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

    <script src="../JS/carousel.js"></script>
</body>
</html>
<?php
}
else
{
    header("Location: index.php");
    exit();
}
?>