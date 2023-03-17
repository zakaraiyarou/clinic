<?php
include('../../conn/connection.php');

$id = $_GET['id'];

// Remove any non-alphanumeric characters from the ID
$id = preg_replace('/[^a-zA-Z0-9]/', '', $id);

$stmt1 = $conn->prepare('INSERT INTO log_req_pr (id, dept, fname, email, position, phone, purpose, a_name, type, a_qty, brand, a_hg, a_wd, a_dp, a_color, a_design, date, shipping) 
                         SELECT id, dept, fname, email, position, phone, purpose, a_name, type, a_qty, brand, a_hg, a_wd, a_dp, a_color, a_design, date, shipping FROM log_req_oth WHERE id=?');

$stmt2 = $conn->prepare('DELETE FROM log_req_oth WHERE id=?');

if ($stmt1->execute([$id]) && $stmt2->execute([$id])) {
    session_start();
    $_SESSION['approved'] = 1;
    header('Location: ../../ss/log-req.php');
} else {
    header('Location: ../../ss/log-req.php');
}
?>
