<?php
    include("session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment | Valley Clinic</title>
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../CSS/payment.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Sora&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php
        include("header.php");
        include("conn.php");

        $doctor = $_POST['doctor'];
        $fetchDoctorq ="SELECT Name from tbl_doctor WHERE DocID ='$doctor'";

        $fetchList = mysqli_query($con, $fetchDoctorq);
        while ($name = mysqli_fetch_array($fetchList)) {
            $doctor_name = $name['Name'];
        }
        mysqli_close($con);
        ?>
    <main>
        <div class="container-fluid p-0">
            <div class="heading-wrap">
                <div class="booking-heading">
                    <h2 class="fw-bolder fs-3 text-success">Payment Gateway</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-md-8 bg-light p-3 mx-auto mt-2 text-center border rounded">
                <h3 class="fs-5 fw-bold text-info">Booking Details / Invoice</h3>
            </div>    
        </div>
        
        <div class="container m-3 mx-auto">
            <div class="row gap-2">
                <div class="col-md-7 border p-3">
                    <div class="d-flex justify-content-between hstack border-bottom border-secondary">
                        <div class="col-md pb-2">
                            <p class="m-0 fw-bolder fs-4"><?php echo $_POST['cus_name'];?></p><br> 
                            <p class="fst-italic">Date Issued: <span class="fw-normal"><?php echo date("m-d-Y");?></span></p>
                            <p class="fst-italic">Total Charged: <span class="fw-bolder">RM 50</span></p>
                        </div>
                        <div class="col-md-6">
                            <img class="img-fluid" src="../Images/logo.jpg" alt="ValleyClinicLogo">
                        </div>
                    </div>
                    <div class="border-bottom border-secondary pb-1 mt-2">
                        <ul class="list-unstyled">
                            <li>Appointment Details;</li>
                            <ul>
                                <li class="fst-italic">Appointment Doctor: <?php echo $doctor_name;?></li>
                                <li class="fst-italic">Appointment Date: <?php echo $_POST['appt_date'];?></li>
                                <li class="fst-italic">Appointed Time: <?php echo $_POST['newSlot'];?></li>
                            </ul>
                        </ul>
                    </div>
                    <div class="mb-5">
                        <i style="font-size: 0.75rem">*Terms and Conditions applied.</i><br>
                        <i style="font-size: 0.75rem">For further inquiries please contact our customer service.</i><br>
                    </div>
                    <div class="d-flex align-items-end justify-content-end gap-2">
                        <form action="confirm_payment.php" method="POST">
                            <input type="hidden" name="cus_name" value="<?php echo $_POST['cus_name']?>">
                            <input type="hidden" name="cus_tel"value="<?php echo $_POST['cus_tel']?>">
                            <input type="hidden" name="doctor" value="<?php echo $_POST['doctor']?>">
                            <input type="hidden" name="newSlot" value="<?php echo $_POST['newSlot']?>">
                            <input type="hidden" name="appt_date" value="<?php echo $_POST['appt_date']?>">
                            <input type="hidden" name="appStatus" value="ongoing">
                            <input type="hidden" name="paymentTotal" value="50.00">
                            <input type="hidden" name="paymentStatus" value="Not Paid">
                            <input type="hidden" name="paymentMethod" value="Not Paid">
                            <button type="submit" class="btn btn-primary">Pay Later</button>
                        </form>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Pay now!</button>
                    </div>
                    <div>
                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Payment Method</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                What would you like to pay with?<br>
                                (Ex; Cash or Credit Card)
                            </div>
                            <div class="modal-footer">
                                <a id="link_cc" data-bs-dismiss="modal" data-bs-toggle="modal" class="btn btn-primary" onclick="scrollToCC()" role="button">Credit Card</a>
                                <a id="link_cash" data-bs-dismiss="modal" data-bs-toggle="modal" class="btn btn-primary" onclick="scrollToCash()" role="button">Cash</a>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="vstack gap-3">
                        <div class="col-md p-3 mx-sm-auto" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
                            <h4 class="fs-5">Make Payment Now!</h4>
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item">Check your information</li>
                                <li class="list-group-item">Select your desire payment method</li>
                                <li class="list-group-item">Fill in your information as labelled</li>
                                <li class="list-group-item">Don't want to pay now? No problem, walk in and pay us once you're done with your treatment</li>
                            </ol>
                        </div>
                        <div class="col-md mx-sm-auto p-3" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
                            <h4 class="fs-5">When making a payment/booking...</h4>
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item">Please take a screenshot of the following Invoice as evidence.</li>
                                <li class="list-group-item">You may make prior payment for consultation cost, if not you may pay later as well.</li>
                                <li class="list-group-item">Keep in mind, consultation period might not be accurate due to numerous reasons</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container m-3 mx-auto invisible" id="invisTab">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="cash-tab" data-bs-toggle="tab" data-bs-target="#cash" type="button" role="tab" aria-controls="cash" aria-selected="true">Cash</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="credit_card-tab" data-bs-toggle="tab" data-bs-target="#credit_card" type="button" role="tab" aria-controls="credit_card" aria-selected="false">Credit Card</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="cash" role="tabpanel" aria-labelledby="cash-tab">
                        <div class="container">
                            <div class="m-2 bg-light d-flex hstack gap-0 justify-content-center" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
                                <div class="pb-2 fs-4"><i class="bi bi-cash"></i></div>
                                <div><h5 class="fw-bold">Cash Payment</h5></div>
                            </div>
                            <div class="col-md-8 p-3 mx-auto bg-light" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
                                <form action="confirm_payment.php" id="payment_cash" method="POST">
                                    <label for="TotalAmountDue" class="form-label">Total Amount Due:</label>
                                    <input type="number" class="form-control text-end" value="50.00" name="total_amount" disabled>
                                    <p class="mt-2 fst-italic" style="font-size: 0.875rem;">An invoice will be sent via email.<br>Please proceed to receptionist counter on the day of appointment to validate appointment booking with payment.</p>
                                    <div class="d-flex justify-content-center">
                                        <input type="hidden" name="cus_name" value="<?php echo $_POST['cus_name']?>">
                                        <input type="hidden" name="cus_tel"value="<?php echo $_POST['cus_tel']?>">
                                        <input type="hidden" name="doctor" value="<?php echo $_POST['doctor']?>">
                                        <input type="hidden" name="newSlot" value="<?php echo $_POST['newSlot']?>">
                                        <input type="hidden" name="appt_date" value="<?php echo $_POST['appt_date']?>">
                                        <input type="hidden" name="appStatus" value="ongoing">
                                        <input type="hidden" name="paymentTotal" value="50.00">
                                        <input type="hidden" name="paymentMethod" value="cash">
                                        <input type="hidden" name="paymentStatus" value="Not Paid">
                                        <button class="btn btn-primary" type="submit">Proceed to Checkout</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="credit_card" role="tabpanel" aria-labelledby="credit_card-tab">
                    <div class="container">
                            <div class="col-md-8 mx-auto m-2 bg-light d-flex hstack gap-0 justify-content-center" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
                                <div class="pb-2 fs-4"><i class="bi bi-cash"></i></div>
                                <div><h5 class="fw-bold">Credit Card</h5></div>
                            </div>
                            <div class="col-md-8 p-3 mx-auto bg-light" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
                                <form action="confirm_payment.php" id="payment_creditcard" method="POST">
                                    <div class="img-container col-md-4 mx-auto d-flex justify-content-evenly gap-3 mb-3">
                                        <img src="../Images/master-card.png" alt="MasterCardLogo">
                                        <img src="../Images/visa.png" alt="VisaLogo">
                                        <img src="../Images/american-express.png" alt="AmericanExpressLogo">
                                    </div>
                                    <div class="mb-2">
                                        <label for="CardNumber" class="form-label">Card Number:</label>
                                        <input type="number" min="999999999999999" max="9999999999999999" class="form-control" id="CardNumber" name="CardNumber" required>
                                    </div>
                                    <div class="mb-2">
                                        <label for="CardName" class="form-label">Card Name:</label>
                                        <input type="text" class="form-control" id="CardName" name="CardName" required>
                                    </div>
                                    <div class="hstack gap-2 mb-3 d-flex justify-content-center">
                                        <div class="col-md">
                                            <label for="ExpiryDate" class="form-label">Expiry Date:</label>
                                            <input type="date" min="<?php echo date("Y-m-d");?>" class="form-control" id="expiryDate" name="expiryDate" required>
                                        </div>
                                        <div class="col-md">
                                            <label for="SecurityCode" class="form-label">Security Code:</label>
                                            <input type="number" min="100" max="999" class="form-control" id="cvv" name="cvv" required>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <input type="hidden" name="cus_name" value="<?php echo $_POST['cus_name']?>">
                                        <input type="hidden" name="cus_tel"value="<?php echo $_POST['cus_tel']?>">
                                        <input type="hidden" name="doctor" value="<?php echo $_POST['doctor']?>">
                                        <input type="hidden" name="newSlot" value="<?php echo $_POST['newSlot']?>">
                                        <input type="hidden" name="appt_date" value="<?php echo $_POST['appt_date']?>">
                                        <input type="hidden" name="appStatus" value="ongoing">
                                        <input type="hidden" name="paymentTotal" value="50.00">
                                        <input type="hidden" name="paymentMethod" value="CreditCard">
                                        <input type="hidden" name="paymentStatus" value="Paid">
                                        <button class="btn btn-primary" type="submit">Proceed to Checkout</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
        include("footer.php");
    ?>
    <script src="../JS/payment.js"></script>
    <script src="../Bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>