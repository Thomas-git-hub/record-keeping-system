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

	<!-- TEST CHART.JS "CDN" -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js" integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
</head>

<script>
	var x = 40;
	var y = 15;
	var z = 35;

	var a;

	if (x > y && x > z){
		a = x+10;
	}

  const labels = [
    'Baptismal',
    'Marriage',
    'Confirmation',
  ];

  const data = {
    labels: labels,
    datasets: [{
      label: 'No. of Persons',
      backgroundColor: 'rgb(197, 172, 132)',
      borderColor: 'rgb(109, 91, 75)',
      data: [x, y, z, a],
    }]
  };

  const config = {
    type: 'bar',
    data: data,
    options: {}
  };
</script>



<body>

<div class="container">

<div class="mt-5">
  <canvas id="myChart"></canvas>
</div>


</div>

<script>
  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>

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