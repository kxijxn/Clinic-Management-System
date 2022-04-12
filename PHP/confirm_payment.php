
<?php
    include('session.php');
    include('conn.php');

    if(isset($_POST['newSlot'])) {
        $newSlot = str_replace(".", ":", $_POST['newSlot']);
        $newSlot .= ":00";
    }
    echo $newSlot, $Acc_ID, $_POST["doctor"], $_POST["appt_date"], $_POST["appStatus"];

    $sqlInsertAppt = "INSERT INTO tbl_appointment (Acc_ID, DocID, App_date, App_slot, App_status) values
    ('$Acc_ID', '$_POST[doctor]', '$_POST[appt_date]', '$newSlot', '$_POST[appStatus]');";

    if (!mysqli_query($con, $sqlInsertAppt)){
        echo "APPT error";
        die('Error: ' . mysqli_error($con));
    } else {
        $resultNewAppt = mysqli_query($con, "SELECT * FROM tbl_appointment WHERE (Acc_ID ='$Acc_ID') AND (App_date = '$_POST[appt_date]') AND (App_slot = '$newSlot')");
        while ($row = mysqli_fetch_array($resultNewAppt)) {
            $AppID = $row['AppID'];
        }
    }

    $paymentDate = date("Y-m-d");
    echo $Acc_ID, $AppID, $_POST["paymentTotal"], $_POST["paymentMethod"], $paymentDate, $_POST["paymentStatus"];

    $sqlInsertPayment = "INSERT INTO tbl_payment (Acc_ID, AppID, Payment_total, Payment_method, Payment_date, Payment_status) values 
    ('$Acc_ID', '$AppID', '$_POST[paymentTotal]', '$_POST[paymentMethod]', '$paymentDate', '$_POST[paymentStatus]');";
    if (!mysqli_query($con, $sqlInsertPayment)){
        echo "Payment error";
        die('Error: ' . mysqli_error($con));
    } else {
        echo '<script>alert("Your Bookings have been added!");
		window.location.href= "book_treatment.php";
		</script>';
    }

    mysqli_close($con);
?>