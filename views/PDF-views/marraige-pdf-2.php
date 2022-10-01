<?php
  require('../../includes/fpdf/fpdf.php');


  $pdf = new FPDF();
  $pdf->AddPage('P', 'Legal');
  
  $pdf->Output(); 


?>