
<?php
session_start();
require_once('../../database/connection.php');

if(isset($_POST['submit']))
{
    $request = $_REQUEST;

    $studentNumber = $request['studentNumber'];
    $bloodPressure = $request['bloodPressure'];
    $heartRate = $request['heartRate'];
    $temperature = $request['temperature'];
    $reason = $request['reason'];
    $prescriptionAdvice = $request['prescription_advice'];

    //Check if inputs are empty
    if (empty($studentNumber) && empty($bloodPressure) || empty($heartRate) || empty($temperature)|| empty($reason)  || empty($prescriptionAdvice)) {
        $_SESSION['status'] = "Fill in all fields!";
        $_SESSION['status_code'] = "warning";
        header("Location: ../../subsystem_folder/patient/index.php");
        // header("Location: ../patient-registration/register.php?registration=emptyfields"."&fname=".$fname."&mname=".$mname."&lname=".$lname."&age=".$age."&email=".$email."&contact=".$contact_no);
        exit();
    }

    //Check if inputs are empty
    if ($studentNumber && $bloodPressure && $heartRate && $temperature && $reason && $prescriptionAdvice) {
         //Beginning the transaction
         mysqli_begin_transaction($con);
 
         //Creating a table
         $sql2 = "INSERT INTO patient_monitoring (student_id, blood_pressure, heart_rate, temperature, reason, prescription_advice) VALUES ('$studentNumber','$bloodPressure','$heartRate','$temperature','$reason','$prescriptionAdvice') ";
         
         mysqli_query($con, $sql2);
 
         //Committing the transaction
         mysqli_commit($con);
 
         //Closing the connection
         mysqli_close($con);

        $_SESSION['status'] = "Monitoring created!";
        $_SESSION['status_code'] = "success";
        header("Location: ../../subsystem_folder/patient/index.php");
        exit();
    }
}