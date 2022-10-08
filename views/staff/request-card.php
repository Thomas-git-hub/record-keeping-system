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

<nav class="navbar">
	 <a href="request.php"><i class='bx bx-arrow-back'></i></a>
</nav>

<div class="container-fluid">
<div class="body-content">

	

<!-- 	<div class="row mt-5 mb-2">
	  <div class="col d-flex justify-content-end ml-3">
	  	<div class="dropdown">
		  	<select class="form-select filter-status mb-2"  name="Filter Year"  required>
	            <option selected="true" disabled="disabled">Filter Status</option>
	            <option value="Pending">Pending</option>
	            <option value="Processing">Processing</option>
	            <option value="Done">Done</option>
	        </select>
	     </div>
	  </div>
	</div>  --> 
	<div class="d-flex justify-content-center mb-5">
		<div class="card" style="width: 80rem;">
		  <div class="card-header request-card-header">
		    Request Details
		  </div>
		  <div class="card-body">
		  	<h6 class="mb-4" style="font-size: 13px;">Date of Request:&nbsp;<b>09/22/2022</b></h6>
		    <h6 class="mt-3">Name of Child:&nbsp;<b>Thomas Allene</b></h6>
		    <h6 class="mt-3">Fathers Name:&nbsp;<b>Thomas</b></h6>
		    <h6 class="mt-3">Mothers Name:&nbsp;<b>Allene</b></h6>
		    <h6 class="mt-3">Year of Baptism:&nbsp;<b>09/22/2017</b></h6>
		    <h6 class="mt-3">Type of Request:&nbsp;<b>Baptismal</b></h6>
		    <h6 class="mt-4">Message/Purpose:</h6>
		    <textarea class="form-control" readonly>Test message a b c d</textarea>

		    <div class="row mt-5">
				<h6><b>Insturction:</b></h6>
				<h6>Filter the Name/Year of Baptism below, and Click the Print Icon for Viewing, Downloading and Printing of Document</h6>
				<h6>Please make sure the Document is Correct, the system is Not responsible for User Error</h6>
			</div>

		    <div class="row table mt-5">
				<table id="datatable" class="table display" >
			        <thead>
			            <tr>
			                <th>Name of Child</th>
			                <th>Fathers Name</th>
			                <th>Mothers Name</th>
			                <th>Birthdate</th>
			                <th>Year of Baptism</th>
			                <th>Sponsors Name</th>
			                <th>Action</th>
			            </tr>
			        </thead>
			        <tbody>
			            <tr>
			            	<td>John Doe</td>
			                <td>Nixxon Doe</td>
			                <td>Haley Doe</td>
			                <td>09/12/1999</td>
			                <td>11/12/2000</td>
			                <td>
								<p>Sponsor1</p>
								<p>Sponsor2</p>
							</td>
							<td>
								<button class="btn btn-print" data-toggle="tooltip" data-placement="top" title="P R I N T">
									<i class='bx bxs-printer' ></i>
								</button>
								<button class="btn btn-send" data-toggle="tooltip" data-placement="top" title="S E N D">
									<i class='bx bxs-send'></i>
								</button>
							</td>
			            </tr>
			        </tbody>
			        <tfoot>
			            <tr>
			                <th>Name of Child</th>
			                <th>Fathers Name</th>
			                <th>Mothers Name</th>
			                <th>Birthdate</th>
			                <th>Year of Baptism</th>
			                <th>Sponsors Name</th>
			                <th>Action</th>
			            </tr>
			        </tfoot>
			    </table>
			</div>

			<!-- <div class="row mt-4 mb-4">
				<div class="col d-flex justify-content-center">
					<button class="btn btn-secondary" style="width: 80%;">Send Document</button>
				</div>
			</div> -->

		  </div>
		</div>
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