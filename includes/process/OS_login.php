<?php

  include 'db_conn.php';

  if(isset($_POST['OSLogin'])) {
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $sql = "SELECT * FROM `accounts` WHERE `email` LIKE '$email' AND `password` LIKE '$pwd' AND `category` LIKE 2";
    $query = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($query);

    if($query) {
      if($count == 0){
        header("Location: ../../login/office-staff-login.php?errorLogin");
      }else{
        header("Location: ../../views/staff/index.php");
        session_start();
      }
    }else {
      echo mysqli_error($conn);
    }
  }

?>