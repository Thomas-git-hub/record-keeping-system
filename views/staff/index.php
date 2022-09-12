<!DOCTYPE html>
<html>
 <head>
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />

  <!-- boxicon cdn -->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
  <link rel="stylesheet" href="../../css/sidebar.css">
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">

  
  
 </head>
 <body>
  <?php include_once("includes/topnav.php") ?>
  <?php include_once("includes/sidenav.php") ?>

  <div class="container">
  <div class="body-content">
  <div class="row">
    <div class="col">
      <div class="card card-banner">
        <div class="card-body">
          <h5 class="banner-title d-flex justify-content-center">Saint Peter & Paul Parish</h5>
        </div>
      </div>
    </div>
  </div>
  <h2 align="center" class="mt-3 mb-5" style="font-size: 30px; font-weight: bold; color: #6d5b4b;">Record Keeping System</h2>

  <?php include_once("../../assets/temp/calendar.php") ?>

  <div class="row mt-3 mb-5">
    <div class="col">
      <button class="btn btn-announcement btn-block" data-toggle="modal" data-target="#createAnnouncement">Create New Announcement</button>
    </div>
    <div class="col">
      <button class="btn btn-announcement btn-block" data-toggle="modal" data-target="#createEvent">Create New Events</button>
    </div>
  </div>

  <div class="row mb-5">
    <div class="col-4">
      <div class="card">
        <div class="card-header">
          No. of Request
        </div>
        <div class="card-body">
          <h5 class="card-content">15<i class='bx bx-check-double'></i></h5>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="card">
        <div class="card-header">
          No. of Activities
        </div>
        <div class="card-body">
          <h5 class="card-content">15<i class='bx bx-run' ></i></h5>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="card">
        <div class="card-header">
          No. of Members
        </div>
        <div class="card-body">
          <h5 class="card-content">15<i class='bx bx-group' ></i></h5>
        </div>
      </div>
    </div>
  </div>

  </div>
  </div>
  <?php include_once("includes/modal.php") ?>

  <script src="js/sidebar.js"></script>
  <script src="../../js/popper.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>

 </body>
</html>