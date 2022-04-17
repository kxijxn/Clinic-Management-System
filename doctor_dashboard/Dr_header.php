<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
    body{
        background-color: #F0F0F0;
    }
    .sidenav {
      height: 100%;
      width: 0;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: white;
      overflow-x: hidden;
      transition: 0.5s;
      padding-top: 60px;
    }


    .sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
    }

    .sidenav .pages:hover{
    color: blue;
    padding-left: 50px; 
    }

    .sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
    }

    .sidenav .closebtn:hover {
        color:blue;
        transform: scale(1.1); 
    }

    #main {
    transition: margin-left .5s;
    padding: 16px;
    }

    @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
    }

</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a><img src="../Images/logo02.JPG" height =50 width=80 alt="Valley Clinic Logo"></a>
  <a>Valley Clinic</a>
  <a class="pages" href="Dr_home.php"><i class="bi bi-house-fill"></i> Home</a>
  <a class="pages"  href="Dr_appointment.php"> <i class="bi bi-calendar3"></i> Appointment </a>
  <a class="pages"  href="Dr_treat_rec.php"><i class="bi bi-grid-3x3-gap-fill"></i> Treatment Record</a>
  <a class="pages"  href="Dr_acc.php"><i class="bi bi-person-circle"></i> Account</a>
  <a class="pages"  href="#logoutModal" data-bs-toggle="modal" data-bs-target="#logoutModal" ><i class="bi bi-box-arrow-left"></i> Logout</a>
</div>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a><span style="font-size:35px;cursor:pointer" onclick="openNav()"><i class="bi bi-justify"></i></span></a>

<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
  <div class="navbar-nav">
    
    <a class="navbar-brand mb-0 h1" href="Dr_home.php" style="font-size:30px;font-family: Rockwell;"> Valley Clinic <i class="bi bi-heart-pulse"></i></a>
  </div>
</div>
</nav>

<!-- Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Logout confirmation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Confirm Logout?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success" onclick="location.href='Dr_logout.php'">Logout</button>
      </div>
    </div>
  </div>
</div>

<script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "300px";
      
    }
    
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      
    }
</script>
</body>
</html>