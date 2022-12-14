	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Admin</title>

	<!-- bootstrap -->
	<!-- CSS only -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- JavaScript Bundle with Popper -->
	<link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">

	<!-- custom_css -->
	<link rel="stylesheet" type="text/css" href="css/index.css">

	<!-- boxicon cdn -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>

	<?php include_once("includes/navbar.php") ?>

	<?php include_once("includes/navbar.php") ?>

	<div class="container">
	<!-- start alert message -->
	<?php
		if(isset($_GET['passwordnotmatch'])) {
	?>
		<div class="alert alert-secondary" role="alert">
			The password you enter do not match. Please try again.
		</div>
	<?php
		}
	?>

		
	<!-- end of alert message -->
		<div class="row">
			<div class="col d-flex justify-content-center mt-4">
				<div class="card" style="width: 60rem;">
				  <div class="card-header header-title">
				  <div class="d-flex flex-column">
				  	<i class='bx bx-edit d-flex justify-content-center mr-5' ></i>
				    <h5 class="text-uppercase title-login d-flex justify-content-center">R E G I S T R A T I O N</h5>
				  </div>
				  </div>
				  <div class="card-body">
				    <form action="includes/func.php" method="POST" id="formRegister">
				    	<div class="row mt-3">
						  <div class="form-group">
						    <label for="exampleInputEmail1" class="d-flex justify-content-center text-title">Name</label>
						    <input type="text" name="fullName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First, Middle, Last" required>
						  </div>
					  	</div>

					  	<div class="row mt-3">
					  	  <div class="col form-group">
						    <label for="exampleInputEmail1" class="d-flex justify-content-center text-title">Date of Birth</label>
						    <input type="date" name="bday" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" required>
						  </div>
						  <div class="col form-group">
						    <label for="exampleInputEmail1" class="d-flex justify-content-center text-title">Contact Number</label>
						    <input type="text" name="contNum" class="form-control" id="contactNumber" aria-describedby="emailHelp" placeholder="ex. 09-" pattern="[0-9]*" required>
						  </div>
					  	</div>

					  	<div class="row mt-3">
						  <div class="form-group">
						    <label for="exampleInputEmail1" class="d-flex justify-content-center text-title">Address</label>
						    <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Street, City/Municipal, Province" required>
						  </div>
					  	</div>

					  	<div class="row mt-3">
					  		<div class="form-group">
						    <label for="exampleInputEmail1" class="d-flex justify-content-center text-title">Email Address</label>
						    <input type="email" name="email"  class="form-control" id="emailAddress" aria-describedby="emailHelp" placeholder="Use Email as Username" required>
						  </div>
					  	</div>

					  	<div class="row mt-3">
						  <div class="col form-group">
						    <label for="exampleInputPassword1" class="d-flex justify-content-center text-title mt-3">Password</label>
						    <input type="password" name="pwd" class="form-control" id="pass" placeholder="Password" required>
						  </div>
						  <div class="col form-group">
						    <label for="exampleInputPassword1" class="d-flex justify-content-center text-title mt-3">Confirm Password</label>
						    <input type="password" name="confirm" class="form-control" id="confirmPassword" placeholder="Re-type Password" required>
						    <span id="messageUpd"></span>
						  </div>	
					  	</div>

					  <div class="d-flex justify-content-center mt-4">
					  <button type="submit" name="register" class="btn btn-submit">Submit</button>
					  </div>
					</form>

					  </div>

				  	<div class="card-footer">
				  		<div class="row">
				  			<div class="col d-flex justify-content-center">
					    		<img src="assets/png/bu-logo.png" style="width: 4%;">&nbsp;&nbsp;
					    		<img src="assets/png/bupc-logo.png" style="width: 4%;">&nbsp;&nbsp;
					    		<img src="assets/png/church-logo.png" style="width: 4%;">&nbsp;&nbsp;
					    	</div>
					    </div>
					</div>
				</div>
			</div>
	</div>

	<div class="row mt-3 mb-5">

  	<div class="row">
	  <div class="col d-flex justify-content-center mt-5">
	      <h6 class="h6-footer">Bicol University Polangui Campus</h6>
	    </div>
	  </div>

	  <div class="row">
	    <div class="col d-flex justify-content-center">
	      <h6 class="h6-footer">@ 2022-2023</h6>
	    </div>
	  </div>

	  <div class="row">
	    <div class="col d-flex justify-content-center">
	      <h6 class="h6-footer">Saint Peter & Paul Parish Reqcord Keeping System</h6>
	    </div>
	  </div>
	</div>

</div>

</body>
</html>