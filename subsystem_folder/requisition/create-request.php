<?php
  session_start();

  require_once '../../database/connection.php';
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

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <!-- HTML !-->

</head>

<header id="header" class="header fixed-top d-flex align-items-center">

  <div class="d-flex align-items-center justify-content-between">
    <a href="../dashboard.php" class="logo d-flex align-items-center">
      <img src="../../assets/img/logo.png" alt="">
      <span class="d-none d-lg-block">Clinic</span>
    </a>

    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div><!-- End Logo -->
  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

      <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
          <input type="text" name="query" placeholder="Search" title="Enter search keyword">
          <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
      </div><!-- End Search Bar -->

      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

          <li class="nav-item d-block d-lg-none">
            <a class="nav-link nav-icon search-bar-toggle " href="#">
              <i class="bi bi-search"></i>
            </a>
          </li>
          <!-- End Search Icon-->

          <li class="nav-item dropdown">

            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
              <i class="bi bi-bell"></i>
              <span class="badge bg-primary badge-number"></span>
            </a><!-- End Notification Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
              <li class="dropdown-header">
                You have 4 new notifications
                <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="notification-item">
                <i class="bi bi-exclamation-circle text-warning"></i>
                <div>
                  <h4>Lorem Ipsum</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>30 min. ago</p>
                </div>
              </li>

              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="notification-item">
                <i class="bi bi-x-circle text-danger"></i>
                <div>
                  <h4>Atque rerum nesciunt</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>1 hr. ago</p>
                </div>
              </li>

              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="notification-item">
                <i class="bi bi-check-circle text-success"></i>
                <div>
                  <h4>Sit rerum fuga</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>2 hrs. ago</p>
                </div>
              </li>

              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="notification-item">
                <i class="bi bi-info-circle text-primary"></i>
                <div>
                  <h4>Dicta reprehenderit</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>4 hrs. ago</p>
                </div>
              </li>

              <li>
                <hr class="dropdown-divider">
              </li>
              <li class="dropdown-footer">
                <a href="#">Show all notifications</a>
              </li>

            </ul><!-- End Notification Dropdown Items -->

          </li><!-- End Notification Nav -->

          <li class="nav-item dropdown">

            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
              <i class="bi bi-chat-left-text"></i>
              <span class="badge bg-success badge-number"></span>
            </a><!-- End Messages Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
              <li class="dropdown-header">
                You have 3 new messages
                <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="message-item">
                <a href="#">
                  <img src="../../../assets/img/messages-1.jpg" alt="" class="rounded-circle">
                  <div>
                    <h4>Maria Hudson</h4>
                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                    <p>4 hrs. ago</p>
                  </div>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="message-item">
                <a href="#">
                  <img src="../../../assets/img/messages-2.jpg" alt="" class="rounded-circle">
                  <div>
                    <h4>Anna Nelson</h4>
                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                    <p>6 hrs. ago</p>
                  </div>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="message-item">
                <a href="#">
                  <img src="../../../assets/img/messages-3.jpg" alt="" class="rounded-circle">
                  <div>
                    <h4>David Muldon</h4>
                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                    <p>8 hrs. ago</p>
                  </div>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="dropdown-footer">
                <a href="#">Show all messages</a>
              </li>

            </ul><!-- End Messages Dropdown Items -->

          </li><!-- End Messages Nav -->

          <li class="nav-item dropdown pe-3">

            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
              <img src="../../../assets/img/apple-touch-icon.png" alt="Profile" class="rounded-circle">
              <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
            </a><!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
              <li class="dropdown-header">
                <h6>Admin</h6>

              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                  <i class="bi bi-person"></i>
                  <span>My Profile</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <a class="dropdown-item d-flex align-items-center" href="../../database/logout.php">
                  <i class="bi bi-person"></i>
                  <span>Log out</span>
                </a>


            </ul><!-- End Profile Dropdown Items -->
          </li><!-- End Profile Nav -->

        </ul>


</header>
<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
        <a class="nav-link collapsed" href="../dashboard.php">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
        </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
        <a class="nav-link collapsed" href="../patient/index.php">
        <i class="bi bi-person"></i>
            <span>Patient</span>
        </a>
    </li>

        <li class="nav-item">
        <a class="nav-link collapsed" href="../appointment/appointment.php">
        <i class="fa-solid fa-calendar-check"></i>
            <span>Appointment Management</span>
        </a>
        </li>

        <li class="nav-item">
        <a class="nav-link collapsed" href="../medical/medical.php">
        <i class="fa-solid fa-notes-medical"></i>
            <span>Medical</span>
        </a>
        </li>
        <li class="nav-item">
          <a class="nav-link collapsed" href="../requisition/requisition.php"  style="color:blue;">
            <i class="fa-solid fa-warehouse"></i>
            <span>Requisition</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link collapsed" href="../inventory/inventory.php">
            <i class="fa-solid fa-warehouse"></i>
            <span>Reports</span>
          </a>
        </li>
    </ul>

</aside><!-- End Sidebar-->
<body>
<main id="main" class="main">
    <div class="row">
    <div class="col-lg-12">
        <div style="border-radius: 10px;" class="card">
            <div class="card-body" style="margin-left: 10px; margin-right: 10px; margin-bottom: 10px;">
                <form class="row" method="POST" action="../../action/add/mis-req-add.php" style="margin-top: 15px;">
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
</main>


<!-- Vendor JS Files -->
<script src="../../assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/vendor/chart.js/chart.min.js"></script>
<script src="../../assets/vendor/echarts/echarts.min.js"></script>
<script src="../../assets/vendor/quill/quill.min.js"></script>
<script src="../../assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="../../assets/vendor/tinymce/tinymce.min.js"></script>
<script src="../../assets/vendor/php-email-form/validate.js"></script>

  <!-- DATA TABLES -->
<script src="../../assets/vendor/dataTables/jquery-3.5.1.js"></script>
<script src="../../assets/vendor/dataTables/jquery.dataTables.min.js"></script>
<script src="../../assets/vendor/dataTables/dataTables.bootstrap5.min.js"></script>

  <!-- DATA TABLES -->
  <script src="../../assets/js/clinic.js"></script>

<!-- Template Main JS File -->
<script src="../../assets/js/main.js"></script>
<script src="../../assets/js/apexchart.js"></script>


</body>
</html>