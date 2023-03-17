<?php
include('connection.php');
$username = $_POST['user'];
$password = $_POST['pass'];

//to prevent from mysqli injection  
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);

$sql = "SELECT * FROM login_user WHERE username = '$username' and password = '$password'";

$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$count = mysqli_num_rows($result);

if ($count == 1) {
    if ($row['user_id'] == '1') {
        header("location:../subsystem_folder/dashboard.php");
        exit();
    }
} else {
    // Invalid username or password, show error message
    echo "invalid password";
    // header("location:../assets/error/auth.html");
    // exit();
}
mysqli_close($con);
