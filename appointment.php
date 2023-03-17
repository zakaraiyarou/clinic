<?php
session_start();

require_once 'database/connection.php';
?>

<!DOCTYPE html>
<html lang="en" class="h-100">
  
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fonta-6/css/all.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <!-- HTML !-->
  <title>Appointment</title>

</head>
<body class="h-100">
<main class="d-flex align-items-center justify-content-center h-100">
   <div class="card">
    <div class="card-header">
        Online Appointment
    </div>
    <div class="card-body">
        <form action="includes/appointment.inc.php" method="POST">
        <div class="row mb-3">
            <p class="col-md-5">Student Number:</p>
            <div class="col">
                <input type="text" class="form-control" name="student_number">
            </div>
        </div>
        <div class="row mb-3">
            <p class="col-md-5">Your name:</p>
            <div class="col">
                <input type="text" class="form-control" name="name">
            </div>
        </div>
        <div class="row mb-3">
            <p class="col-md-5">Contact No:</p>
            <div class="col">
                <input type="text" class="form-control" name="contact_no">
            </div>
        </div>
        <div class="row mb-3">
            <p class="col-md-5">Section / Department:</p>
            <div class="col">
                <input type="text" class="form-control" name="section_department">
            </div>
        </div>
        <div class="row mb-3">
            <p class="col-md-5">Appointment Date:</p>
            <div class="col">
                <input type="date" class="form-control" name="appointment_date">
            </div>
        </div>

        <button type="submit" class="btn btn-primary" name="appoint_submit">Request</button>
        </form>
    </div>
   </div>
</main>


<!-- Vendor JS Files -->
<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/chart.js/chart.min.js"></script>
<script src="assets/vendor/echarts/echarts.min.js"></script>
<script src="assets/vendor/quill/quill.min.js"></script>
<script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/vendor/tinymce/tinymce.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- DATA TABLES -->
<script src="assets/vendor/dataTables/jquery-3.5.1.js"></script>
<script src="assets/vendor/dataTables/jquery.dataTables.min.js"></script>
<script src="assets/vendor/dataTables/dataTables.bootstrap5.min.js"></script>

  <!-- DATA TABLES -->
  <script src="assets/js/clinic.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script src="assets/js/apexchart.js"></script>

<!-- Sweet Alert -->
<script src="assets/js/sweetalert.min.js"></script>

<!-- SWEET ALERT -->
<?php
    if(isset($_SESSION['status']) && $_SESSION['status'] !='' )
    {
      ?>
      <script>swal({
        title: "<?php echo $_SESSION['status'];?>",
        // text: "Patient registered successfully!",
        icon: "<?php echo $_SESSION['status_code']; ?>",
        button: "Done",
      });</script>
    <?php
      unset($_SESSION['status']);
    }
  ?>


</body>
</html>