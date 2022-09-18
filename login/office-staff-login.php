<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Admin</title>

	<!-- bootstrap -->
	<!-- CSS only -->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<!-- JavaScript Bundle with Popper -->
	<link rel="stylesheet" type="text/css" href="../js/bootstrap.min.js">

	<!-- custom_css -->
	<link rel="stylesheet" type="text/css" href="../css/index.css">

	<!-- boxicon cdn -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>

	<div class="container ">
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
			<div class="col d-flex justify-content-center mt-5">
				<div class="card mt-5" style="width: 40rem;">
				  <div class="card-header header-title">
				  	<div class="row">
				  		<div class="col">
				  			<a href="../index.php"><i class='bx bx-arrow-back'></i></a>
				  		</div>
				  	</div>
				  	<div class="d-flex flex-column">
					  	<h5 class="title-login d-flex justify-content-center"><i class='bx bxs-user-pin'></i></h5>
					    <h5 class="text-uppercase title-login d-flex justify-content-center">O F F I C E S T A F F</h5>
				    </div>
				  </div>
				  <div class="card-body">
				    <form action="includes/func.php" method="POST">
							<div class="form-group">
								<label for="exampleInputEmail1" class="d-flex justify-content-center text-title">Username or Email</label>
								<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>

							</div>
							<div class="form-group">
								<label for="exampleInputPassword1" class="d-flex justify-content-center text-title mt-3">Password</label>
								<input type="password" name="pwd" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
							</div>

							<div class="d-flex justify-content-center mt-3">
								<button type="submit" name="login" class="btn btn-submit">Enter</button>
							</div>
						</form>
					</div>

				  	<div class="card-footer">
				  		<div class="row">
				  			<div class="col d-flex justify-content-center">
					    		<img src="../assets/png/bu-logo.png" style="width: 6%;">&nbsp;&nbsp;
					    		<img src="../assets/png/bupc-logo.png" style="width: 6%;">&nbsp;&nbsp;
					    		<img src="../assets/png/church-logo.png" style="width: 6%;">&nbsp;&nbsp;
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