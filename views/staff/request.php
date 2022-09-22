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
	          	<h5 class="banner-title d-flex justify-content-center">Request Items</h5>
	        	</div>
	      	</div>
    	</div>
  	</div>
	
		<div class="row table">
			<table id="datatable" class="table display">
		        <thead>
		            <tr>
		                <th>Name</th>
		                <th>Date of Request</th>
		                <th>Type of Request</th>
		                <th>Year of Baptism</th>
		                <th>Email Address</th>
		                <th>View</th>
		            </tr>
		        </thead>
		        <tbody>
		            <tr>
		            	<td>John Doe</td>
		                <td>09/12/2022</td>
		                <td>Baptismal</td>>
		                <td>01/26/2017</td>
		                <td>Email@gmail.com</td>
						<td>
							<button class="btn btn-confirm" data-toggle="tooltip" data-placement="top" title="V I E W" onclick="document.location='http://localhost/record-keeping-system/views/staff/request-card.php'">
								<i class='bx bxs-envelope-open'></i>
							</button>
						</td>
		            </tr>
		            <tr>
		            	<td>John Doe</td>
		                <td>09/12/2022</td>
		                <td>Baptismal</td>
		                <td>01/26/2017</td>
		                <td>Email@gmail.com</td>
						<td>
							<button class="btn btn-confirm" data-toggle="tooltip" data-placement="top" title="V I E W" onclick="document.location='http://localhost/record-keeping-system/views/staff/request-card.php'">
								<i class='bx bxs-envelope-open'></i>
							</button>
						</td>
		            </tr>
		        </tbody>
		        <tfoot>
		            <tr>
		                <th>Name</th>
		                <th>Date of Request</th>
		                <th>Type of Request</th>
		                <th>Year of Baptism</th>
		                <th>Status</th>
		                <th>View</th>
		            </tr>
		        </tfoot>
		    </table>
		</div>

</div>
</div>

<?php include_once("includes/modal.php") ?>

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
	$(document).ready(function () {
        $('#datatable').DataTable();
    });
</script>

</body>
</html>