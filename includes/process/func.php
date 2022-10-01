<?php
  include 'db_conn.php';

  function getMonthName($monthNum) {
    $monthArray = array("", "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

    return $monthArray[$monthNum];
  }

  function getRandomNum($length) {
    $random_num = "1234567890";
    $shuffle = str_shuffle($random_num);
    $last = substr($shuffle, 0, $length);
    
    return $last;
  }
?>