<?php
$titulo ="Inicio";
require 'includes/conexion.php';
require 'includes/conexion.php';
if (isset($_POST['especialidad'])) {
  $clave= $_POST['cla'];
  $especialdad= $_POST['espe'];

  $sql1 ="select * from especialidad where id_alu ='$clave'";
  $encontrado = $conexion->query($sql1);
  $row1 = mysqli_fetch_array($encontrado);
  if ($row1['id_alu'] == $_POST['cla']) {
    echo "<script type='text/javascript'> alert('El alumno ya tiene una especialidad');</script>";

  } else {
    $sql="insert into especialidad (nom_esp,id_alu) values('$especialdad','$clave')";
    $res = $conexion->query($sql) OR die('Error al insertar los datos'.mysqli_error($conexion));

    if($res){
          echo "<script> alert('Datos guardados');</script>";
          echo "<script type'text/javascript'>window.location='index.php' </script>";

        }

  }


  // code...
}
  if (isset($_POST['tutor'])) {



  $n= $_POST['nom'];
  $a= $_POST['ape'];
  $d= $_POST['dir'];
  $t= $_POST['tel'];
  $clave= $_POST['claa'];

    $sql1 ="select * from tutores where id_alu ='$clave'";
    $encontrado = $conexion->query($sql1);
    $row1 = mysqli_fetch_array($encontrado);
    if ($row1['id_alu'] == $_POST['claa']) {
      echo "<script> alert('El alumno ya tiene registrado un tutor');</script>";

    } else {
      $sql="insert into tutores (nom,ape,dir,tel,id_alu) values('$n','$a','$d','$t','$clave')";
      $res = $conexion->query($sql) OR die('Error al insertar los datos'.mysqli_error($conexion));

      if($res){
            echo "<script> alert('Datos guardados');</script>";
            echo "<script> $(document).ready(function(){
              $('#tabla').load('componentes/tabla.php')})</script>";

          }


    }
}
  if (isset($_POST['alumno'])) {
    $id = $_POST['claa'];
    $nom=$_POST['nom'] ;
    $ape= $_POST['ape'];
    $fec= $_POST['fec'];
    $sem= $_POST['sem'] ;

    $sql1 = "select count(*) from alu where id_alu = '$id' ";
    $encontrado = $conexion ->query($sql1);
    $row1 = mysqli_fetch_assoc($encontrado);
    if ($row1['count(*)'] == 1) {
      echo "<script> alert('Ya existe un alumno con la misma matricula');</script>";
    }else {
      $sql = "insert into alu values('$id','$nom','$ape','$fec','$sem')";
      $re = $conexion -> query($sql) OR die('Error :('.mysqli_error($conexion));
      if ($re) {
        echo "<script> alert('Guardado con exito!');</script>";
        // code...
      }
    }


  }
?>


  <?php require 'includes/header.php'; ?>
  <script type="text/javascript">
    function reporte(id){

    $('#cla').val(id);

  }
  function reporte2(id){

  $('#id_tu').val(id);

  }

  function reporteHistorial(datos){
    d=datos.split('||');

    $('#1').val(d[0]);
    $('#2').val(d[1]);
    $('#3').val(d[2]);
    $('#4').val(d[3]);
    $('#5').val(d[4]);
    $('#6').val(d[5]);
    $('#7').val(d[6]);
    $('#8').val(d[7]);

  }

  </script>

      <hr>

      <div class="container-fluid">

        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <h5>Pagina principal </h5>
          </li>

        </ol>

      </div>
      <!-- Button trigger modal -->



<!-- Modal agregar tutor -->

<div class="modal fade" id="agregarNuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"> Agregar Tutor </h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  action="index.php" method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-4">
                <div class="form-label-group">
                  <input type="text" name="claa" id="id_tu" class="form-control" placeholder="ID"  required="required">

                </div>
              </div>
              <div class="col-md">
                <div class="form-label-group">
                  <input type="text" name="nom" id="esp" class="form-control" placeholder="Nombres" required="required" autofocus="autofocus">

                </div>
              </div>

            </div>
            <div class="form-row">
              <div class="col-md">
                <div class="form-label-group">
                  <input type="text" name="ape"  class="form-control" placeholder="Apellidos"  required="required">

                </div>
              </div>
              <div class="col-md">
                <div class="form-label-group">
                  <input type="text" name="dir" id="esp" class="form-control" placeholder="Direccion" required="required" autofocus="autofocus">

                </div>
              </div>
              <div class="col-md">
                <div class="form-label-group">
                  <input type="text" name="tel" id="esp" class="form-control" placeholder="Telefono" required="required" autofocus="autofocus">

                </div>
              </div>



            </div>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
        <input type="submit" class="btn btn-primary" name="tutor" value="Guardar">
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal agregar alumno -->

<div class="modal fade" id="agregarNuevoAlumno" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"> Agregar Nuevo alumno </h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  action="index.php" method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-4">
                <div class="form-label-group">
                  <input type="text" name="claa" id="id_tu" class="form-control" placeholder="Matricula" required="required">

                </div>
              </div>
              <div class="col-md">
                <div class="form-label-group">
                  <input type="text" name="nom" id="esp" class="form-control" placeholder="Nombres" required="required" autofocus="autofocus">

                </div>
              </div>
              <div class="col-md">
                <div class="form-label-group">
                  <input type="text" name="ape" id="esp" class="form-control" placeholder="Apellidos" required="required" autofocus="autofocus">

                </div>
              </div>

            </div>
            <div class="form-row">
              <div class="col-md">
                <div class="form-label-group">
                  <input type="date" name="fec"  class="form-control" placeholder="Apellidos"  required="required">

                </div>
              </div>
              <div class="col-md">
                <div class="form-label-group">

                  <select class="form-control" name="sem">
                    <option value="1" selected>1 semestre</option>
                    <option value="2">2 semestre</option>
                    <option value="3">3 semestre</option>
                    <option value="4">4 semestre</option>
                    <option value="5">5 semestre</option>
                    <option value="6">6 semestre</option>



                  </select>
                </div>
              </div>




            </div>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
        <input type="submit" class="btn btn-primary" name="alumno" value="Guardar">
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal agregar Especialidad -->

