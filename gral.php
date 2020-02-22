<?php
require 'includes/conexion.php';
$titulo ="Alumnos con reportes";
?>

<?php require 'includes/header.php'; ?>

      <div class="container-fluid">

        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <h5>Alumnos con reportes </h5>
          </li>

        </ol>

      </div>
      <!-- Button trigger modal -->

      <!-- Modal reporte justificantes -->

      <div class="modal fade" id="reporteJustificante" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle"> Agregar Reporte de justificantes </h5>

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form  action="php/funciones.php" method="post">
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md">
                      <div class="form-label-group">
                        <label>Matricula</label>
                        <input type="text" name="cla" id="cla3" class="form-control" placeholder="Matricula"  required="required">

                      </div>
                    </div>
                    <div class="col-md">
                      <div class="form-label-group">
                        <label>Fecha de reporte</label>
                        <input type="date" name="fec_ini" id="esp" class="form-control" placeholder="Nombre de especialidad" required="required" autofocus="autofocus">

                      </div>
                    </div>



                  </div>
                  <div class="form-row">
                    <div class="row">

                    </div>

                  </div>
                  <div class="form-row">
                    <div class="col-md">
                      <div class="form-label-group">
                        <textarea name="obs" rows="4" placeholder="Escriba aqui las observaciones" cols="50"></textarea>

                      </div>
                    </div>



                  </div>

                </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
              <input type="submit" class="btn btn-primary" name="justificantes" value="Guardar">
            </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal reporte uniformes -->

      <div class="modal fade" id="reporteUniforme" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle"> Agregar Reporte de Uniformes </h5>

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form  action="php/funciones.php" method="post">
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md">
                      <div class="form-label-group">
                        <label>Matricula</label>
                        <input type="text" name="cla" id="cla2" class="form-control" placeholder="Matricula"  required="required">

                      </div>
                    </div>
                    <div class="col-md">
                      <div class="form-label-group">
                        <label>Fecha de reporte</label>
                        <input type="date" name="fec_ini" id="esp" class="form-control" placeholder="Nombre de especialidad" required="required" autofocus="autofocus">

                      </div>
                    </div>



                  </div>
                  <div class="form-row">
                    <div class="row">

                    </div>

                  </div>
                  <div class="form-row">
                    <div class="col-md">
                      <div class="form-label-group">
                        <textarea name="obs" rows="4" placeholder="Escriba aqui las observaciones" cols="50"></textarea>

                      </div>
                    </div>



                  </div>

                </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
              <input type="submit" class="btn btn-primary "  name="uniforme" value="Guardar">
            </div>
            </form>
          </div>
        </div>
      </div>


<!-- Modal reporte celulares -->

<div class="modal fade" id="reporteCelular" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"> Agregar Reporte de celular </h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  action="php/funciones.php" method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md">
                <div class="form-label-group">
                  <label>Matricula</label>
                  <input type="text" name="cla" id="cla1" class="form-control" placeholder="Matricula"  required="required">

                </div>
              </div>
              <div class="col-md">
                <div class="form-label-group">
                  <label>Fecha de reporte</label>
                  <input type="date" name="fec_ini" id="esp" class="form-control" placeholder="Nombre de especialidad" required="required" autofocus="autofocus">

                </div>
              </div>
              <div class="col-md">
                <div class="form-label-group">
                  <label>Fecha de entrega</label>
                  <input type="date" name="fec_ent" id="esp" class="form-control" placeholder="Nombre de especialidad" required="required" autofocus="autofocus">

                </div>
              </div>


            </div>
            <div class="form-row">
              <div class="row">

              </div>

            </div>
            <div class="form-row">
              <div class="col-md">
                <div class="form-label-group">
                  <textarea name="obs" rows="4" placeholder="Escriba aqui las observaciones" cols="50"></textarea>

                </div>
              </div>



            </div>

          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
        <input type="submit" class="btn btn-primary" name="celular" value="Guardar">
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal reporte conducta -->

<div class="modal fade" id="reporteConducta" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"> Agregar Reporte de conducta </h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  action="php/funciones.php" method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md">
                <div class="form-label-group">
                  <label>Matricula</label>
                  <input type="text" name="cla" id="cla4" class="form-control" placeholder="Matricula"  required="required">

                </div>
              </div>
              <div class="col-md">
                <div class="form-label-group">
                  <label>Fecha de reporte</label>
                  <input type="date" name="fec_ini" id="esp" class="form-control" placeholder="Nombre de especialidad" required="required" autofocus="autofocus">

                </div>
              </div>



            </div>
            <div class="form-row">
              <div class="row">

              </div>

            </div>
            <div class="form-row">
              <div class="col-md">
                <div class="form-label-group">
                  <textarea name="obs" rows="4" placeholder="Escriba aqui las observaciones" cols="50"></textarea>

                </div>
              </div>



            </div>

          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
        <input type="submit" class="btn btn-primary" name="conducta" value="Guardar">
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal reporte Faltas -->

