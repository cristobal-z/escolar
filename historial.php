<?php
$titulo ="Historial";
require 'includes/conexion.php';?>

<?php require 'includes/header.php'; ?>
<h1> </h1>


      <!-- Button trigger modal -->

      <?php if(isset($_GET['id'])){ ?>
      <?php
      $ma = $_GET['id'];
      $sql = "select * from rep_celular where id_alu ='$ma'";
      $res = $conexion->query($sql);


      $sq ="select nom from alu where id_alu ='$ma'";
      $rest = $conexion->query($sq);
      $row1 = mysqli_fetch_array($rest);
       ?>
       <div class="container-fluid">

         <ol class="breadcrumb">
           <li class="breadcrumb-item">
             <h5>Reportes por categoria, alumno: <?php echo $row1['nom'] ; ?> </h5>
           </li>

         </ol>

       </div>


       <!-- tabla celulares -->
      <div class="col-md-12">
        <div class="card mb-4">

          <div class="card-header" style="font-weight:bold;">Reportes de celular
            <i class="fas fa-table"></i>
          </div>

          <div class="card-body">
          <div class="table-responsive" >
              <table class="table table-bordered table-hover display" id ="datatable" >
               <thead>
                 <tr>
                   <th>Folio</th>
                   <th>Matricula</th>
                   <th>Fecha de reporte</th>
                   <th>Fecha de entrega</th>
                   <th>Observaciones</th>
                  </tr>
                </thead>
                <tfoot>
                  <th>Folio</th>
                  <th>Matricula</th>
                  <th>Fecha de reporte</th>
                  <th>Fecha de entrega</th>
                  <th>Observaciones</th>

                </tfoot>
                <tbody>

                      <?php while($row =$res-> fetch_array(MYSQLI_ASSOC)){
                    //  $id = $row['matricula'];
                      ?>

                  <tr>
                    <td><?php echo $row['folio']; ?></td>
                    <td><?php echo $row['id_alu']; ?></td>
                    <td><?php echo $row['fec_rep']; ?></td>
                    <td><?php echo $row['fec_ent']; ?></td>
                    <td><?php echo $row['obs']; ?></td>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted"></div>
        </div>

        <!-- tabla uniformes -->
        <div class="card mb-4">
          <?php
          $sqlu = "select * from rep_uniformes where id_alu ='$ma'";
          $resu = $conexion->query($sqlu);

           ?>

          <div class="card-header" style="font-weight:bold;">Reportes de uniformes
            <i class="fas fa-table"></i>
          </div>

          <div class="card-body">
          <div class="table-responsive" >
              <table class="table table-bordered table-hover display" id ="datatableu" >
               <thead>
                 <tr>
                   <th>Folio</th>
                   <th>Matricula</th>
                   <th>Fecha de reporte</th>
                   <th>Observaciones</th>
                  </tr>
                </thead>
                <tfoot>
                  <th>Folio</th>
                  <th>Matricula</th>
                  <th>Fecha de reporte</th>
                  <th>Observaciones</th>

                </tfoot>
                <tbody>

                      <?php while($row =$resu-> fetch_array(MYSQLI_ASSOC)){
                    //  $id = $row['matricula'];
                      ?>

                  <tr>
                    <td><?php echo $row['folio']; ?></td>
                    <td><?php echo $row['id_alu']; ?></td>
                    <td><?php echo $row['fec_']; ?></td>
                    <td><?php echo $row['obs']; ?></td>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted"></div>
        </div>

        <!-- tabla justificantes -->
        <div class="card mb-4">
          <?php
          $sqlj = "select * from rep_justificantes where id_alu ='$ma'";
          $resj = $conexion->query($sqlj);

           ?>

          <div class="card-header" style="font-weight:bold;">Reportes de justificantes
            <i class="fas fa-table"></i>
          </div>

          <div class="card-body">
          <div class="table-responsive" >
              <table class="table table-bordered table-hover display" id ="datatablej" >
               <thead>
                 <tr>
                   <th>Folio</th>
                   <th>Matricula</th>
                   <th>Fecha de reporte</th>
                   <th>Observaciones</th>
                  </tr>
                </thead>
                <tfoot>


                </tfoot>
                <tbody>

                      <?php while($row =$resj-> fetch_array(MYSQLI_ASSOC)){
                    //  $id = $row['matricula'];
                      ?>

                  <tr>
                    <td><?php echo $row['folio']; ?></td>
                    <td><?php echo $row['id_alu']; ?></td>
                    <td><?php echo $row['fec_']; ?></td>
                    <td><?php echo $row['obs']; ?></td>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted"></div>
        </div>

        <!-- tabla conducta -->
        <div class="card mb-4">
          <?php
          $sqlj = "select * from conducta where id_alu ='$ma'";
          $resj = $conexion->query($sqlj);

           ?>

          <div class="card-header" style="font-weight:bold;">Reportes de conducta
            <i class="fas fa-table"></i>
          </div>

          <div class="card-body">
          <div class="table-responsive" >
              <table class="table table-bordered table-hover display" id ="datatablec" >
               <thead>
                 <tr>
                   <th>Folio</th>
                   <th>Matricula</th>
                   <th>Fecha de reporte</th>
                   <th>Observaciones</th>
                  </tr>
                </thead>
                <tfoot>


                </tfoot>
                <tbody>

                      <?php while($row =$resj-> fetch_array(MYSQLI_ASSOC)){
                    //  $id = $row['matricula'];
                      ?>

                  <tr>
                    <td><?php echo $row['idconducta']; ?></td>
                    <td><?php echo $row['id_alu']; ?></td>
                    <td><?php echo $row['fec_']; ?></td>
                    <td><?php echo $row['obs']; ?></td>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted"></div>
        </div>

        <!-- tabla faltas -->
        <div class="card mb-4">
          <?php
          $sqlj = "select * from faltas where id_alu ='$ma'";
          $resj = $conexion->query($sqlj);

           ?>

          <div class="card-header" style="font-weight:bold;">Reportes de faltas
            <i class="fas fa-table"></i>
          </div>

          <div class="card-body">
          <div class="table-responsive" >
              <table class="table table-bordered table-hover display" id ="datatablef" >
               <thead>
                 <tr>
                   <th>Folio</th>
                   <th>Matricula</th>
                   <th>Fecha de reporte</th>
                   <th>Observaciones</th>
                  </tr>
                </thead>
                <tfoot>


                </tfoot>
                <tbody>

                      <?php while($row =$resj-> fetch_array(MYSQLI_ASSOC)){
                    //  $id = $row['matricula'];
                      ?>

                  <tr>
                    <td><?php echo $row['idfaltas']; ?></td>
                    <td><?php echo $row['id_alu']; ?></td>
                    <td><?php echo $row['fec_']; ?></td>
                    <td><?php echo $row['obs']; ?></td>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted"></div>
        </div>

        <!-- tabla tareas -->
        <div class="card mb-4">
          <?php
          $sqlj = "select * from tareas where id_alu ='$ma'";
          $resj = $conexion->query($sqlj);

           ?>

          <div class="card-header" style="font-weight:bold;">Reportes de tareas
            <i class="fas fa-table"></i>
          </div>

          <div class="card-body">
          <div class="table-responsive" >
              <table class="table table-bordered table-hover display" id ="datatablet" >
               <thead>
                 <tr>
                   <th>Folio</th>
                   <th>Matricula</th>
                   <th>Fecha de reporte</th>
                   <th>Observaciones</th>
                  </tr>
                </thead>
                <tfoot>


                </tfoot>
                <tbody>

                      <?php while($row =$resj-> fetch_array(MYSQLI_ASSOC)){
                    //  $id = $row['matricula'];
                      ?>

                  <tr>
                    <td><?php echo $row['idtareas']; ?></td>
                    <td><?php echo $row['id_alu']; ?></td>
                    <td><?php echo $row['fec_']; ?></td>
                    <td><?php echo $row['obs']; ?></td>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted"></div>
        </div>

      </div>


<?php  } else {?>
                              <!-- tablas sin id -->
    <div class="container-fluid">

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <h5><center>Reportes por categoria de todos los alumnos</center> </h5>
        </li>

      </ol>

    </div>
  <div class="col-md-12">
    <div class="card mb-4">
      <?php
      $sql = "SELECT c.folio,c.id_alu, a.nom, c.fec_rep, c.fec_ent, c.obs
      FROM escolar.rep_celular as c, escolar.alu as a where a.id_alu = c.id_alu";
      $res = $conexion->query($sql);
       ?>
      <div class="card-header" style="font-weight:bold;">Reportes de celular
        <i class="fas fa-table"></i>
      </div>

      <div class="card-body">
      <div class="table-responsive" >
          <table class="table table-bordered table-hover display" id ="datatable" >
           <thead>
             <tr>
               <th>Folio</th>
               <th>Matricula</th>
               <th>Nombre</th>
               <th>Fecha de reporte</th>
               <th>Fecha de entrega</th>
               <th>Observaciones</th>
              </tr>
            </thead>
            <tfoot>
              <th>Folio</th>
              <th>Matricula</th>
              <th>Nombre</th>
              <th>Fecha de reporte</th>
              <th>Fecha de entrega</th>
              <th>Observaciones</th>

            </tfoot>
            <tbody>

                  <?php while($row =$res-> fetch_array(MYSQLI_ASSOC)){
                //  $id = $row['matricula'];
                  ?>

              <tr>
                <td><?php echo $row['folio']; ?></td>
                <td><?php echo $row['id_alu']; ?></td>
                <td><?php echo $row['nom']; ?></td>
                <td><?php echo $row['fec_rep']; ?></td>
                <td><?php echo $row['fec_ent']; ?></td>
                <td><?php echo $row['obs']; ?></td>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted"></div>
    </div>

    <!-- tabla uniformes -->
    <div class="card mb-4">
      <?php
      $sqlu = "SELECT u.folio,u.id_alu, a.nom,u.fec_,u.obs FROM escolar.rep_uniformes as u, escolar.alu as a
      where a.id_alu = u.id_alu";
      $resu = $conexion->query($sqlu);

       ?>

      <div class="card-header" style="font-weight:bold;">Reportes de uniformes
        <i class="fas fa-table"></i>
      </div>

      <div class="card-body">
      <div class="table-responsive" >
          <table class="table table-bordered table-hover display" id ="datatableu" >
           <thead>
             <tr>
               <th>Folio</th>
               <th>Matricula</th>
               <th>Nombre</th>
               <th>Fecha de reporte</th>
               <th>Observaciones</th>
              </tr>
            </thead>
            <tfoot>
              <th>Folio</th>
              <th>Matricula</th>
              <th>Nombre</th>
              <th>Fecha de reporte</th>
              <th>Observaciones</th>

            </tfoot>
            <tbody>

                  <?php while($row =$resu-> fetch_array(MYSQLI_ASSOC)){
                //  $id = $row['matricula'];
                  ?>

              <tr>
                <td><?php echo $row['folio']; ?></td>
                <td><?php echo $row['id_alu']; ?></td>
                <td><?php echo $row['nom']; ?></td>
                <td><?php echo $row['fec_']; ?></td>
                <td><?php echo $row['obs']; ?></td>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted"></div>
    </div>

    <!-- tabla justificantes -->
    <div class="card mb-4">
      <?php
      $sqlj = "SELECT j.folio,j.id_alu,a.nom,j.fec_,j.obs FROM escolar.rep_justificantes as j, escolar.alu as a
      where j.id_alu =a.id_alu";
      $resj = $conexion->query($sqlj);

       ?>

      <div class="card-header" style="font-weight:bold;">Reportes de justificantes
        <i class="fas fa-table"></i>
      </div>

      <div class="card-body">
      <div class="table-responsive" >
          <table class="table table-bordered table-hover display" id ="datatablej" >
           <thead>
             <tr>
               <th>Folio</th>
               <th>Matricula</th>
               <th>Nombre</th>
               <th>Fecha de reporte</th>
               <th>Observaciones</th>
              </tr>
            </thead>
            <tfoot>


            </tfoot>
            <tbody>

                  <?php while($row =$resj-> fetch_array(MYSQLI_ASSOC)){
                //  $id = $row['matricula'];
                  ?>

              <tr>
                <td><?php echo $row['folio']; ?></td>
                <td><?php echo $row['id_alu']; ?></td>
                <td><?php echo $row['nom']; ?></td>
                <td><?php echo $row['fec_']; ?></td>
                <td><?php echo $row['obs']; ?></td>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted"></div>
    </div>

    <!-- tabla faltas -->
    <div class="card mb-4">
      <?php
      $sqlc = "SELECT co.idfaltas,co.id_alu,a.nom,co.fec_,co.obs FROM escolar.faltas as co, escolar.alu as a
      where co.id_alu =a.id_alu";
      $resc = $conexion->query($sqlc);

       ?>

      <div class="card-header" style="font-weight:bold;">Reportes de faltas
        <i class="fas fa-table"></i>
      </div>

      <div class="card-body">
      <div class="table-responsive" >
          <table class="table table-bordered table-hover display" id ="datatablef" >
           <thead>
             <tr>
               <th>Folio</th>
               <th>Matricula</th>
               <th>Nombre</th>
               <th>Fecha de reporte</th>
               <th>Observaciones</th>
              </tr>
            </thead>
            <tfoot>


            </tfoot>
            <tbody>

                  <?php while($row =$resc-> fetch_array(MYSQLI_ASSOC)){
                //  $id = $row['matricula'];
                  ?>

              <tr>
                <td><?php echo $row['idfaltas']; ?></td>
                <td><?php echo $row['id_alu']; ?></td>
                <td><?php echo $row['nom']; ?></td>
                <td><?php echo $row['fec_']; ?></td>
                <td><?php echo $row['obs']; ?></td>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted"></div>
    </div>

    <!-- tabla tareas -->
    <div class="card mb-4">
      <?php
      $sqlc = "SELECT co.idtareas,co.id_alu,a.nom,co.fec_,co.obs FROM escolar.tareas as co, escolar.alu as a
      where co.id_alu =a.id_alu";
      $resc = $conexion->query($sqlc);

       ?>

      <div class="card-header" style="font-weight:bold;">Reportes de tareas
        <i class="fas fa-table"></i>
      </div>

      <div class="card-body">
      <div class="table-responsive" >
          <table class="table table-bordered table-hover display" id ="datatablet" >
           <thead>
             <tr>
               <th>Folio</th>
               <th>Matricula</th>
               <th>Nombre</th>
               <th>Fecha de reporte</th>
               <th>Observaciones</th>
              </tr>
            </thead>
            <tfoot>


            </tfoot>
            <tbody>

                  <?php while($row =$resc-> fetch_array(MYSQLI_ASSOC)){
                //  $id = $row['matricula'];
                  ?>

              <tr>
                <td><?php echo $row['idtareas']; ?></td>
                <td><?php echo $row['id_alu']; ?></td>
                <td><?php echo $row['nom']; ?></td>
                <td><?php echo $row['fec_']; ?></td>
                <td><?php echo $row['obs']; ?></td>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted"></div>
    </div>

    <!-- tabla conducta -->
    <div class="card mb-4">
      <?php
      $sqlc = "SELECT co.idconducta,co.id_alu,a.nom,co.fec_,co.obs FROM escolar.conducta as co, escolar.alu as a
      where co.id_alu =a.id_alu";
      $resc = $conexion->query($sqlc);

       ?>

      <div class="card-header" style="font-weight:bold;">Reportes de conducta
        <i class="fas fa-table"></i>
      </div>

      <div class="card-body">
      <div class="table-responsive" >
          <table class="table table-bordered table-hover display" id ="datatablec" >
           <thead>
             <tr>
               <th>Folio</th>
               <th>Matricula</th>
               <th>Nombre</th>
               <th>Fecha de reporte</th>
               <th>Observaciones</th>
              </tr>
            </thead>
            <tfoot>


            </tfoot>
            <tbody>

                  <?php while($row =$resc-> fetch_array(MYSQLI_ASSOC)){
                //  $id = $row['matricula'];
                  ?>

              <tr>
                <td><?php echo $row['idconducta']; ?></td>
                <td><?php echo $row['id_alu']; ?></td>
                <td><?php echo $row['nom']; ?></td>
                <td><?php echo $row['fec_']; ?></td>
                <td><?php echo $row['obs']; ?></td>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted"></div>
    </div>


<?php } ?>










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
    $('#tabla').load('componentes/tabla2.php')

    })



</script>

<script type="text/javascript">



</script>

<script type="text/javascript">
  $(document).ready(function(){
    //agregarEspecialidad(){

  //  }

    });



</script>
