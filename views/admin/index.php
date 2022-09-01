<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>

	<!-- bootstrap css -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- boxicon -->
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>

    <!-- datatable cdn -->
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"></script>

    <!-- enable disable button -->

    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="css/datables.css">
    
</head>
<body>

<?php include_once("includes/sidenav.php") ?>


<?php 
if (isset($_GET['page']) && $_GET['page'] == "dashboard") {
	include_once("includes/dashboard.php");
}
else if (isset($_GET['page']) && $_GET['page'] == "baptismal") {
	include_once("includes/baptismal.php");
}
else if (isset($_GET['page']) && $_GET['page'] == "confirmation") {
	include_once("includes/confirmation.php");
}
else if (isset($_GET['page']) && $_GET['page'] == "request") {
    include_once("includes/request.php");
}
else if (isset($_GET['page']) && $_GET['page'] == "view-request") {
    include_once("includes/view-request.php");
}
else if (isset($_GET['page']) && $_GET['page'] == "member") {
    include_once("includes/member.php");
}
?>


<?php include_once("includes/footer.php") ?>
<?php include_once("includes/modal.php") ?>