
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
  var x = document.getElementById('pro')
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
        <li class="breadcrumb-item active">Procured</li>
      </ol>
    </nav>
    </div><!-- End Page Title -->

    <section class="section">
    <div class="card">
    <div class="card-body">
    <div class="d-flex justify-content-between align-items-center">
    <h5 class="card-title">Assets list</h5>
    </div>
    <div class="card-body asset-list overflow-auto">
    <table id="myTable" class="table table-borderless table-hover table-responsive" style="border-bottom: none;">
        <thead>
            <tr class="align=middle text-center">
                <th scope="col" style="border-bottom: none;">Product ID</th>
                <th scope="col" style="border-bottom: none;">Product Name</th>
                <th scope="col" style="border-bottom: none;">Product Category</th>
                <th scope="col" style="border-bottom: none;">Product Brand</th>
                <th scope="col" style="border-bottom: none;">Date of Used</th>
                <th scope="col" style="border-bottom: none;">Action</th>
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
        $stmt = $conn->prepare("SELECT * FROM ss_inv ORDER BY id");
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          $id = preg_replace('/[^a-zA-Z0-9]/', '', $row['id']);
        ?>
        <tr class="text-secondary" style="text-align: center; vertical-align: middle;">
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['p_name'];?></td>
        <td><?php echo $row['type'];?></td>
        <td><?php echo $row['brand'];?></td>
        <td><?php echo $row['date'];?></td>
        <td>
        <button class="btn btn-light border shadow-sm" onclick="alert('Do you want to pull out this product?')" href="" title="Pull Out">
          <i class="bi bi-arrow-return-left" style="color:#256D85"></i>
        </button>
        <button class="btn btn-light border shadow-sm" onclick="alert('Do you want to request for repair?')" title="Repair">
          <i class="bi bi-tools" style="color:#256D85"></i>
        </button>
        </td>

        </tr>
        <?php }?>
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