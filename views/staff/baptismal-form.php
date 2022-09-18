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
  <a href="baptismal.php"><i class='bx bx-arrow-back'></i></a>
</nav>


<div class="container">
<div class="body-content">

	<div class="card mb-5">
	  <div class="card-header">
	   	Baptismal Form
	  </div>
	  <div class="card-body">
	    <div class="row row-border">
	    <h5 class="card-title d-flex justify-content-center">This is to Certify</h5>	
	    <form>
	    	<div class="row">
		    	<div class="col mb-2">
		    			<div class="form-group">
			              <label for="exampleInputEmail1">Name of Child</label>
			              <input type="" class="form-control" id="" placeholder="First Name, Middle Name, Last Name" required>
			            </div>
		    	</div>
	    	</div>
	    	<div class="row">
		    	<div class="col-6 mb-2">
			            <div class="form-group mt-2">
			              <label for="exampleInputEmail1">Name of Father</label>
			              <input type="" class="form-control" id=""placeholder="First Name, Last Name" required>
			            </div>
			    </div>
			    <div class="col-6">
			            <div class="form-group mt-2">
			              <label for="exampleInputEmail1">Name of Mother</label>
			              <input type="" class="form-control" id="" placeholder="Maiden Name (First Name, Last Name)" required>
			            </div>
			    </div>
	    	</div>
	    	<div class="row">
		    	<div class="col mb-2">
		    			<div class="form-group">
			              <label for="exampleInputEmail1">Born in</label>
			              <input type="" class="form-control" id="" placeholder="first name" required>
			            </div>
		    	</div>
	    	</div>
	    	<div class="row">
		    	<div class="col mb-2">
		    			<div class="form-group">
			              <label for="exampleInputEmail1">Date of Birth</label>
			              <input type="date" class="form-control" id="" placeholder="first name" required>
			            </div>
		    	</div>
	    	</div>
	    	<div class="row row-border">
		    	<div class="col-6 mb-4">
		    			<div class="form-group">
			              <label for="exampleInputEmail1">Church of</label>
			              <input type="" class="form-control" id="" placeholder="" value="STS. PETER AND PAUL" readonly>
			            </div>
		    	</div>
		    	<div class="col-6 mb-4">
		    			<div class="form-group">
			              <label for="exampleInputEmail1">On Date</label>
			              <input type="date" class="form-control" id="" placeholder="" required>
			            </div>
		    	</div>
	    	</div>
	    <h5 class="card-title d-flex justify-content-center my-4">The Holy Sacrament of Baptism</h5>
	    	<div class="row">
		    	<div class="col mb-2">
		    			<div class="form-group">
			              <label for="exampleInputEmail1">By the Rev</label>
			              <input type="" class="form-control" id="" placeholder="Fr. First Name, Last Name" required>
			            </div>
		    	</div>
	    	</div>
	    	<div class="row">
		    	<div class="col mb-2">
		    			<div class="form-group">
			              <label for="exampleInputEmail1">Name of Sponsors</label>
			              <input type="" class="form-control mb-2" id="" placeholder="(Sponsor1) First Name, Last Name" required>
			              <input type="" class="form-control" id="" placeholder="(Sponsor2) First Name, Last Name" required>
			            </div>
		    	</div>
	    	</div>
	    	<div class="row">
		    	<div class="col-4 mb-2">
			    			<div class="form-group">
				              <label for="exampleInputEmail1">Baptismal Register No.</label>
				              <input type="number" class="form-control" id="" placeholder="" required>
				            </div>
			    </div>
			    <div class="col-4 mb-2">
			            <div class="form-group">
			              <label for="exampleInputEmail1">Page</label>
			              <input type="number" class="form-control" id="" placeholder="" required>
			            </div>
			    </div>
			    <div class="col-4 mb-2">
			            <div class="form-group">
			              <label for="exampleInputEmail1">No.</label>
			              <input type="number" class="form-control" id="" placeholder="" required>
			            </div>
			    </div>
			</div>
		    <div class="row">
		    	<div class="col mb-2">
		    			<div class="form-group">
			              <label for="exampleInputEmail1">Date Issued</label>
			              <input type="date" class="form-control mb-2" id="" placeholder="" required>
			            </div>
		    	</div>
	    	</div>
	    	<div class="row row-border">
		    	<div class="col mb-2">
		    			<div class="form-group">
			              <label for="exampleInputEmail1">Purpose</label>
			              <input type="" class="form-control mb-2" id="" placeholder="" required>
			            </div>
		    	</div>
	    	</div>
	    	<div class="row mt-5">
		    	<div class="col mb-2">
		    			<div class="form-group">
			              <label for="exampleInputEmail1">PARISH PRIEST/PAROCHAL VICAR</label>
			              <input type="" class="form-control mb-2" id="" placeholder="" required>
			            </div>
		    	</div>
	    	</div>		
	  	</div>

			<div class="card-footer marriage-form-footer d-flex justify-content-center mb-4">
		    	<button class="btn btn-form-submit">Add Baptismal</button>
		  	</div>
	  	</form>

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