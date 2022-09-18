<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- bootstrap -->
	<!-- CSS only -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- JavaScript Bundle with Popper -->
	<link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
	<link rel="stylesheet" href="css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css">

	<!-- boxicon cdn -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

	<link rel="stylesheet" href="css/sidebar.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>

<div class="container">

<form id="test-form" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">phone number</label>
    <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="09-" pattern="[0-9]*">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/sidebar.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="js/buttons.print.min.js"></script>
<script type="text/javascript" src="js/jszip.min.js"></script>
<script type="application/json" src="js/pdfmake.min.js.map"></script>
<script type="text/javascript" src="js/pdfmake.min.js"></script>

<script type="text/javascript" src="js/vfs_fonts.js"></script>
<script type="text/javascript" src="js/buttons.html5.min.js"></script>
<script type="text/javascript" src="js/dataTables.bootstrap5.min.js"></script>
<script>
	$(document).ready(function () {
        $('#datatable').DataTable();
    });
</script>

<script type="text/javascript" src="js/register.js"></script>

</body>
</html>