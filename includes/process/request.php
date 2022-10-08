<?php 
	require('db_conn.php');

	if (isset($_POST['requestBtn'])) {
		$child = $_POST['child'];
		$father = $_POST['father'];
		$mother = $_POST['mother'];
		$date = $_POST['date'];
		$purpose = $_POST['purpose'];

		$sql = "INSERT INTO `requests` (`child`, `father`, `mother`, `date`, `purpose`) VALUES ('$child', '$father', '$mother', '$date', '$purpose');";


		if (mysqli_query($conn, $sql)){
			header("location: ../views/parishioner/index.php");
		}
		else{
			echo mysqli_error($conn);
		}
		}


?>