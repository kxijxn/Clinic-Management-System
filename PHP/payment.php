<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointments | Valley Clinic</title>
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../CSS/payment.css">
    <link href="https://fonts.googleapis.com/css2?family=Sora&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php
        include("header.php");
    ?>
    <div class="container-fluid bg-info mb-4">&nbsp;</div>
    <main>
        <div class="container-fluid p-0">
            <div class="heading-wrap">
                <div class="booking-heading">
                    <h2 class="fw-bolder">Bookings & Appoinments</h2>
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="text-center my-4">
                <h3 class="fw-bold">Confirm Appointment Details</h3>
            </div>
            <div class="col-8 w-100 border p-3">
                <div class="d-flex hstack gap-0 justify-content-center">
                    <div class="pb-2 fs-5"><i class="bi bi-clipboard-check-fill"></i></div>
                    <div><h5 class="fw-bold">Appointment Details</h5></div>
                </div>
                <div>
                    <form action="#" method="POST" id="complete_form">
                        <div class="hstack gap-3 mb-3 d-flex justify-content-evenly">
                            <div class="col-lg-6">
                                <label for="name" class="form-label">Full Name:</label>
                                <input class="form-control" type="text" name="cus_name" id="input-name" placeholder="John Doe" disabled>
                            </div>
                            <div class="col-lg-6 pe-lg-3">
                                <label for="contact_number" class="form-label">Contact Number:</label>
                                <input class="form-control" type="tel" name="cus_tel" id="input-tel" placeholder="000-000-0000" disabled>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="doctor_available">Doctor Available:</label>
                            <select name="doctor" id="doctor" class="form-select" disabled>
                                <option selected>Select a Doctor</option>
                                <option value="1">Doc1</option>
                                <option value="2">Doc2</option>
                                <option value="3">Doc3</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="date_appointment">Pick an appointment date:</label>
                            <input type="date" class="form-control" disabled>
                        </div>
                        <div>
                            <label for="time_slot" class="form-label">Available Time Slots:</label><br>
                           <button type="button" class="btn btn-success">Your Slot</button>
                        </div>
                        <div class="mt-3 d-flex justify-content-end">
                            <button type="button" onclick="history.back()" class=" me-2 btn btn-secondary">Back</button>
                            <button type="button" class="btn btn-secondary">Next</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container my-4">
            <div class="col-12 border d-flex flex-column justify-content-center p-3">
                <div class="d-flex hstack gap-0 justify-content-center">
                    <div class="fs-3 me-1"><i class="bi bi-cash-coin"></i></div>
                    <div><h5 class="fw-bold">Cash Payment</h5></div>
                </div>
                <div class="col-md-5 mx-auto">
                    <label for="total_amount" class="form-label">Total Amount Due:</label>
                    <input type="text" disabled class="form-control" value="OWE AMOUNT">
                </div>
                <div class="col-md-10 mt-3 mx-auto">
                    <p class="lead fs-6" style="text-align: justify;">
                        An invoice will be sent via email. Please proceed to receptionist counter on the day of appointment to validate appointment booking with payment.
                    </p>
                </div>
                <div class="mx-auto">
                    <button type="button" class="btn btn-primary"> Proceed to Checkout</button>
                </div>
            </div>
        </div>
        <div class="container my-4">
            <div class="col-12 border d-flex flex-column justify-content-center p-3">
                <div class="d-flex hstack gap-0 justify-content-center">
                    <div class="pb-2 fs-3 me-1"><i class="bi bi-credit-card"></i></div>
                    <div><h5 class="fw-bold">Credit Card</h5></div>
                </div>
                <div class="row d-flex justify-content-center text-center mb-3">
                    <div class="col-sm-2 col-md-1 credit-card-container"><img id="visa-img" src="../Images/visa.png" alt="VISA Card" class="img-fluid"></div>
                    <div class="col-sm-2 col-md-1 credit-card-container"><img src="../Images/master-card.png" alt="Master Card" class="img-fluid"></div>
                    <div class="col-sm-2 col-md-1 credit-card-container"><img src="../Images/american-express.png" alt="American Express Card" class="img-fluid"></div>
                </div>
                <div class="col-md-6 mx-auto mb-3 col-sm-10">
                    <form action="#" method="POST" id="credit_card_payment">
                        <div>
                            <label for="Credit-card-number" class="form-label">Credit Card Number:</label>
                            <input type="text" maxlength="16" class="form-control" name="cc_number" required>
                        </div>
                        <div>
                            <label for="Credit-card-name" class="form-label">Name on Card:</label>
                            <input type="text" class="form-control" name="cc_name" required>
                        </div>
                        <div class="hstack gap-3">
                            <div>
                                <label for="Credit-card-expiry-date" class="form-label">Expiry date:</label>
                                <input type="date" class="form-control" name="expiry-date" required>
                            </div>
                            <div>
                                <label for="Credit-card-security-code" class="form-label">Security Code:</label>:
                                <input type="text" class="form-control" maxlength="3" required>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="mx-auto">
                    <button type="button" class="btn btn-primary"> Proceed to Checkout</button>
                </div>
            </div>
        </div>
    </main>
</body>
</html>