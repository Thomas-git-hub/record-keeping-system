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


  <!-- chart.js-CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  
  
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

  <div class="row mt-3 mb-5">
    <div class="col-6">
      <div class="card">
        <div class="card-header">
          No. of Staff Accounts
        </div>
        <div class="card-body">
          <h5 class="card-content">15<i class='bx bx-group' ></i></h5>
        </div>
      </div>
      <div class="card mt-2">
        <div class="card-header">
          No. of Member Accounts
        </div>
        <div class="card-body">
          <h5 class="card-content">15<i class='bx bx-run' ></i></h5>
        </div>
      </div>
    </div>
    <div class="col-6">
      <div class="row">
        <div class="col d-flex justify-content-start">
          <div class="dropdown">
            <select class="form-select dropdown-filter-year mb-3"  name="Filter Year"  required>
                  <option selected="true" disabled="disabled">Filter Year</option>
                  <option value="2022">2022</option>
                  <option value="2021">2021</option>
                  <option value="2020">2020</option>
                  <option value="2019">2019</option>
                  <option value="2018">2018</option>
                  <option value="2017">2017</option>
              </select>
           </div>
        </div>
      </div>

      <div class="mt-1 mb-5" style="width: 100%;">
        <canvas id="myChart"></canvas>
      </div>
    </div>
  </div>

  <div class="mb-5">
    <?php include_once("../../assets/temp/calendar.php") ?>
  </div>


  </div>
  </div>
  <?php include_once("includes/modal.php") ?>

  <script src="js/chart.js"></script>

  <script src="js/sidebar.js"></script>
  <script src="../../js/popper.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>

  <script>
  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
  </script>

 </body>
</html>