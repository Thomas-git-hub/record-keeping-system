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

	  	<!-- START OF FORM -->
		<form action="../../includes/process/marriage.php" method="POST" class="">
	    <div class="row row-border">
	    	<div class="col-2">
	    		<h6>1. Name of Contracting Parties</h6>
	    	</div>
	    	<div class="col-5 mb-2">
	    		<h5 class="card-title d-flex justify-content-center">Husband</h5>
	    			<div class="form-group">
		              <label for="exampleInputEmail1">First Name</label>
		              <input type="text" name="h_fname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="first name" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Middle Name</label>
		              <input type="text" name="h_mname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="middle name" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Last Name</label>
		              <input type="text" name="h_lname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="last name" required>
		            </div>
	    	</div>
	    	<div class="col-5 mb-2">
	    		<h5 class="card-title d-flex justify-content-center">Wife</h5>
	    			<div class="form-group">
		              <label for="exampleInputEmail1">First Name</label>
		              <input type="text" name="w_fname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="first name" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Middle Name</label>
		              <input type="text" name="w_mname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="middle name" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Last Name</label>
		              <input type="text" name="w_lname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="last name" required>
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
			              <input type="date" name="h_bday" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
			            </div>
			            <div class="col-6 form-group">
			              <label for="exampleInputEmail1">Age</label>
			              <input type="number" name="h_age" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
			            </div>
		            </div>
	    	</div>
	    	<div class="col-5 mb-2">
	    			<div class="row">
		    			<div class="col-6 form-group">
			              <label for="exampleInputEmail1">Date of Birth</label>
			              <input type="date" name="w_bday" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
			            </div>
			            <div class="col-6 form-group">
			              <label for="exampleInputEmail1">Age</label>
			              <input type="number" name="w_age" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
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
		              <input type="text" name="h_street" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
		            </div>
	    			<div class="form-group">
		              <label for="exampleInputEmail1">City/Municipality</label>
		              <input type="text" name="h_city" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Province</label>
		              <input type="text" name="h_province" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Country</label>
		              <input type="text" name="h_country" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
		            </div>
	    	</div>
	    	<div class="col-5 mb-2">
	    			<div class="form-group">
		              <label for="exampleInputEmail1">House No./St./Bananggay</label>
		              <input type="text" name="m_street" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
		            </div>
	    			<div class="form-group">
		              <label for="exampleInputEmail1">City/Municipality</label>
		              <input type="text" name="m_city" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Province</label>
		              <input type="text" name="m_province" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Country</label>
		              <input type="text" name="m_country" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
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
				            <select class="form-select mb-3"  name="h_sex"  required>
					            <option selected="true" disabled="disabled">Select Gender</option>
					            <option value="Male">Male</option>
					            <option value="Female">Female</option>
					        </select>
			            </div>
			            <div class="col-6 form-group">
			              <label for="exampleInputEmail1">Citizenship</label>
			              <input type="text" name="h_citizenship" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
			            </div>
		            </div>
	    	</div>
	    	<div class="col-5 mb-2">
	    			<div class="row">
		    			<div class="col-6 form-group">
			              <label for="exampleInputEmail1">Sex/label</label>
				            <select class="form-select mb-3"  name="m_sex"  required>
					            <option selected="true" disabled="disabled">Select Gender</option>
					            <option value="Male">Male</option>
					            <option value="Female">Female</option>
					        </select>
			            </div>
			            <div class="col-6 form-group">
			              <label for="exampleInputEmail1">Citizenship</label>
			              <input type="text" name="m_citizenship" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
			            </div>
		            </div>
	    	</div>
	    </div>

	    <div class="row row-border">
	    	<div class="col-2">
	    		<h6>5. Residence</h6>
	    	</div>
	    	<div class="col-5 mb-2">
	    			<div class="form-group">
		              <label for="exampleInputEmail1">House No./St./Bananggay</label>
		              <input type="text" name="h_add_street" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
		            </div>
	    			<div class="form-group">
		              <label for="exampleInputEmail1">City/Municipality</label>
		              <input type="text" name="h_add_city" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Province</label>
		              <input type="text" name="h_add_province" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Country</label>
		              <input type="text" name="h_add_country" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
		            </div>
	    	</div>
	    	<div class="col-5 mb-2">
	    			<div class="form-group">
		              <label for="exampleInputEmail1">House No./St./Bananggay</label>
		              <input type="text" name="m_add_street" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
		            </div>
	    			<div class="form-group">
		              <label for="exampleInputEmail1">City/Municipality</label>
		              <input type="text" name="m_add_city" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Province</label>
		              <input type="text" name="m_add_province" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Country</label>
		              <input type="text" name="m_add_country" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
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
		              <input type="text" name="h_religion" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
		            </div>
	    	</div>
	    	<div class="col-5 mb-2">
	    			<div class="form-group">
		              <label for="exampleInputEmail1">Religion</label>
		              <input type="text" name="m_religion" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
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
		             <select class="form-select mb-3"  name="h_civil_status"  required>
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
		             <select class="form-select mb-3"  name="m_civil_status"  required>
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
		              <input type="text" name="h_father_fname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="first name" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Middle Name</label>
		              <input type="text" name="h_father_mname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="middle name" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Last Name</label>
		              <input type="text" name="h_father_lname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="last name" required>
		            </div>
	    	</div>
	    	<div class="col-5 mb-2">
	    			<div class="form-group">
		              <label for="exampleInputEmail1">First Name</label>
		              <input type="text" name="m_father_fname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="first name" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Middle Name</label>
		              <input type="text" name="m_father_mname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="middle name" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Last Name</label>
		              <input type="text" name="m_father_lname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="last name" required>
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
		              <input type="text" name="h_father_citizenship" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
		            </div>
	    	</div>
	    	<div class="col-5 mb-2">
	    			<div class="form-group">
		              <label for="exampleInputEmail1">Citizenship of Father</label>
		              <input type="text" name="m_father_citizensip" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
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
		              <input type="text" name="h_mother_fname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="first name" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Middle Name</label>
		              <input type="text" name="h_mother_mname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="middle name" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Last Name</label>
		              <input type="text" name="h_mother_lname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="last name" required>
		            </div>
	    	</div>
	    	<div class="col-5 mb-2">
	    			<div class="form-group">
		              <label for="exampleInputEmail1">First Name</label>
		              <input type="text" name="m_mother_fname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="first name" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Middle Name</label>
		              <input type="text" name="m_mother_mname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="middle name" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Last Name</label>
		              <input type="text" name="m_mother_lname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="last name" required>
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
		              <input type="text" name="h_mother_citizenship" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
		            </div>
	    	</div>
	    	<div class="col-5 mb-2">
	    			<div class="form-group">
		              <label for="exampleInputEmail1">Citizenship of Mother</label>
		              <input type="text" name="m_mother_citizenship" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
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
		              <input type="text" name="h_fname_consent" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Middle Name</label>
		              <input type="text" name="h_mname_consent" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Middle Name" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Last Name</label>
		              <input type="text" name="h_lname_consent" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last Name" required>
		            </div>
	    	</div>
	    	<div class="col-5 mb-2">
	    			<div class="form-group">
		              <label for="exampleInputEmail1">First Name</label>
		              <input type="text" name="m_fname_consent" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Middle Name</label>
		              <input type="text" name="m_mname_consent" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Middle Name" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Last Name</label>
		              <input type="text" name="m_lname_consent" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last Name" required>
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
		              <input type="text" name="h_relate_consent" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
		            </div>
	    	</div>
	    	<div class="col-5 mb-2">
	    			<div class="form-group">
		              <input type="text" name="m_relate_consent" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
		            </div>
	    	</div>
	    </div>

	    <div class="row">
	    	<div class="col-2">
	    		<h6>13. Residence</h6>
	    		<p style="font-size: 12px; font-style: italic;">*Put N/A if Not Applicable</p>
	    	</div>
	    	<div class="col-5 mb-2">
	    			<div class="form-group">
		              <label for="exampleInputEmail1">House No./St./Bananggay</label>
		              <input type="text" name="h_street_consent" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
		            </div>
	    			<div class="form-group">
		              <label for="exampleInputEmail1">City/Municipality</label>
		              <input type="text" name="h_city_consent" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Province</label>
		              <input type="text" name="h_province_consent" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Country</label>
		              <input type="text" name="h_country_consent" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
		            </div>
	    	</div>
	    	<div class="col-5 mb-2">
	    			<div class="form-group">
		              <label for="exampleInputEmail1">House No./St./Bananggay</label>
		              <input type="text" name="m_street_consent" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
		            </div>
	    			<div class="form-group">
		              <label for="exampleInputEmail1">City/Municipality</label>
		              <input type="text" name="m_city_consent" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Province</label>
		              <input type="text" name="m_province_consent" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
		            </div>
		            <div class="form-group mt-2">
		              <label for="exampleInputEmail1">Country</label>
		              <input type="text" name="m_country_consent" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
		            </div>
	    	</div>
	    </div>

	  </div>
	</div>

	<!-- START OF 2ND CARD/FORM -->

	<div class="card mb-5">
	  <div class="card-header">
	    
	  </div>
	  <div class="card-body">

	    <div class="row">
	    	<div class="col-2">
	    		<h6>15. Place of Marriage</h6>
	    	</div>
	    	<div class="col mb-2">
		            <div class="form-group">
		              <label for="exampleInputEmail1">Office of the/House of/Church of/Mosque of</label>
		              <input type="text" name="church_name" class="form-control" id="" aria-describedby="emailHelp" placeholder="" required>
		            </div>
		    </div>
		    <div class="col mb-2">
		            <div class="form-group">
		              <label for="exampleInputEmail1">City/Municipality</label>
		              <input type="text" name="church_city" class="form-control" id="" aria-describedby="emailHelp" placeholder="" required>
		            </div>
		    </div>
	    </div>

	    <div class="row row-border">
	    	<div class="col-2">
	    		<h6></h6>
	    	</div>
	    	<div class="col mb-2">
		            <div class="form-group">
		              <label for="exampleInputEmail1">Province</label>
		              <input type="text" name="church_province" class="form-control" id="" aria-describedby="emailHelp" placeholder="" required>
		            </div>
		    </div>
	    </div>

	    <div class="row row-border">
	    	<div class="col-2">
	    		<h6>16. Date of Marriage</h6>
	    	</div>
	    	<div class="col mb-2">
		            <div class="form-group">
		              <input type="date" name="date_married" class="form-control" id="" aria-describedby="emailHelp" placeholder="" required>
		            </div>
		    </div>
	    </div>

	    <div class="row row-border">
	    	<div class="col-2">
	    		<h6>17. Time of Marriage</h6>
	    	</div>
	    	<div class="col mb-2">
		            <div class="form-group">
		              <input type="time" name="time_married" class="form-control" id="" aria-describedby="emailHelp" placeholder="" required>
		            </div>
		    </div>
	    </div>

	    <div class="row row-border">
	    	<div class="col-2">
	    		<h6>18. CERTIFICATION OF THE CONTRACTING PARTIES</h6>
	    	</div>
	    	<div class="col mb-2">
		            <div class="form-group">
		            	<label for="exampleInputEmail1">Name of Husband</label>
		              <input type="" class="form-control" id="" aria-describedby="emailHelp" placeholder="" required>
		            </div>
		    </div>
		    <div class="col mb-2">
		            <div class="form-group">
		            	<label for="exampleInputEmail1">Name of Wife</label>
		              <input type="" class="form-control" id="" aria-describedby="emailHelp" placeholder="" required>
		            </div>
		    </div>
	    </div>

	    <div class="row row-border">
	    	<div class="col-2">
	    		<h6>19. CERTIFICATION OF SOLEMNIZING OFFICER</h6>
	    	</div>
	    	<div class="col mb-2">
		            <div class="form-group">
		            	<label for="exampleInputEmail1">Marriage License No.</label>
		              <input type="text" name="license_no" class="form-control" id="" aria-describedby="emailHelp" placeholder="" required>
		            </div>
		    </div>
		    <div class="col mb-2">
		            <div class="form-group">
		            	<label for="exampleInputEmail1">Date Issued</label>
		              <input type="date" name="issued_on" class="form-control" id="" aria-describedby="emailHelp" placeholder="" required>
		            </div>
		    </div>
		    <div class="col mb-2">
		            <div class="form-group">
		            	<label for="exampleInputEmail1">Location</label>
		              <input type="text" name="place"  class="form-control" id="" aria-describedby="emailHelp" placeholder="" required>
		            </div>
		    </div>
	    </div>

	    <div class="row">
	    	<div class="col-2">
	    		<h6></h6>
	    	</div>
	    	<div class="col mb-2">
		            <div class="form-group">
		            	<label for="exampleInputEmail1">Name of Solemnizing Officer</label>
		              <input type="text" name="solemnizing_officer" class="form-control" id="" aria-describedby="emailHelp" placeholder="" required>
		            </div>
		    </div>
		    <div class="col mb-2">
		            <div class="form-group">
		            	<label for="exampleInputEmail1">Position/Designation</label>
		              <input type="text" name="position" class="form-control" id="" aria-describedby="emailHelp" placeholder="" required>
		            </div>
		    </div>
	    </div>

	    <div class="row row-border">
	    	<div class="col-2">
	    		<h6></h6>
	    	</div>
		    <div class="col mb-2">
		            <div class="form-group">
		            	<label for="exampleInputEmail1">Religion/Religious Sect., Registry No. & Expiration Date</label>
		              <input type="text" name="sect_no" class="form-control" id="" aria-describedby="emailHelp" placeholder="Leave it Blank if NA" required>
		            </div>
		    </div>
	    </div>

	    <div class="row row-border">
	    	<div class="col-2">
	    		<h6>20. WITNESSES</h6>
	    	</div>
		    <div class="col mb-2">
		            <div class="form-group mb-2">
		            	<label for="exampleInputEmail1">Witness 1</label>
		              <input type="text" name="witness1" class="form-control" id="" aria-describedby="emailHelp" placeholder="Input Full Name" required>
		            </div>
		            <div class="form-group mb-2">
		            	<label for="exampleInputEmail1">Witness 2</label>
		              <input type="text" name="witness2" class="form-control" id="" aria-describedby="emailHelp" placeholder="Input Full Name" required>
		            </div>
		            <div class="form-group mb-2">
		            	<label for="exampleInputEmail1">Witness 3</label>
		              <input type="text" name="witness3" class="form-control" id="" aria-describedby="emailHelp" placeholder="Input Full Name" required>
		            </div>
		            <div class="form-group mb-2">
		            	<label for="exampleInputEmail1">Witness 4</label>
		              <input type="text" name="witness4" class="form-control" id="" aria-describedby="emailHelp" placeholder="Input Full Name" required>
		            </div>
		    </div>
	    </div>

	    <div class="row row-border">
	    	<div class="col-2">
	    		<h6>21. Recieved By</h6>
	    	</div>
		    <div class="col mb-2">
		            <div class="form-group mb-2">
		            	<label for="exampleInputEmail1">Name in Print</label>
		              <input type="text" name="received_name" class="form-control" id="" aria-describedby="emailHelp" placeholder="Input Full Name" required>
		            </div>
		            <div class="form-group mb-2">
		            	<label for="exampleInputEmail1">Title or Position</label>
		              <input type="text" name="received_title" class="form-control" id="" aria-describedby="emailHelp" placeholder="Input Full Name" required>
		            </div>
		            <div class="form-group mb-2">
		            	<label for="exampleInputEmail1">Date</label>
		              <input type="date" name="received_date" class="form-control" id="" aria-describedby="emailHelp" placeholder="Input Full Name" required>
		            </div>
		    </div>
	    </div>

	    <div class="row">
	    	<div class="col-2">
	    		<h6>22. Registered by the Civil Registrar</h6>
	    	</div>
		    <div class="col mb-2">
		            <div class="form-group mb-2">
		            	<label for="exampleInputEmail1">Name in Print</label>
		              <input type="text" name="registrar_name" class="form-control" id="" aria-describedby="emailHelp" placeholder="Input Full Name" required>
		            </div>
		            <div class="form-group mb-2">
		            	<label for="exampleInputEmail1">Title or Position</label>
		              <input type="text" name="registrar_title" class="form-control" id="" aria-describedby="emailHelp" placeholder="Input Full Name" required>
		            </div>
		            <div class="form-group mb-2">
		            	<label for="exampleInputEmail1">Date</label>
		              <input type="date" name="registrar_date" class="form-control" id="" aria-describedby="emailHelp" placeholder="Input Full Name" required>
		            </div>
		    </div>
	    </div>

	  </div>

		<div class="card-footer marriage-form-footer d-flex justify-content-center mb-4">
	    	<button type="submit" name="btnMarriage" class="btn btn-form-submit">Submit Form</button>
	  	</div>

	</div>
	</form>
	<!-- END OF FORM -->
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