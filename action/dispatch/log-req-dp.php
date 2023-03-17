<?php
include('../../conn/connection.php');

$id = $_GET['id'];

// Remove any non-alphanumeric characters from the ID
$id = preg_replace('/[^a-zA-Z0-9]/', '', $id);

$stmt1 = $conn->prepare('INSERT INTO log_req_dp SELECT * FROM log_req_pr WHERE id=?');
$stmt2 = $conn->prepare('DELETE FROM log_req_pr WHERE id=?');

if ($stmt1->execute([$id]) && $stmt2->execute([$id])) {
    session_start();
    $_SESSION['dispatch'] = 1;
    header('Location: ../../ss/log-process.php');
} else {
    header('Location: ../../ss/log-process.php');
}
?>
