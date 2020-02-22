<?php
$folio = 1;
  require 'plantilla.php';
  require '../includes/conexion.php';

  $sql ="SELECT any_value(c.idconducta) foliio, any_value(a.id_alu) matricula,any_value(a.nom ) nombre,
count(a.id_alu) reportes, any_value(e.nom_esp) esp, any_value(t.nom) nombre_tutor,
any_value(a.sem ) semestre FROM escolar.conducta c, escolar.alu a, escolar.especialidad e, escolar.tutores t
where a.id_alu = c.id_alu and a.id_alu = e.id_alu and a.id_alu = t.id_alu group by a.id_alu";

$encontrado = $conexion -> query($sql);


$pdf = new  PDF('L');
$pdf-> AddPage();
$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','',12);

$pdf->SetXY(30,50);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(235,9,utf8_decode('CONTROL DE REPORTES DE CONDUCTA GENERAL'),1,1,'C',1);

$pdf->SetX(30);
$pdf->Cell(20,10,utf8_decode('FOLIO'),1,0,'C',1);
$pdf->Cell(30,10,utf8_decode('MATRICULA'),1,0,'C',1);
$pdf->Cell(40,10,utf8_decode('NOMBRE'),1,0,'C',1);
$pdf->Cell(30,10,utf8_decode('REPORTES'),1,0,'C',1);
$pdf->Cell(35,10,utf8_decode('ESPECIALIDAD'),1,0,'C',1);
$pdf->Cell(40,10,utf8_decode('TUTOR'),1,0,'C',1);
$pdf->Cell(40,10,utf8_decode('SEMESTRE'),1,1,'C',1);

  $pdf->SetFont('Arial','',10);

  while($row =$encontrado-> fetch_array(MYSQLI_ASSOC)){
    $pdf->SetX(30);
    $pdf->Cell(20,10,utf8_decode($row['foliio']),1,0,'C',0);
    $pdf->Cell(30,10,utf8_decode($row['matricula']),1,0,'C',0);
    $pdf->Cell(40,10,utf8_decode($row['nombre']),1,0,'C',0);
    $pdf->Cell(30,10,utf8_decode($row['reportes']),1,0,'C',0);
    $pdf->Cell(35,10,utf8_decode($row['esp']),1,0,'C',0);
    $pdf->Cell(40,10,utf8_decode($row['nombre_tutor']),1,0,'C',0);
    $pdf->Cell(40,10,utf8_decode($row['semestre']),1,1,'C',0);
    $pdf->SetX(30);
    }


    $sql2 ="SELECT any_value(c.idconducta) foliio, any_value(a.id_alu) matricula,any_value(a.nom ) nombre,
  count(a.id_alu) reportes, any_value(e.nom_esp) esp, any_value(t.nom) nombre_tutor,
  any_value(a.sem ) semestre FROM escolar.conducta c, escolar.alu a, escolar.especialidad e, escolar.tutores t
  where a.id_alu = c.id_alu and a.id_alu = e.id_alu and a.id_alu = t.id_alu group by a.id_alu";

  $encontrado2 = $conexion -> query($sql2);















$pdf->OutPut();













 ?>
