<!-- DataTables Example -->
  <?php include '../includes/conexion.php'; ?>
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
                onclick="reporte('<?php echo $row['matricula']; ?>')"  data-target="#exampleModalCenter" >
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
