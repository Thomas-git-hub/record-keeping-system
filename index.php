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

	<div class="container">
<<<<<<< HEAD

		<div class="row">
			<div class="col d-flex justify-content-center mt-5">
				<div class="card mt-5" style="width: 40rem;">
				  <div class="card-header header-title d-flex justify-content-center">
				  	<i class='bx bxs-user-circle mr-5'></i>
				    <h5 class="text-uppercase title-login">L O G I N</h5>
				    <h5 class="text-uppercase title-login">L O G I N</h5>
				  </div>
				  <div class="card-body">
				    <form>
					  <div class="form-group">
					    <label for="exampleInputEmail1" class="d-flex justify-content-center text-title">Username or Email</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>

					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1" class="d-flex justify-content-center text-title mt-3">Password</label>
					    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
					  </div>

					  <div class="d-flex justify-content-center mt-3">
					  <button type="submit" class="btn btn-submit">Enter</button>
					  </div>
					</form>

					  </div>

				  	<div class="card-footer">
				  		<div class="row">
				  			<div class="col d-flex justify-content-center">
					    		<img src="assets/png/bu-logo.png" style="width: 6%;">&nbsp;&nbsp;
					    		<img src="assets/png/bupc-logo.png" style="width: 6%;">&nbsp;&nbsp;
					    		<img src="assets/png/church-logo.png" style="width: 6%;">&nbsp;&nbsp;
					    	</div>
					    </div>
					</div>
				</div>
=======
	<?php
		if(isset($_GET['regSuccess'])){
	?>
		<div class="alert alert-secondary" role="alert">
			Account registration success! You may now login your account.
		</div>
	<?php
		}
	?>
	
	<div class="row">
		<div class="col d-flex justify-content-center">
			<div class="card bg-dark text-white mt-3">
			  <img class="card-img" src="assets/img/church-banner2.jpg" alt="Card image">
			  <div class="card-img-overlay">
			  	<h5 class="card-title d-flex justify-content-center" style="font-size: 30px;">Saints Peter & Paul Parish Record Keeping System</h5>
			  	<h3 class="login-header-title d-flex justify-content-center mt-3">L O G I N</h3>
			  </div>
			  <div class="card-img-overlay  d-flex align-items-center">
			    <div class="row">
			  		<div class="col-4 mt-3">
			  			<a class="select-login-card" href="login/member-login.php">
			  			<div class="card login-card">
			  			<i class='bx bxs-user-circle d-flex justify-content-center mt-1'></i>
						  <div class="card-body d-flex justify-content-center">
						    <h5 class="card-title login-card-title">Login as Member</h5>
						  </div>
						</div>
						</a>
			  		</div>
			  		<div class="col-4 mt-3">
			  			<a class="select-login-card" href="login/office-staff-login.php">
			  			<div class="card login-card">
			  			<i class='bx bx-user-circle d-flex justify-content-center mt-1'></i>
						  <div class="card-body d-flex justify-content-center">
						    <h5 class="card-title login-card-title">Login as Office Staff</h5>
						  </div>
						</div>
						</a>
			  		</div>
			  		<div class="col-4 mt-3">
			  			<a class="select-login-card" href="login/admin-login.php">
			  			<div class="card login-card">
			  			<i class='bx bxs-user d-flex justify-content-center mt-1'></i>
						  <div class="card-body d-flex justify-content-center">
						    <h5 class="card-title login-card-title">Login as Admin</h5>
						  </div>
						</div>
						</a>
			  		</div>
			  	</div>
			  </div>
>>>>>>> 3584a3f4efb2983fa41534de8e159b7be01fe8fb
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