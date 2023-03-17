
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
  var x = document.getElementById('oth')
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
        <li class="breadcrumb-item active">Other Request</li>
      </ol>
    </nav>
    </div><!-- End Page Title -->

    <section class="section">
    <div class="row">
    <div class="col-lg-12">
        <div style="border-radius: 10px;" class="card">
            <div class="card-body" style="margin-left: 10px; margin-right: 10px; margin-bottom: 10px;">
                <form class="row" method="post" action="../action/add/mis-req-add.php" style="margin-top: 15px;">
                    <div class="col-lg-6">
                        <div class="row">

                            <!-- Form -->
                            <div class="col-md-12 mb-1 d-flex">
                                <h5 class="card-title">Requestor Information</h5><span class="text-left fs-6 pb-3" style="font-weight: 700; margin-left: 18px; margin-top: 18px; color: #D0312D;">* Required</span>
                            </div>
                            <!-- End Form -->
                        
                            <!-- Form -->
                            <div class="col-md-12 mb-3">
                                <label for="department" class="form-label">Department Name : <span style="color: #D0312D !important; font-weight: 600 !important;">*</span></label>
                                <input type="text" class="form-control" name="dept" value="Management Information System" disabled>
                                <input type="hidden" name="department" value="Management Information System">
                            </div>
                            <!-- End Form -->

                            <!-- Form -->
                            <div class="col-md-12 mb-3">
                                <label for="firstNameLabel" class="form-label">Full name : <span style="color: #D0312D !important; font-weight: 600 !important;">*</span></label>
                                <div class="input-group input-group-sm-vertical">
                                    <input type="text" class="form-control" name="fname" placeholder="First Name" required>
                                    <input type="text" class="form-control" name="lname" placeholder="Last Name" required>
                                </div>
                            </div>
                            <!-- End Form -->

                            <!-- Form -->
                            <div class="col-md-7 mb-3">
                                <label for="emailLabel" class="form-label">Email : <span style="color: #D0312D !important; font-weight: 600 !important;">*</span></label>
                                <input type="email" class="form-control" name="email" placeholder="example@test.com" required>
                            </div>
                            <!-- End Form -->

                            <!-- Form -->
                            <div class="col-md-5 mb-3">
                                <label for="positionLabel" class="form-label">Position : <span style="color: #D0312D !important; font-weight: 600 !important;">*</span></label>
                                <input type="text" class="form-control" name="position" placeholder="e.g. Head" required>
                            </div>
                            <!-- End Form -->

                            <!-- Form -->
                            <div class="col-md-12 mb-3">
                                <label for="mnumberLabel" class="form-label">Mobile Number : <span style="color: #D0312D !important; font-weight: 600 !important;">*</span></label>
                                <input type="mnumber" class="form-control" name="mnumber" placeholder="e.g. 09xxxxxxxxx" required>
                            </div>
                            <!-- End Form -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">

                            <!-- Form -->
                            <div class="col-md-12 mb-1 d-flex">
                                <h5 class="card-title">Asset Request Information</h5><span class="text-left fs-6 pb-3" style="font-weight: 700; margin-left: 18px; margin-top: 18px; color: #D0312D;">* Required</span>
                            </div>
                            <!-- End Form -->

                            <!-- Form -->
                            <div class="col-md-6 mb-3">
                                <label for="assetLabel" class="form-label">Asset Name : <span style="color: #D0312D !important; font-weight: 600 !important;">*</span></label>
                                <input type="text" class="form-control" name="aname" placeholder="e.g. Printer" required>
                            </div>
                            <!-- End Form -->

                            <!-- Form -->
                            <div class="col-md-6 mb-3">
                            <label for="typeLabel" class="form-label">Asset Category : <span style="color: #D0312D !important; font-weight: 600 !important;">*</span></label>
                            <div class="form-group">
                                <select name="type" class="form-select">
                                <option>Choose...</option>
                                <option value="Stationery">Stationery</option>
                                <option value="Furniture">Furniture</option>
                                <option value="Office Equipments">Office Equipments</option>
                                <option value="Laboratory Equipments">Laboratory Equipments</option>
                                <option value="Maintenance Equipments">Maintenance Equipments</option>
                                <option value="First Aid Equipments">First Aid Equipments</option>
                                <option value="Clinic Equipments">Clinic Equipments</option>
                                <option value="Others">Others</option>
                                </select>
                            </div>
                            </div>
                            <!-- End Form -->

                            <!-- Form -->
                            <div class="col-md-6 mb-3">
                                <label for="departmentLabel" class="form-label">Asset Quantity : <span style="color: #D0312D !important; font-weight: 600 !important;">*</span></label>
                                <input type="number" min="1" name="qty" class="form-control" value="1" required>
                            </div>
                            <!-- End Form -->

                            <!-- Form -->
                            <div class="col-md-6 mb-3">
                                <label for="departmentLabel" class="form-label">Asset Brand : <span style="color: #D0312D !important; font-weight: 600 !important;">*</span></label>
                                <input type="text" name="brand" class="form-control" placeholder="e.g. Brand X" required>
                            </div>
                            <!-- End Form -->

                            <!-- Form -->
                            <div class="col-md-6 mb-3">
                                <label for="departmentLabel" class="form-label">Date of Request : <span style="color: #D0312D !important; font-weight: 600 !important;">*</span></label>
                                <input type="date" class="form-control" name="date" required>
                            </div>
                            <!-- End Form -->
                            
                            <!-- Form -->
                            <div class="col-md-6 mb-3">
                                <label for="branch" class="form-label">Shipping / Dispatch options : <span style="color: #D0312D !important; font-weight: 600 !important;">*</span></label>
                                <select name="shipping" class="form-select" required>
                                    <option>Choose...</option>
                                    <option value="MV BESTLINK">MV BESTLINK</option>
                                    <option value="MAIN BESTLINK">MAIN BESTLINK</option>
                                </select>
                            </div>
                            <!-- End Form -->
                            
                            
                            <!-- Form -->
                            <div class="col-md-12 mb-3">
                                <label for="departmentLabel" class="form-label">Purpose : <span style="color: #D0312D !important; font-weight: 600 !important;">*</span></label>
                                <textarea class="form-control" style="height: 100%" name="purpose"></textarea>
                            </div>
                            <!-- End Form -->

                        </div>
                    </div>

                    <!-- Footer -->
                    <div style="margin-top: 70px;" class="d-flex justify-content-end">
                        <button style="padding: 5px 30px; font-size: 18px;" type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <!-- End Footer -->
                </form>

                <!-- Request Swal -->
                <script>
                    <?php
                    if (isset($_SESSION['request']) && $_SESSION['request'] == 1) {
                    ?>
                    Swal.fire({
                        title: "Request!",
                        text: "The item has been request.",
                        icon: "success",
                        confirmButtonText: "OK"
                    });
                    <?php
                        unset($_SESSION['request']);
                    }
                    ?>
                </script> 
                </div>
            </div>
        </div>
    </div>
    </section>
    </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include ('../partials/footer.php'); ?>
  <!-- End Footer -->
</html>