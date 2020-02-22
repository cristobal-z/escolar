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
        <form  action="../index.php" method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-4">
                <div class="form-label-group">
                  <input type="text" name="claa" id="id_tu" class="form-control" placeholder="ID" hidden required="required">

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
                  <input type="text" name="ape" id="" class="form-control" placeholder="Apellidos"  required="required">

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
        <form  action="../index.php" method="post">
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
                  <input type="date" name="fec" id="" class="form-control" placeholder="Apellidos"  required="required">

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
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"> Agregar Especialidad </h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  action="../index.php" method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md">
                <div class="form-label-group">
                  <input type="text" name="cla" id="cla" class="form-control" placeholder="Nombre de especialidad"  required="required">

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
