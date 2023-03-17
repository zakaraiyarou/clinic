
<?php
  include ('../conn/connection.php');
 ?>
 <?php session_start();   ?>
 
 <?php include('../partials/head.php'); ?>
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.css">


  <!-- ======= Header ======= -->
  <title>Clone | Supplies Request</title>
  <?php include('../partials/header.php'); ?>

  <!-- End Header -->

  <!-- ======= Sidebar ======= -->

  <?php include('../partials/sidebar.php'); ?>

  <script>
  var x = document.getElementById('rec')
  x.className = "active";
  var y = document.getElementById('apr')
  y.className = "nav-link ";
  var h = document.getElementById('apr-nav')
  h.className = "nav-content collapse show";
  </script>
  <!-- End Sidebar-->

  <main id="main" class="main" >
  <div class="pagetitle">
    <h1>Assets Request</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item">Assets Request</li>
        <li class="breadcrumb-item active">Receiving</li>
      </ol>
    </nav>
    </div><!-- End Page Title -->

    <section class="section">
    <div class="card">
    <div class="card-body">
    <div class="d-flex justify-content-between align-items-center">
    <h5 class="card-title">Receiving</h5>
    </div>
    <div class="card-body asset-list overflow-auto">
    <table id="myTable" class="table table-borderless table-hover table-responsive" style="border-bottom: none;">
        <thead>
            <tr class="align=middle text-center">
              <th scope="col" style="border-bottom: none;">Request ID</th>
              <th scope="col" style="border-bottom: none;">Product Name</th>
              <th scope="col" style="border-bottom: none;">Product Category</th>
              <th scope="col" style="border-bottom: none;">Product Brand</th>
              <th scope="col" style="border-bottom: none;">Quantity</th>
              <th scope="col" style="border-bottom: none;">Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php  
        $stmt = $conn->prepare("SELECT * FROM prodian_apr_pen ORDER BY id");
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          $id = preg_replace('/[^a-zA-Z0-9]/', '', $row['id']);
        ?>
        <tr class="text-secondary" style="text-align: center; vertical-align: middle;">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>
        <button class="btn btn-light border shadow-sm" onclick="approveConfirmation('<?php echo $id;?>')" style="color: #256D85;">
          <i class="bi bi-check-circle"></i> Procured
        </button>
        </td>

        </tr>
        <?php } ?>
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