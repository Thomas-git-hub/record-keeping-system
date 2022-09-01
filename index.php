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


	<!-- CDN -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>
<body>

	<style>
	
	</style>

	<?php include_once("includes/navbar.php") ?>

	<div class="container">

		<div class="row">
			<div class="col d-flex justify-content-center mt-5">
				<div class="card mt-5" style="width: 40rem;">
				  <div class="card-header header-title d-flex justify-content-center">

				    <h5 class="text-uppercase title-login"> <i class="bi bi-people-fill mr-5"></i>L O G I N</h5>
				  </div>
				  <div class="card-body">

				    <form>
					  <div class="form-group">
					    <label for="exampleInputEmail1" class="d-flex justify-content-center text-title">Username or Email</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1" class="d-flex justify-content-center text-title mt-3">Password</label>
					    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					  </div>

					  <div class="d-flex justify-content-center mt-3">
					  <button type="submit" class="btn btn-submit ">Enter</button>
					  </div>
					</form>

					  </div>

				  	<div class="card-footer">
				  		<div class="row">
				  			<div class="col d-flex justify-content-center">
					    		<img src="assets/png/bu-logo.png" style="width: 6%;">
					    		<img src="assets/png/bupc-logo.png" style="width: 6%;">
					    		<img src="assets/png/church-logo.png" style="width: 6%;">
					    	</div>
					    </div>
					</div>
				</div>
			</div>
	</div>

	<div class="row mt-5">

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