<?php

  require 'plantilla.php';
  require '../includes/conexion.php';

$pdf = new  PDF('L');
$pdf-> AddPage();
$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','',12);






    $sql2 ="SELECT c.folio folio, a.nom nombre,a.id_alu matricula,c.fec_rep fecha_reporte, e.nom_esp especialidad,
t.nom tutor, a.sem semestre, c.obs observaciones  FROM escolar.rep_celular c, escolar.alu a,
escolar.especialidad e, escolar.tutores t where c.id_alu = a.id_alu and c.id_alu = e.id_alu
and c.id_alu = t.id_alu ";

  $encontrado2 = $conexion -> query($sql2);


  $pdf->SetXY(10,50);
  $pdf->SetFont('Arial','B',12);
  $pdf->Cell(275,9,utf8_decode('CONTROL DE REPORTES DE CELULARES GENERAL'),1,1,'C',1);

  $pdf->SetX(10);
  $pdf->Cell(20,10,utf8_decode('FOLIO'),1,0,'C',1);
  $pdf->Cell(30,10,utf8_decode('NOMBRE'),1,0,'C',1);
  $pdf->Cell(30,10,utf8_decode('MATRICULA'),1,0,'C',1);
  $pdf->Cell(40,10,utf8_decode('FECHA REPORTE'),1,0,'C',1);
  $pdf->Cell(40,10,utf8_decode('ESPECIALIDAD'),1,0,'C',1);
  $pdf->Cell(35,10,utf8_decode('TUTOR'),1,0,'C',1);
  $pdf->Cell(50,10,utf8_decode('OBSERVACIONES'),1,0,'C',1);
  $pdf->Cell(30,10,utf8_decode('SEMESTRE'),1,1,'C',1);

  $pdf->SetFont('Arial','',9);

  while ($row = $encontrado2 -> fetch_array(MYSQLI_ASSOC)) {

    $pdf->Cell(20,15,utf8_decode($row['folio']),1,0,'C',0);
    $pdf->Cell(30,15,utf8_decode($row['nombre']),1,0,'C',0);
    $pdf->Cell(30,15,utf8_decode($row['matricula']),1,0,'C',0);
    $pdf->Cell(40,15,utf8_decode($row['fecha_reporte']),1,0,'C',0);
    $pdf->Cell(40,15,utf8_decode($row['especialidad']),1,0,'C',0);
    $pdf->Cell(35,15,utf8_decode($row['tutor']),1,0,'C',0);
    $pdf->Cell(50,15,utf8_decode($row['observaciones']),1,0,'C',0);
    $pdf->cell(30,15,utf8_decode($row['semestre']),1,1,'C',0);


  }










$pdf->OutPut();
?>
