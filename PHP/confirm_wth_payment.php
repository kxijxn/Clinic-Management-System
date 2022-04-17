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
        include("header_no_session.php");
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
            <div class="col-md-8 mx-auto p-3 border bg-light">
                <h2 class="fs-4 fw-bolder text-center">Confirm Appointment Details</h2>
            </div>
            <div class="p-3 border bg-light col-md-8 mx-auto mt-2">
                <div class="d-flex hstack gap-0 justify-content-center">
                    <div class="pb-2 fs-5"><i class="bi bi-clipboard-fill"></i></div>
                    <div><h5 class="fw-bold">Your Appointment</h5></div>
                </div>
                <div>
                    <form action="patient_payment.php" method="POST" id="final_submit">
                        <div class="hstack gap-3 mb-3">
                            <div>
                                <label for="name" class="form-label">Full Name:</label>
                                <input class="form-control fullName" type="text" name="cus_name" id="input-name" placeholder="John Doe" value="<?php echo $_POST['cus_name']?>" required>
                            </div>
                            <div>
                                <label for="contact_number" class="form-label">Contact Number:</label>
                                <input class="form-control contactNum" type="tel" name="cus_tel" id="input-tel" placeholder="000-000-0000" value="<?php echo $_POST['cus_tel']?>" required>
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
                                            if ($doctorResult["DocID"] == $_POST["doctor"]){
                                                $doctor_available_list = '<option value="' .$doctorResult["DocID"]. '" selected="selected">' .$doctorResult["Name"]. '</option>';
                                            }else {
                                                $doctor_available_list = '<option value="' .$doctorResult["DocID"]. '">' .$doctorResult["Name"]. '</option>';
                                            }
                                            echo $doctor_available_list;
                                        }
                                        //END
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="date_appointment">Pick an appointment date:</label>
                                <input type="date" class="form-control dateAppoint" value="<?php echo $_POST['appt_date']?>" name="appt_date" id="appt_date" required disabled>
                                <input type="hidden" value="<?php echo $_POST['appt_date'];?>" id="chosenDate">
                            </div>
                            <div>
                                <label for="time_slot" class="form-label">Available Time Slots:</label><br>
                                <input id="chosen_slot" type="hidden" value="<?php echo $_POST['patient_slot']?>">
                                <input type="hidden" id="newSlot" name="newSlot">
                                <div class="container booking_slots d-flex justify-content-evenly flex-wrap" id="booking_slots"></div>
                                <div class="mt-3 d-flex justify-content-end gap-2   ">
                                    <button type="button" id="disAtt" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Confirm Booking</button>
                                </div>
                            </div>
                            <div>
                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Confirm Appintment</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to book a slot on <span id="newDate"></span>, <?php echo $_POST['patient_slot']?>.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Confirm</button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php
        include("footer.php");
    ?>
    <script src="../JS/confirm_booking.js"></script>
    <script src="../Bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>