<?php
  require '../fpdf/fpdf.php';


  class PDF extends FPDF
  {

    function header()
    {
      $this-> Image('../img/logo.png',5,10,50);
      $this->SetFont('Arial','B',14);
      $this-> Multicell(280,5,utf8_decode('CENTRO DE BACH. TECNÓLOGICO ADMVO. ATENÓGENES PEREZ Y SOTO
      CLAVE: MSP30059   CCT: 30PCT0008Z
      ACAYUCAN, VER.   TEL. 924245533 '),0,'C',0);
      $this->SetFont('Arial','',13);
      $this-> Ln();
      $this->Cell(250,10,utf8_decode('CENTRO DE BACHILLERATO TECNOLÓGICO ADMINISTRATIVO ATENÓGENES PÉREZ Y SOTO'),0,0,'C',0);
      $this-> Ln();
    }

  function footer(){
      $this-> SetY(-15);
      $this->SetFont('Arial','I',8);
      $this->Cell(0,10,'Fima');

    }


  }





 ?>
