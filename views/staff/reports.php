<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- bootstrap -->
	<!-- CSS only -->
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
	<!-- JavaScript Bundle with Popper -->
	<link rel="stylesheet" type="text/css" href="../../js/bootstrap.min.js">
	<link rel="stylesheet" href="../../css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="../../css/dataTables.bootstrap5.min.css">

	<!-- boxicon cdn -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <!-- chart.js-CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

	<link rel="stylesheet" href="../../css/sidebar.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
<?php include_once("includes/topnav.php") ?>
<?php include_once("includes/sidenav.php") ?>

<div class="container-fluid">
<div class="body-content">

	<div class="row mt-5 mb-5">
    	<div class="col">
	      	<div class="card card-banner">
	        	<div class="card-body">
	          	<h5 class="banner-title d-flex justify-content-center">Reports</h5>
	        	</div>
	      	</div>
    	</div>
  	</div>

  	<div class="row mt-2">
  		<div class="col d-flex justify-content-start ml-3">
	  	 <div class="dropdown mx-3">
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

	<div class="row d-flex justify-content-center">
	  	<div class="mt-5 mb-5" style="width: 70%;">
	  		<canvas id="myChart"></canvas>
	  	</div>
	</div>

	<div class="row d-flex justify-content-center mb-5">
		<button type="button" class="btn btn-generate-report" id="">
	  		<i class='bx bxs-file-pdf mx-2'></i>Generate Report
	  	  </button>
	</div>

</div>
</div>

<?php include_once("includes/modal.php") ?>

<script src="js/chart.js"></script>

<script src="../../js/jquery.min.js"></script>
<script src="../../js/popper.min.js"></script>
<script src="../../js/sidebar.js"></script>
<script src="../../js/bootstrap.min.js"></script>

<script type="text/javascript" src="../../js/popper.min.js"></script>
<script type="text/javascript" src="../../js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../../js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="../../js/buttons.print.min.js"></script>
<script type="text/javascript" src="../../js/jszip.min.js"></script>
<script type="application/json" src="../../js/pdfmake.min.js.map"></script>
<script type="text/javascript" src="../../js/pdfmake.min.js"></script>

<script type="text/javascript" src="../../js/vfs_fonts.js"></script>
<script type="text/javascript" src="../../js/buttons.html5.min.js"></script>
<script type="text/javascript" src="../../js/dataTables.bootstrap5.min.js"></script>

<script>
  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>

<script>
	$(document).ready(function () {
        $('#datatable').DataTable();
    });
</script>

</body>
</html>