<?php

  include "db_conn.php";

  if(isset($_POST['adminLogin'])) {
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $sql = "SELECT * FROM `accounts` WHERE `email` LIKE '$email' AND `password` LIKE '$pwd' AND `category` LIKE 1";
    $query = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($query);

    if($count == 0) {
      header("Location: ../../login/admin-login.php?errorLogin");
    } else {
      header("Location: ../../views/admin/index.php");
      session_start();
    }
  }

?>