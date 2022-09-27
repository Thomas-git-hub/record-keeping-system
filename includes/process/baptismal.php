<?php
  include 'db_conn.php';

  if(isset($_POST['baptismalSubmit'])){
    $child = $_POST['child'];
    $father = $_POST['father'];
    $mother = $_POST['mother'];
    $bplace = $_POST['bplace'];
    $bday = $_POST['bday'];
    $church = $_POST['church'];
    $baptDate = $_POST['baptDate'];
    $priest = $_POST['priest'];
    $sponsor1 = $_POST['sponsor1'];
    $sponsor2 = $_POST['sponsor2'];
    $regNum = $_POST['regNum'];
    $pageNum = $_POST['pageNum'];
    $num = $_POST['num'];
    $issued = $_POST['issued'];
    $purpose = $_POST['purpose'];
    $vicar = $_POST['vicar'];

    $sql = "INSERT INTO `baptismal` (`child`, `father`, `mother`, `bplace`, `bday`, `church`, `baptDate`, `priest`, `sponsor1`, `sponsor2`, `regNum`, `pageNum`, `num`, `issued`, `purpose`, `vicar`) VALUES ('$child', '$father', '$mother', '$bplace', '$bday', '$church', '$baptDate', '$priest', '$sponsor1', '$sponsor2', '$regNum', '$pageNum', '$num', '$issued', '$purpose', '$vicar') ";

    if(mysqli_query($conn, $sql)) {
      header("Location: ../../views/staff/baptismal.php");
    }else {
      echo mysqli_error($conn);
    }
  }
?>