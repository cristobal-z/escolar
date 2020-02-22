<?php
require '../includes/conexion.php';

  if (isset($_POST['celular'])) {
    $cla = $_POST['cla'];
    $fec_ini = $_POST['fec_ini'];
    $fec_ent = $_POST['fec_ent'];
    $obs= $_POST['obs'];

      $sql1 = "insert into rep_celular (id_alu,fec_rep,fec_ent,obs) values ('$cla','$fec_ini','$fec_ent','$obs')";
      $res = $conexion ->query($sql1) OR die("Eror".mysqli_error($conexion));
      if ($res) {
        echo "<script>alert('Datos guardados');</script>";
        echo "<script type'text/javascript'>window.location='../gral.php' </script>";
      }

    // code...
  }

    if (isset($_POST['uniforme'])) {
      $cla = $_POST['cla'];
      $fec_ini = $_POST['fec_ini'];
      $obs= $_POST['obs'];
      $sql1 = "insert into rep_uniformes (id_alu,fec_,obs) values ('$cla','$fec_ini','$obs')";
      $res = $conexion ->query($sql1) OR die("Eror".mysqli_error($conexion));
      if ($res) {
        echo "<script>alert('Datos guardados');</script>";
        echo "<script type'text/javascript'>window.location='../gral.php' </script>";
      }


    }

    if (isset($_POST['justificantes'])) {
      $cla = $_POST['cla'];
      $fec_ini = $_POST['fec_ini'];
      $obs= $_POST['obs'];
      $sql1 = "insert into rep_justificantes (id_alu,fec_,obs) values ('$cla','$fec_ini','$obs')";
      $res = $conexion ->query($sql1) OR die("Eror".mysqli_error($conexion));
      if ($res) {
        echo "<script>alert('Datos guardados');</script>";
        echo "<script type'text/javascript'>window.location='../gral.php' </script>";
      }


    }

    if (isset($_POST['conducta'])) {
      $cla = $_POST['cla'];
      $fec_ini = $_POST['fec_ini'];
      $obs= $_POST['obs'];
      $sql1 = "insert into conducta (id_alu,fec_,obs) values ('$cla','$fec_ini','$obs')";
      $res = $conexion ->query($sql1) OR die("Eror".mysqli_error($conexion));
      if ($res) {
        echo "<script>alert('Datos guardados');</script>";
        echo "<script type'text/javascript'>window.location='../gral.php' </script>";
      }


    }

    if (isset($_POST['faltas'])) {
      $cla = $_POST['cla'];
      $fec_ini = $_POST['fec_ini'];
      $obs= $_POST['obs'];
      $sql1 = "insert into faltas (id_alu,fec_,obs) values ('$cla','$fec_ini','$obs')";
      $res = $conexion ->query($sql1) OR die("Eror".mysqli_error($conexion));
      if ($res) {
        echo "<script>alert('Datos guardados');</script>";
        echo "<script type'text/javascript'>window.location='../gral.php' </script>";
      }


    }

    if (isset($_POST['tareas'])) {
      $cla = $_POST['cla'];
      $fec_ini = $_POST['fec_ini'];
      $obs= $_POST['obs'];
      $sql1 = "insert into tareas (id_alu,fec_,obs) values ('$cla','$fec_ini','$obs')";
      $res = $conexion ->query($sql1) OR die("Eror".mysqli_error($conexion));
      if ($res) {
        echo "<script>alert('Datos guardados');</script>";
        echo "<script type'text/javascript'>window.location='../gral.php' </script>";
      }


    }



 ?>
