<?php
  require_once '../includes/conexion2.php';
  $conexion2 = conexion2();
  $clave= $_POST['cla'];
  $especialdad= $_POST['espe'];
  $sql="insert into especialidad (nom_esp,id_alu) values('$clave','$especialdad')";
  echo $res = mysqli_query($conexion2,$sql);

 ?>
