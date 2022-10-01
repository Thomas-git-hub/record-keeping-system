<!DOCTYPE html>
<html>
 <head>
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />

  <!-- full calendar -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

  <!-- boxicon cdn -->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
  <link rel="stylesheet" href="../../css/sidebar.css">
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <link rel="stylesheet" type="text/css" href="css/landing.css">

<body>
  <?php include_once("includes/navbar.php") ?>

<div class="container-fluid">

<div class="row row-content">

<div class="d-flex justify-content-center mb-3">
  <a href="index.php?page=announcement" class="announcement mx-5">ANNOUNCEMENT</a>
  <a href="index.php?page=events" class="event mx-5">EVENTS</a>
</div>

<div class="col-3 left-con mx-3">
  <?php include_once("left-content.php") ?>
</div>

<div class="col mid-con px-5">
  <?php 
  if (isset($_GET['page']) && $_GET['page'] == "announcement") {
    include_once("announcement.php");
  }
  else if (isset($_GET['page']) && $_GET['page'] == "events") {
    include_once("events.php");
  }
  else{
  }
  ?>
</div>

<div class="col-3 right-con mx-3">
  <?php include_once("right-content.php") ?>
</div>

</div>

<?php include_once("footer.php") ?>