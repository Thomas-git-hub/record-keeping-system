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
  <a href="marriage.php"><i class='bx bx-arrow-back'></i></a>
</nav>


<div class="container">
<div class="body-content">
	<div class="card mb-5">
	  <div class="card-header">
	    Marriage Form
	  </div>
	  <div class="card-body">
	    <div class="row row-border">
	    	<div class="col-2">
	    		<h6>1. Name of Contracting Parties</h6>
	    	</div>
	    	<div class="col-5 mb-2">
	    		<h5 class="card-title d-flex justify-content-center">Husband</h5>
	    			<div class="form-group">
		              <label for="exampleInputEmail1">First Name</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="first name" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Middle Name</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="middle name" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Last Name</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="last name" required>
		            </div>
	    	</div>
	    	<div class="col-5 mb-2">
	    		<h5 class="card-title d-flex justify-content-center">Wife</h5>
	    			<div class="form-group">
		              <label for="exampleInputEmail1">First Name</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="first name" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Middle Name</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="middle name" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Last Name</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="last name" required>
		            </div>
	    	</div>
	    </div>

	    <div class="row row-border">
	    	<div class="col-2">
	    		<h6>2A. Date of Birth</h6>
	    		<h6>2B. Age</h6>
	    	</div>
	    	<div class="col-5 mb-2">
	    			<div class="row">
		    			<div class="col-6 form-group">
			              <label for="exampleInputEmail1">Date of Birth</label>
			              <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
			            </div>
			            <div class="col-6 form-group">
			              <label for="exampleInputEmail1">Age</label>
			              <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
			            </div>
		            </div>
	    	</div>
	    	<div class="col-5 mb-2">
	    			<div class="row">
		    			<div class="col-6 form-group">
			              <label for="exampleInputEmail1">Date of Birth</label>
			              <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
			            </div>
			            <div class="col-6 form-group">
			              <label for="exampleInputEmail1">Age</label>
			              <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
			            </div>
		            </div>
	    	</div>
	    </div>


	    <div class="row row-border">
	    	<div class="col-2">
	    		<h6>3. Place of Birth</h6>
	    	</div>
	    	<div class="col-5 mb-2">
	    			<div class="form-group">
		              <label for="exampleInputEmail1">House No./St./Bananggay</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
		            </div>
	    			<div class="form-group">
		              <label for="exampleInputEmail1">City/Municipality</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Province</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Country</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
		            </div>
	    	</div>
	    	<div class="col-5 mb-2">
	    			<div class="form-group">
		              <label for="exampleInputEmail1">House No./St./Bananggay</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
		            </div>
	    			<div class="form-group">
		              <label for="exampleInputEmail1">City/Municipality</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Province</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Country</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
		            </div>
	    	</div>
	    </div>

	    <div class="row row-border">
	    	<div class="col-2">
	    		<h6>4A. Sex</h6>
	    		<h6>4B. Citizenship</h6>
	    	</div>
	    	<div class="col-5 mb-2">
	    			<div class="row">
		    			<div class="col-6 form-group">
			              <label for="exampleInputEmail1">Sex/label</label>
				            <select class="form-select mb-3"  name="Filter Year"  required>
					            <option selected="true" disabled="disabled">Select Gender</option>
					            <option value="Male">Male</option>
					            <option value="Female">Female</option>
					        </select>
			            </div>
			            <div class="col-6 form-group">
			              <label for="exampleInputEmail1">Citizenship</label>
			              <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
			            </div>
		            </div>
	    	</div>
	    	<div class="col-5 mb-2">
	    			<div class="row">
		    			<div class="col-6 form-group">
			              <label for="exampleInputEmail1">Sex/label</label>
				            <select class="form-select mb-3"  name="Filter Year"  required>
					            <option selected="true" disabled="disabled">Select Gender</option>
					            <option value="Male">Male</option>
					            <option value="Female">Female</option>
					        </select>
			            </div>
			            <div class="col-6 form-group">
			              <label for="exampleInputEmail1">Citizenship</label>
			              <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
			            </div>
		            </div>
	    	</div>
	    </div>

	    <div class="row row-border">
	    	<div class="col-2">
	    		<h6>5A. Date of Birth</h6>
	    		<h6>5B. Age</h6>
	    	</div>
	    	<div class="col-5 mb-2">
	    			<div class="row">
		    			<div class="col-6 form-group">
			              <label for="exampleInputEmail1">Date of Birth</label>
			              <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
			            </div>
			            <div class="col-6 form-group">
			              <label for="exampleInputEmail1">Age</label>
			              <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
			            </div>
		            </div>
	    	</div>
	    	<div class="col-5 mb-2">
	    			<div class="row">
		    			<div class="col-6 form-group">
			              <label for="exampleInputEmail1">Date of Birth</label>
			              <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
			            </div>
			            <div class="col-6 form-group">
			              <label for="exampleInputEmail1">Age</label>
			              <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
			            </div>
		            </div>
	    	</div>
	    </div>

	    <div class="row row-border">
	    	<div class="col-2">
	    		<h6>6. Religion/Religous Sect</h6>
	    	</div>
	    	<div class="col-5 mb-2">
	    			<div class="form-group">
		              <label for="exampleInputEmail1">Religion</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
		            </div>
	    	</div>
	    	<div class="col-5 mb-2">
	    			<div class="form-group">
		              <label for="exampleInputEmail1">Religion</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
		            </div>
	    	</div>
	    </div>

	    <div class="row row-border">
	    	<div class="col-2">
	    		<h6>7. Civil Status</h6>
	    	</div>
	    	<div class="col-5 mb-2">
	    			<div class="form-group">
	    			 <label for="exampleInputEmail1">Civil Status</label>
		             <select class="form-select mb-3"  name="Filter Year"  required>
			            <option selected="true" disabled="disabled">Select Civil Status</option>
			            <option value="2022">Single</option>
			            <option value="2020">Divorced</option>
			            <option value="2019">Seperated</option>
			            <option value="2018">Widowed</option>
			        </select>
		            </div>
	    	</div>
	    	<div class="col-5 mb-2">
	    			<div class="form-group">
	    			 <label for="exampleInputEmail1">Civil Status</label>
		             <select class="form-select mb-3"  name="Filter Year"  required>
			            <option selected="true" disabled="disabled">Select Civil Status</option>
			            <option value="2022">Single</option>
			            <option value="2020">Divorced</option>
			            <option value="2019">Seperated</option>
			            <option value="2018">Widowed</option>
			        </select>
		            </div>
	    	</div>
	    </div>

	    <div class="row row-border">
	    	<div class="col-2">
	    		<h6>8. Name of Father</h6>
	    	</div>
	    	<div class="col-5 mb-2">
	    			<div class="form-group">
		              <label for="exampleInputEmail1">First Name</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="first name" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Middle Name</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="middle name" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Last Name</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="last name" required>
		            </div>
	    	</div>
	    	<div class="col-5 mb-2">
	    			<div class="form-group">
		              <label for="exampleInputEmail1">First Name</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="first name" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Middle Name</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="middle name" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Last Name</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="last name" required>
		            </div>
	    	</div>
	    </div>

	    <div class="row row-border">
	    	<div class="col-2">
	    		<h6>9. Citizenship</h6>
	    	</div>
	    	<div class="col-5 mb-2">
	    			<div class="form-group">
		              <label for="exampleInputEmail1">Citizenship of Father</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
		            </div>
	    	</div>
	    	<div class="col-5 mb-2">
	    			<div class="form-group">
		              <label for="exampleInputEmail1">Citizenship of Father</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
		            </div>
	    	</div>
	    </div>

	    <div class="row row-border">
	    	<div class="col-2">
	    		<h6>10. Maiden Name of Mother</h6>
	    	</div>
	    	<div class="col-5 mb-2">
	    			<div class="form-group">
		              <label for="exampleInputEmail1">First Name</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="first name" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Middle Name</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="middle name" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Last Name</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="last name" required>
		            </div>
	    	</div>
	    	<div class="col-5 mb-2">
	    			<div class="form-group">
		              <label for="exampleInputEmail1">First Name</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="first name" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Middle Name</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="middle name" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Last Name</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="last name" required>
		            </div>
	    	</div>
	    </div>

	    <div class="row row-border">
	    	<div class="col-2">
	    		<h6>11. Citizenship</h6>
	    	</div>
	    	<div class="col-5 mb-2">
	    			<div class="form-group">
		              <label for="exampleInputEmail1">Citizenship of Mother</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
		            </div>
	    	</div>
	    	<div class="col-5 mb-2">
	    			<div class="form-group">
		              <label for="exampleInputEmail1">Citizenship of Mother</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
		            </div>
	    	</div>
	    </div>

	    <div class="row row-border">
	    	<div class="col-2">
	    		<h6>12. Name of person/wall who gave consent or advice</h6>
	    		<p style="font-size: 12px; font-style: italic;">*Put N/A if Not Applicable</p>
	    	</div>
	    	<div class="col-5 mb-2">
	    			<div class="form-group">
		              <label for="exampleInputEmail1">First Name</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Middle Name</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Middle Name" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Last Name</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last Name" required>
		            </div>
	    	</div>
	    	<div class="col-5 mb-2">
	    			<div class="form-group">
		              <label for="exampleInputEmail1">First Name</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Middle Name</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Middle Name" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Last Name</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last Name" required>
		            </div>
	    	</div>
	    </div>

	    <div class="row row-border">
	    	<div class="col-2">
	    		<h6>12. Relationship</h6>
	    		<p style="font-size: 12px; font-style: italic;">*Put N/A if Not Applicable</p>
	    	</div>
	    	<div class="col-5 mb-2">
	    			<div class="form-group">
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
		            </div>
	    	</div>
	    	<div class="col-5 mb-2">
	    			<div class="form-group">
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
		            </div>
	    	</div>
	    </div>

	    <div class="row row-border">
	    	<div class="col-2">
	    		<h6>13. Residence</h6>
	    		<p style="font-size: 12px; font-style: italic;">*Put N/A if Not Applicable</p>
	    	</div>
	    	<div class="col-5 mb-2">
	    			<div class="form-group">
		              <label for="exampleInputEmail1">House No./St./Bananggay</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
		            </div>
	    			<div class="form-group">
		              <label for="exampleInputEmail1">City/Municipality</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Province</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Country</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
		            </div>
	    	</div>
	    	<div class="col-5 mb-2">
	    			<div class="form-group">
		              <label for="exampleInputEmail1">House No./St./Bananggay</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
		            </div>
	    			<div class="form-group">
		              <label for="exampleInputEmail1">City/Municipality</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Province</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Country</label>
		              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
		            </div>
	    	</div>
	    </div>

	  </div>

		<div class="card-footer marriage-form-footer d-flex justify-content-center mb-4">
	    	<button class="btn btn-form-submit">Submit Form</button>
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