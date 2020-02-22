<?php
  function conexion(){
    $server='localhost';
      $user='cristobal';
      $password='welcome';
      $bd= 'escolar';

      $conexion2 = mysqli_connect($server,$user,$password,$bd);
      return $conexion2;

  }


 ?>
