<?php
	include '../../includes/process/db_conn.php';
?>
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
	          	<h5 class="banner-title d-flex justify-content-center">Manage Office Staff Accounts</h5>
	        	</div>
	      	</div>
    	</div>
  	</div>

	<div class="row mt-5 mb-3">
	  <div class="col d-flex justify-content-start ml-3">
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

	  <div class="col d-flex justify-content-end">
	    <button type="button" class="btn btn-generate-report mr-3" data-toggle="modal" data-target="#addStaff" data-toggle="tooltip" data-placement="left" title="Add New Staff Account">
	    	<i class='bx bxs-user-plus'></i>
	    </button>
	    <button type="button" class="btn btn-generate-report mr-3 mx-3" id="" data-toggle="tooltip" data-placement="left" title="Generate Report"><i class='bx bxs-file-pdf'></i></button>
	  </div>
	</div>  
	
		<div class="row table">
			<table id="datatable" class="table display" >
		        <thead>
		            <tr>
		                <th>Name</th>
		                <th>Address</th>
		                <th>Contact No.</th>
		                <th>Email</th>
		                <th>Action</th>
		            </tr>
		        </thead>
		        <tbody>
							<?php
								$sql = "SELECT * FROM `accounts` WHERE `category` LIKE 2";
								$query = mysqli_query($conn, $sql);
								$count = mysqli_num_rows($query);

								if($count == 0){
									echo "No records yet";
								}else{
									while($row = mysqli_fetch_array($query)){
										$name = $row['name'];
										$address = $row['address'];
										$cont_num = $row['cont_num'];
										$email = $row['email'];
							?>
							<tr>
								<td><?php echo $name; ?></td>
								<td><?php echo $address; ?></td>
								<td><?php echo $cont_num; ?></td>
								<td><?php echo $email; ?></td>
								<td>
									<button class="btn btn-update" data-toggle="modal" data-target="#updateBaptismal" data-toggle="tooltip" data-placement="top" title="U P D A T E">
										<i class='bx bx-reset' ></i>
									</button>
									<button type="button" class="btn btn-enable" id="" data-toggle="tooltip" data-placement="left" title="Generate Report">Enable</i></button>
									<button type="button" class="btn btn-disable" id="" data-toggle="tooltip" data-placement="left" title="Generate Report">Disable</i></button>
								</td>
							</tr>
							<?php
									}
								}
							?>
		        </tbody>
		        <tfoot>
		            <tr>
		                <th>Name</th>
		                <th>Address</th>
		                <th>Contact No.</th>
		                <th>Email</th>
		                <th>Action</th>
		            </tr>
		        </tfoot>
		    </table>
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