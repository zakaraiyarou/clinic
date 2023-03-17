<?php

?>
  <title>Clinic Management System</title>
  <?php include('../partials/head.php'); ?>

  <!-- ======= Header ======= -->

  <?php include('../partials/header.php'); ?>

  <!-- End Header -->


  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link collapsed" href="dashboard.php"  style="color:blue;">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="patient-create.php">
      <i class="bi bi-person"></i>
        <span>Patient</span>
      </a>
  </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="appointment.php">
      <i class="fa-solid fa-calendar-check"></i>
        <span>Appointment Management</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="medical.php ">
      <i class="fa-solid fa-notes-medical"></i>
        <span>Medical</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="inventory.php">
      <i class="fa-solid fa-warehouse"></i>
        <span>Inventory</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="reports.php">
      <i class="fa-sharp fa-regular fa-file-chart-column"></i>
        <span>Reports</span>
      </a>
    </li>

    
</ul>

</aside><!-- End Sidebar-->

  <main id="main" class="main" >
  <div class="pagetitle d-inline-block">
<h1> Reports </h1>
<nav>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="../subsystem_folder/index.php">Home</a></li>
<li class="breadcrumb-item active">All Reports</li>
</ol>
</nav>
</div>

	<!-- MAIN CONTENT -->
  
  <script>

  var x = document.getElementById('mod5')
  x.className = "active";

  var y = document.getElementById('clinic')
  y.className = "nav-link ";

  var h = document.getElementById('components-nav')
  h.className = "nav-content collapse show";

  </script>

  </html>