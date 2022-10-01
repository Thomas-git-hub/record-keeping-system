<?php
  include 'db_conn.php';
  include 'func.php';
  
  $num = getRandomNum(3);

  if(isset($_POST['btnMarriage'])) {
    $h_fname = $_POST['h_fname'];
    $h_mname = $_POST['h_mname'];
    $h_lname = $_POST['h_lname'];
    $w_fname = $_POST['w_fname'];
    $w_mname = $_POST['w_mname'];
    $w_lname = $_POST['w_lname'];
    $h_bday = $_POST['h_bday'];
    $h_age = $_POST['h_age'];
    $w_bday = $_POST['w_bday'];
    $w_age = $_POST['w_age'];
    $h_bplace = $_POST['h_street'] . " " . $_POST['h_city'] . " " . $_POST['h_province'] . " " . $_POST['h_country'];
    $w_bplace = $_POST['w_street'] . " " . $_POST['w_city'] . " " . $_POST['w_province'] . " " . $_POST['w_country'];
    $h_sex = $_POST['h_sex'];
    $h_citizenship = $_POST['h_citizenship'];
    $w_sex = $_POST['w_sex'];
    $w_citizenship = $_POST['w_citizenship'];
    $h_address = $_POST['h_add_street'] . " " . $_POST['h_add_province'] . " " . $_POST['h_add_country'];
    $w_address = $_POST['w_add_street'] . " " . $_POST['w_add_province'] . " " . $_POST['w_add_country'];
    $h_religion = $_POST['h_religion'];
    $w_religion = $_POST['w_religion'];
    $h_civil_status = $_POST['h_civil_status'];
    $w_civil_status = $_POST['w_civil_status'];
    $h_father = $_POST['h_father_fname'] . " " . $_POST['h_father_mname'] . " " . $_POST['h_father_lname'];
    $w_father = $_POST['w_father_fname'] . " " . $_POST['w_father_mname'] . " " . $_POST['w_father_lname'];
    $h_father_citizenship = $_POST['h_father_citizenship'];
    $w_father_citizenship = $_POST['w_father_citizenship'];
    $h_mother = $_POST['h_mother_fname'] . " " . $_POST['h_mother_mname'] . " " . $_POST['h_mother_lname'];
    $w_mother = $_POST['w_mother_fname'] . " " . $_POST['w_mother_mname'] . " " . $_POST['w_mother_lname'];
    $h_mother_citizenship = $_POST['h_mother_citizenship'];
    $w_mother_citizenship = $_POST['w_mother_citizenship'];
    $h_consent_name = $_POST['h_fname_consent'] . " " . $_POST['h_mname_consent'] . " " . $_POST['h_lname_consent'];
    $w_consent_name = $_POST['w_fname_consent'] . " " . $_POST['w_mname_consent'] . " " . $_POST['w_lname_consent'];
    $h_relate_consent = $_POST['h_relate_consent'];
    $w_relate_consent = $_POST['w_relate_consent'];
    $h_address_consent = $_POST['h_street_consent'] . " " . $_POST['h_city_consent'] . " " . $_POST['h_province_consent'] . " " . $_POST['h_country_consent'];
    $w_address_consent = $_POST['w_street_consent'] . " " . $_POST['w_city_consent'] . " " . $_POST['w_province_consent'] . " " . $_POST['w_country_consent'];
    $place_married = $_POST['church_name'] . " " . $_POST['church_city'] . " " . $_POST['church_province'];
    $date_married = $_POST['date_married'];
    $time_married = $_POST['time_married'];
    $license_no = $_POST['license_no'];
    $issued_on = $_POST['issued_on'];
    $place = $_POST['place'];
    $solemnizing_officer = $_POST['solemnizing_officer'];
    $position = $_POST['position'];
    $sect_no = $_POST['sect_no'];
    $witness1 = $_POST['witness1'];
    $witness2 = $_POST['witness2'];
    $witness3 = $_POST['witness3'];
    $witness4 = $_POST['witness4'];
    $received_name = $_POST['received_name'];
    $received_title = $_POST['received_title'];
    $received_date = $_POST['received_date'];
    $registrar_name = $_POST['registrar_name'];
    $registrar_title = $_POST['registrar_title'];
    $registrar_date = $_POST['registrar_date'];

    

    $registry_no = date('Y') . "-" . $num;

    $marriage_no = "INSERT INTO `marriage_no` (`province`, `city`, `registry_no`) VALUES ('Albay', 'Polangui', '$registry_no')";

    if(mysqli_query($conn, $marriage_no)){
      $getRegistryNo = "SELECT * FROM `marriage_no` WHERE `registry_no` LIKE '$registry_no'";
      $query = mysqli_query($conn, $getRegistryNo);
      $row = mysqli_fetch_array($query);
      $id = $row['id'];
      
      $husband = "INSERT INTO `husband` (`registry_no`, `fname`, `mname`, `lname`, `bday`, `age`, `bplace`, `sex`, `citizenship`, `address`, `religion`, `civil_status`, `father`, `f_citizenship`, `mother`, `m_citizenship`, `gave_consent`, `relationship`, `residence`) VALUES ('$id', '$h_fname', '$h_mname', '$h_lname', '$h_bday', '$h_age', '$h_bplace', '$h_sex', '$h_citizenship', '$h_address', '$h_religion', '$h_civil_status', '$h_father', '$h_father_citizenship', '$h_mother', '$h_mother_citizenship', '$h_consent_name', '$h_relate_consent', '$h_address_consent')";
      

      $wife = "INSERT INTO `wife` (`registry_no`, `fname`, `mname`, `lname`, `bday`, `age`, `bplace`, `sex`, `citizenship`, `address`, `religion`, `civil_status`, `father`, `f_citizenship`, `mother`, `m_citizenship`, `gave_consent`, `relationship`, `residence`) VALUES ('$w_fname', '$w_mname', '$w_lname', '$w_bday', '$w_age', '$w_bplace', '$w_sex', '$w_citizenship', '$w_address', '$w_religion', '$w_civil_status', '$w_father', '$w_father_citizenship', '$w_mother', '$w_mother_citizenship', '$w_consent_name', '$w_relate_consent', '$w_address_consent')";

      $others = "INSERT INTO `others` (`registry_no`, `place_married`, `date_married`, `time_married`, `license_no`, `issued_on`, `place`, `solemnizing_officer`, `position`, `sect_no`, `witness1`, `witness2`, `witness3`, `witness4`, `received_name`, `received_title`, `received_date`, `registrar_name`, `registrar_title`, `registrar_date`) VALUES ('$id', '$place_married', '$date_married', '$time_married', '$license_no', '$issued_on', '$place', '$solemnizing_officer', '$position', '$sect_no', '$witness1', '$witness2', '$witness3', '$witness4', '$received_name', '$received_title', '$received_date', '$registrar_name', '$registrar_title', '$registrar_date')";

      $husband_query = mysqli_query($conn, $husband);
      $wife_query = mysqli_query($conn, $wife_query);
      $others_query = mysqli_query($conn, $others);

      if($husband_query && $wife_query && $others_query) {
        header("Location:  ../../views/staff/marriage.php?registeredSucess");
      }else{
        echo mysqli_error($conn);
      }

    }
  }
?>