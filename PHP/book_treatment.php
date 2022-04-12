<?php
    include("session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointments | Valley Clinic</title>
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../CSS/book_treatment.css">
    <link href="https://fonts.googleapis.com/css2?family=Sora&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php
        include("header.php");
    ?>
    <main>
        <div class="container-fluid p-0">
            <div class="heading-wrap">
                <div class="booking-heading">
                    <h2 class="fw-bolder">Bookings & Appoinments</h2>
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="container overflow-hidden">
                <div class="row g-2">
                    <div class="col-md-7 order-2 order-lg-1 .vstack gap-3">
                        <div class="p-3 border bg-light">
                            <div class="d-flex hstack gap-0 justify-content-center">
                            <div class="pb-2 fs-5"><i class="bi bi-clipboard-fill"></i></div>
                            <div><h5 class="fw-bold">Appointment Form</h5></div>
                       </div>
                       <div>
                           <form action="confirm_wth_payment.php" method="POST" id="form1">
                                <fieldset class="fieldset">
                                    <div class="hstack gap-3 mb-3">
                                        <div>
                                            <label for="name" class="form-label">Full Name:</label>
                                            <input class="form-control fullName" type="text" name="cus_name" id="input-name" placeholder="John Doe" value="<?php echo $patientName?>" required>
                                        </div>
                                        <div>
                                            <label for="contact_number" class="form-label">Contact Number:</label>
                                            <input class="form-control contactNum" type="tel" name="cus_tel" id="input-tel" placeholder="000-000-0000" required>
                                        </div>
                                    </div>
                                        <div class="mb-3">
                                            <label for="doctor_available">Doctor Available:</label>
                                            <select name="doctor" id="doctor" class="form-select doctorTreatment" required>
                                                <option>Select a Doctor</option>
                                                <?php include("conn.php");
                                                    //Get list of doctors available
                                                    $doctorList = mysqli_query($con, "SELECT * FROM tbl_doctor;");

                                                    while ($doctorResult = mysqli_fetch_array($doctorList)) {
                                                        $doctor_available_list = '<option value="' .$doctorResult["DocID"]. '">' .$doctorResult["Name"]. '</option>';
                                                        echo $doctor_available_list;
                                                    }
                                                    //END
                                                ?>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="date_appointment">Pick an appointment date:</label>
                                            <?php 
                                                $todayDate = date("Y-m-d");
                                                $nextDay_timestamp = strtotime("+1 day");
                                                $nextDay = date("Y-m-d", $nextDay_timestamp);
                                                $minDate = date("Y-m-d", strtotime("+1 day"));
                                            ?>
                                            <input type="date" min="<?php echo $minDate;?>" class="form-control dateAppoint" name="appt_date" id="appt_date" required>
                                        </div>
                                        <div class="mt-3 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-secondary next-btn" id="flag-next">Next</button>
                                            <button type="submit" formaction="check_slots.php" class="btn btn-primary checkBtn" id="checkBtn" hidden></button>
                                        </div>
                                        <div id="sample"></div>
                                </fieldset>
                           <!-- </form> -->
                       </div>
                   </div>
                   <div class="mt-3 p-3 border bg-light control-hidden" hidden>
                        <!-- Sort -->
                        <label for="time_slot" class="form-label">Available Time Slots:</label><br>
                        <div class="container booking_slots d-flex justify-content-evenly flex-wrap"></div>
                        <div>
                            <input type="hidden" name="arrayRepository" id="arrayRepository">
                            <input type="hidden" name="patient_slot" id="patient_chosen_slot">
                        </div>
                        <div class="mt-3 d-flex justify-content-end">
                            <button class="btn btn-primary submitBtn" type="submit">Submit</button>
                        </div>
                        </form>
                   </div>
                </div>  
                <div class="sidebar-1 col-md-5 vstack gap-3 order-1 order-lg-2">
                    <div class="p-3 border bg-light">
                        <h5 class="mb-0 fw-bold">Book an Appointment Now!</h5>
                        <i>*Some exclusion may be apply</i>
                    </div>
                    <div class="p-3 border bg-light">
                        <h5 class="fw-bold">How to book your appointment?</h5>
                        <ol class="list-group list-group-numbered">
                            <li class="list-group-item">Enter your Full Name</li>
                            <li class="list-group-item">Select the desired doctor you wish to consult</li>
                            <li class="list-group-item">Choose a consultation period that suites your personal schedule if available</li></li>
                            <li class="list-group-item">Book Now!</li>
                        </ol>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </main>
    <?php
        include("footer.php");
    ?>
    <script src="../JS/bookings.js"></script>
    <script src="../Bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>