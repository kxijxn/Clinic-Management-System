<?php
    include ("conn.php");

    if(isset($_POST['appt_date'])) {
        $chosen_date = $_POST['appt_date'];
        // echo $chosen_date;
    }

    $patient_records = mysqli_query($con, "SELECT * FROM tbl_appointment;");
    $slotAvailable = true;
    $takenSlots = array();
    while ($row = mysqli_fetch_array($patient_records)) {
        if ($row['App_date'] == $chosen_date) {
            array_push($takenSlots, $row['App_slot']);
        }
    }
    echo json_encode($takenSlots);
?>