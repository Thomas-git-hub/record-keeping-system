<?php

  $conn = new mysqli("localhost", "root", "", "church_db");


  //login function
  if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $sql = "SELECT * FROM `accounts` WHERE `email` LIKE '$email' AND `password` LIKE '$pwd'";

    if(mysqli_query($conn, $sql)){
      //if user exist proceed to homepage
      header("Location: ../views/staff/index.php");
      session_start();
    }else{
      echo mysqli_error($conn);
    }
  }

  //account registration
  if(isset($_POST['register'])){
    $fullname = $_POST['fullName'];
    $bday = $_POST['bday'];
    $contNum = $_POST['contNum'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $confirm = $_POST['confirm'];

    //check if password entered match
    if($confirm == $pwd){
      $sql = "INSERT INTO `accounts` (`name`, `birthday`, `cont_num`, `address`, `email`, `password`, `category`) VALUES ('$fullname', '$bday', '$contNum', '$address', '$email', '$pwd', '2')";
      
      if(mysqli_query($conn, $sql)) {
        //if registration success redirect to login form
        header("Location: ../index.php?regSuccess");
      }else{
        echo mysqli_error($conn);
      } 
    }else{
      //if registration failed alert message will appear
      header("Location: ../register.php?passwordnotmatch");
    }
  }

  //logout session
  if(isset($_GET['logout'])){
    session_unset();
    session_destroy();
    header("Location: ../index.php");
  }

?>