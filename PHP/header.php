<header>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <div class="container">
            <a href="" class="navbar-brand"><img src="../Images/logo.JPG" alt="Valley-Clinic-Logo" height="100%"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="../PHP/index.php" class="nav-link">Home</a>
                    </li>
                    <li class="navbar-nav">
                        <li class="nav-item">
                            <a href="../PHP/about_us.PHP" class="nav-link">About Us</a>
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
                            <li><a class="dropdown-item" href="#" disabled>Payment</a></li>
                        </ul>
                    </li>
                    <li class="navbar-nav">
                        <li class="nav-item">
                            <a href="../PHP/contact_us.php" class="nav-link">Contact Us</a>
                        </li>
                    </li>
                    <!-- PHP Switch -->
                    <?php
                        session_start();
                        if (!isset($_SESSION['Username']))
                        {
                          include("allLogin.php");
                        }
                        else {
                            $Username = $_SESSION['Username'];
                            $Acc_ID = $_SESSION['Acc_ID'];
                            $patientName = $_SESSION['Name'];

                            $to_print = '<!-- Dropdown for Login -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-circle"></i> ' .$Username. '</a>
                                <ul class="dropdown-menu bg-light" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="account.php">Settings</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="../admin_dashboard/admin_login.php">Booking History</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="../PHP/logout.php"><i class="bi bi-box-arrow-in-left"></i> Logout</a></li>
                                </ul>
                            </li>
                            <!-- END -->';
                            echo $to_print;
                        }
                    ?>
                    <!-- END -->
                </ul>
            </div>
        </div>
    </nav>
</header>