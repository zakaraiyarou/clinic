
<?php
  session_start();

  require_once '../database/connection.php';
?>

<!DOCTYPE html>
<html lang="en">
  
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../assets/img/favicon.png" rel="icon">
  <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../assets/vendor/fonta-6/css/all.css" rel="stylesheet">
  <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.css">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <!-- HTML !-->

</head>


  <main id="main" class="main" >
  <div class="pagetitle">
    <h1>Assets Request</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item">Assets Request</li>
        <li class="breadcrumb-item active">Processing</li>
      </ol>
    </nav>
    </div><!-- End Page Title -->

    <section class="section">
    <div class="card">
    <div class="card-body">
    <div class="d-flex justify-content-between align-items-center">
    <h5 class="card-title">Processing</h5>
    </div>
    <div class="card-body asset-list overflow-auto">
    <table id="myTable" class="table table-borderless table-hover table-responsive" style="border-bottom: none;">
        <thead>
            <tr class="align=middle text-center">
                <th scope="col" style="border-bottom: none;">Request ID</th>
                <th scope="col" style="border-bottom: none;">Requester Name</th>
                <th scope="col" style="border-bottom: none;">Position</th>
                <th scope="col" style="border-bottom: none;">Department</th>
                <th scope="col" style="border-bottom: none;">Request Assets</th>
                <th scope="col" style="border-bottom: none;">Quantity</th>
                <th scope="col" style="border-bottom: none;">Request Status</th>
            </tr>
        </thead>
        <tbody>
        <?php
        if (isset($_SESSION['delete']) && $_SESSION['delete'] == 1) {
        echo '
        <script>
            Swal.fire({
            title: "Deleted!",
            text: "Successfully Delete",
            icon: "success",
            confirmButtonText: "OK"
            });
        </script>
        ';
        unset($_SESSION['delete']);
        }
        ?>
        <?php  
        $tables = ['prodian_apr_pen', 'prodian_apr_wait', 'prodian_apr_app', 'prodian_apr_rel' ];

        foreach($tables as $table) {
            $stmt = $conn->prepare("SELECT * FROM $table ORDER BY id");
            $stmt->execute();

            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
              $id = preg_replace('/[^a-zA-Z0-9]/', '', $row['id']);
        ?>
        <tr class="text-secondary" style="text-align: center; vertical-align: middle;">
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['fname'];?> <?php echo $row['lname'];?></td>
        <td><?php echo $row['position'];?></td>
        <td><?php echo $row['dept'];?></td>
        <td><?php echo $row['a_name'];?></td>
        <td><?php echo $row['a_qty'];?></td>
        <td>
            <?php 
            if ($table == 'prodian_apr_pen') {
                // show pending badge
                echo '<span style="font-size: .70em; padding: 0.75em 1.25em; width:100px;" class="badge bg-warning text-dark">Pending</span>';
            } else if ($table == 'prodian_apr_app') {
                // show approved badge
                echo '<span style="font-size: .70em; padding: 0.75em 1.25em; width:100px;" class="badge bg-success text-light">Approved</span>';
            } else if ($table == 'prodian_apr_wait') {
                // show declined badge
                echo '<span style="font-size: .70em; padding: 0.75em 1.25em; width:100px;" class="badge bg-info text-dark">Waiting</span>';
            } else if ($table == 'prodian_apr_rel') {
                // show declined badge
                echo '<span style="font-size: .70em; padding: 0.75em 1.25em; width:100px;" class="badge bg-success text-light">Releasing</span>';
            }
            ?>
        </td>

        </tr>
        <?php }}?>
    </tbody>
    </table>
    </div>
    </div>
    </div>    
    </section>
    </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include ('../partials/footer.php'); ?>
  <!-- End Footer -->
</html>