<div class="modal fade" id="agregarEspecialidad" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"> Agregar Especialidad </h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  action="index.php" method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md">
                <div class="form-label-group">
                  <input type="text" name="cla" id="cla" class="form-control" placeholder="matricula"  required="required">

                </div>
              </div>
              <div class="col-md">
                <div class="form-label-group">
                  <input type="text" name="espe" id="esp" class="form-control" placeholder="Nombre de especialidad" required="required" autofocus="autofocus">

                </div>
              </div>


            </div>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
        <input type="submit" class="btn btn-primary" name="especialidad" value="Guardar">
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal  -->

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-sm modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-warning">



        <h5 class="modal-title" id="exampleModalLongTitle" align ="center"> Resumen de reportes</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <table class="table table-bordered table-hover">
                <tr>
                  <th>Nombre</th>
                  <th>celular</th>
                  <th>justificantes</th>
                  <th>uniformes</th>
                  <th>Tareas incumpplidas</th>
                  <th>Faltas</th>
                  <th>Conducta</th>
                </tr>
                <tr>
                  <td> <input class="form-control" type="text"  disabled id="1"> </td>
                  <td> <input class="form-control" type="text" disabled  id="3"></td>
                  <td> <input class="form-control" type="text"  disabled id="4"></td>
                  <td> <input class="form-control" type="text"  disabled id="5"></td>
                  <td> <input class="form-control" type="text"  disabled id="6"></td>
                  <td> <input class="form-control" type="text"  disabled id="7"></td>
                  <td> <input class="form-control" type="text"  disabled id="8"></td>
                </tr>
              </table>

            </div>

          </div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

      </div>

    </div>
  </div>
</div>

  <?php
      $sql = "SELECT id_alu matricula, nom nombre,ape apellido,sem semestre FROM escolar.alu";
      $res = $conexion->query($sql);
       ?>
      <div class="col-sm-2">
        <caption>
          <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#agregarNuevoAlumno">Agregar Nuevo
            <span class="glyphicon glyphicon-plus"></span>
          </button>
        </caption>
        <h1>  </h1>
      </div>
      <div class="row">

      </div>

      <div class="col-md-12">
        <div class="card mb-4">

          <div class="card-header">
            <i class="fas fa-table"></i>
            Plantilla de Alumnos registrados</div>

          <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered table-hover" id ="tabla1" >
                <thead>
                <tr>
                    <th>Matricula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Semestre</th>
                    <th>Agregar</th>
                    <th>Reportes</th>

                  </tr>
                </thead>
                <tbody>

                  <?php while($row =$res-> fetch_array(MYSQLI_ASSOC)){
                      $id = $row['matricula'];
                    ?>
                    <?php
                    $con = "SELECT nom,id_alu,
                    (select count(*) from escolar.rep_celular where id_alu = '$id' ) celular,
                    (select count(*) from escolar.rep_justificantes where id_alu = '$id' ) justificantes,
                    (select count(*) from escolar.rep_uniformes where id_alu = '$id' ) uniformes,
                    (select count(*) from escolar.tareas where id_alu = '$id' ) tareas,
                    (select count(*) from escolar.faltas where id_alu = '$id' ) faltas,
                    (select count(*) from escolar.conducta where id_alu = '$id' ) conducta
                    FROM
                    escolar.alu
                    where id_alu ='$id'";
                    $encontrado = $conexion ->query($con);
                    $row1 = mysqli_fetch_assoc($encontrado);

                    $datos= $row1['nom']."||".
                            $row1['id_alu']."||".
                            $row1['celular']."||".
                            $row1['justificantes']."||".
                            $row1['uniformes']."||".
                            $row1['tareas']."||".
                            $row1['faltas']."||".
                            $row1['conducta'];

                     ?>
                  <tr>

                    <td><?php echo $row['matricula']; ?></td>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['apellido']; ?></td>
                    <td><?php echo $row['semestre']; ?></td>
                    <td>
                          <div class="dropdown dropright">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Agregar
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" data-toggle="modal" id="especialidad" onclick="reporte('<?php echo $id; ?>')" href="#agregarEspecialidad">Especialidad</a>
                              <a class="dropdown-item" data-toggle="modal" onclick="reporte2('<?php echo $id; ?>')" href="#agregarNuevo">Tutor</a>


                            </div>
                          </div>


                    </td>
                    <td><button  class="btn btn-primary" data-toggle="modal"
                    onclick="reporteHistorial('<?php echo $datos; ?>')"  data-target="#exampleModalCenter" >
                      Ver
                    </button></td>

                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted"></div>
        </div>

      </div>




    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->



  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>

<script type="text/javascript">
  $(document).ready(function(){
    $('#tabla').load('componentes/tabla.php')

  });

</script>

<script type="text/javascript">
  $(document).ready(function(){
    //agregarEspecialidad(){

  //  }

    });



</script>
