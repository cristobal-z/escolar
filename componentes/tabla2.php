<!-- DataTables Example -->
  <?php include '../includes/conexion.php'; ?>
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
        <div class="form-group">
          <div class="form-row">
            <div class="col-md-2">
              <input type="text" name="" class="form-control" placeholder="Matricula o Nombre" value="">

            </div>
            <div class="col-md-4">
              <input type="submit" class="btn btn-primary" name="" value="Buscar">
            </div>
            </div>
          </div>


      </div>

      <div class="card-body">
      <div class="table-responsive display" id ="">
          <table class="table table-bordered table-hover" >
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
              </tr>
            </thead>
            <tfoot>
              <th>Matricula</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Semestre</th>
              <th>Especialidad</th>
              <th>Nombre tutor</th>
              <th>telefono</th>
              <th>Reportes</th>
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
                      <a class="dropdown-item" data-toggle="modal" onclick="reporte2('<?php echo $id; ?>')" href="#agregarNuevo">Uniformes</a>
                      <a class="dropdown-item" data-toggle="modal" onclick="reporte2('<?php echo $id; ?>')" href="#agregarNuevo">justificantes</a>
                      <a class="dropdown-item" data-toggle="modal" onclick="reporte2('<?php echo $id; ?>')" href="#agregarNuevo">Historial</a>


                    </div>
                  </div>
                </td>

              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted"></div>
    </div>

  </div>
