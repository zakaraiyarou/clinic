<?php

session_start();
require_once('../database/connection.php');

// if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
//     $ip = $_SERVER['HTTP_CLIENT_IP'];
// } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
//     $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
// } else {
//     $ip = $_SERVER['REMOTE_ADDR'];
// }

// echo $ip;

if(isset($_POST['appoint_submit']))
{
    $request = $_REQUEST;

    $student_number = $request['student_number'];
    $name = $request['name'];
    $contact_no = $request['contact_no'];
    $section_department = $request['section_department'];
    $appointment_date = $request['appointment_date'];

 
    try
        {
            //Beginning the transaction
            mysqli_begin_transaction($con);
    
            //Creating a table
            $query = "INSERT INTO appointment_table (student_number, name, contact_no, section_department, appointment_date) VALUES ('$student_number', '$name', '$contact_no','$section_department', '$appointment_date')";

            mysqli_query($con, $query);
    
            //Committing the transaction
            mysqli_commit($con);
    
            //Closing the connection
            mysqli_close($con);
            
                
    $_SESSION['status'] = "Appoinment Requested!";
    $_SESSION['status_code'] = "success";
    header("Location: ../appointment.php");
    exit();
        } catch(Exception $e)
        {
            $_SESSION['status'] = $e->getMessage();
            $_SESSION['status_code'] = "error";
            header("Location: ../appointment.php");
            exit();
        }


}