<div class="modal fade" id="reporteFaltas" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"> Agregar Reporte de Faltas </h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  action="php/funciones.php" method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md">
                <div class="form-label-group">
                  <label>Matricula</label>
                  <input type="text" name="cla" id="cla5" class="form-control" placeholder="Matricula"  required="required">

                </div>
              </div>
              <div class="col-md">
                <div class="form-label-group">
                  <label>Fecha de reporte</label>
                  <input type="date" name="fec_ini" id="esp" class="form-control" placeholder="Nombre de especialidad" required="required" autofocus="autofocus">

                </div>
              </div>



            </div>
            <div class="form-row">
              <div class="row">

              </div>

            </div>
            <div class="form-row">
              <div class="col-md">
                <div class="form-label-group">
                  <textarea name="obs" rows="4" placeholder="Escriba aqui las observaciones" cols="50"></textarea>

                </div>
              </div>



            </div>

          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
        <input type="submit" class="btn btn-primary" name="faltas" value="Guardar">
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal reporte Faltas -->

<div class="modal fade" id="reporteTareas" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"> Agregar Reporte de tareas </h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  action="php/funciones.php" method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md">
                <div class="form-label-group">
                  <label>Matricula</label>
                  <input type="text" name="cla" id="cla6" class="form-control" placeholder="Matricula"  required="required">

                </div>
              </div>
              <div class="col-md">
                <div class="form-label-group">
                  <label>Fecha de reporte</label>
                  <input type="date" name="fec_ini" id="esp" class="form-control" placeholder="Nombre de especialidad" required="required" autofocus="autofocus">

                </div>
              </div>



            </div>
            <div class="form-row">
              <div class="row">

              </div>

            </div>
            <div class="form-row">
              <div class="col-md">
                <div class="form-label-group">
                  <textarea name="obs" rows="4" placeholder="Escriba aqui las observaciones" cols="50"></textarea>

                </div>
              </div>



            </div>

          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
        <input type="submit" class="btn btn-primary" name="tareas" value="Guardar">
      </div>
      </form>
    </div>
  </div>
</div>


      <?php  ?>
      <?php
      $sql = "SELECT a.id_alu matricula, a.nom nombre, a.ape apellido, a.sem semestre,
    ifnull(e.nom_esp, 'ssd') especialidad, t.nom tutor, t.tel telefono
    FROM escolar.alu as a, escolar.especialidad as e, escolar.tutores t
     where a.id_alu = e.id_alu and a.id_alu = t.id_alu";
      $res = $conexion->query($sql);
       ?>



      <div class="col-md-12">
        <div class="card mb-4">

          <div class="card-header">
            <i class="fas fa-table"></i>



          </div>
          <a href="historial.php">Histo</a>
          <div class="card-body">
          <div class="table-responsive" >
              <table class="table table-bordered table-hover display" id ="datatable" >
               <thead>
                 <tr>
                    <th>Matricula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Semestre</th>
                    <th>Especialidad</th>
                    <th>Nombre tutor</th>
                    <th>telefono</th>
                    <th>Reportes</th>
                    <th>Historial</th>
                  </tr>
                </thead>
                <tfoot>

                </tfoot>
                <tbody>

                      <?php while($row =$res-> fetch_array(MYSQLI_ASSOC)){
                      $id = $row['matricula'];
                      ?>

                  <tr>
                    <td><?php echo $row['matricula']; ?></td>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['apellido']; ?></td>
                    <td><?php echo $row['semestre']; ?></td>
                    <td><?php echo $row['especialidad']; ?></td>
                    <td><?php echo $row['tutor']; ?></td>
                    <td><?php echo $row['telefono']; ?></td>

                    <td>
                      <div class="dropdown dropright">
                        <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Agregar
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" data-toggle="modal" id="especialidad" onclick="reporte('<?php echo $id; ?>')" href="#reporteCelular">Celular</a>
                          <a class="dropdown-item" data-toggle="modal" onclick="reporte2('<?php echo $id; ?>')" href="#reporteUniforme">Uniformes</a>
                          <a class="dropdown-item" data-toggle="modal" onclick="reporte3('<?php echo $id; ?>')" href="#reporteJustificante">justificantes</a>
                          <a class="dropdown-item" data-toggle="modal" id="especialidad" onclick="reporte4('<?php echo $id; ?>')" href="#reporteConducta">conducta</a>
                          <a class="dropdown-item" data-toggle="modal" onclick="reporte5('<?php echo $id; ?>')" href="#reporteFaltas">faltas</a>
                          <a class="dropdown-item" data-toggle="modal" onclick="reporte6('<?php echo $id; ?>')" href="#reporteTareas">tareas</a>


                        </div>
                      </div>
                    </td>
                    <td> <a class="btn btn-primary tooltip-test" title="Generera un reporte a detalle" href="historial.php?id=<?php echo $id; ?>">Ver</a> </td>

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
    $('#tabla').load('componentes/tabla2.php')

    })



</script>

<script type="text/javascript">



</script>

<script type="text/javascript">
  //$(document).ready(function(){
    //agregarEspecialidad(){

  //  }

  //  });



</script>
