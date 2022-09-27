<?php
  include 'db_conn.php';

  function getMonthName($monthNum) {
    $monthArray = array("", "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

    return $monthArray[$monthNum];
  }
?>