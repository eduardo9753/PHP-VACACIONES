<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registrarVacaciones">
  Registrar Vacaciones
</button>

<!-- Modal -->
<div class="modal fade" id="registrarVacaciones" tabindex="-1" aria-labelledby="registrarVacacionesLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="registrarVacacionesLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="insertVacaciones" method="POST" id="frmAjaxRegistrarVacaciones">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="">Titulo</label>
                <input type="text" class="form-control" id="txt_titulo" name="txt_titulo">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="">Descripcion</label>
                <textarea class="form-control" name="txt_descripcion" id="txt_descripcion" cols="30" rows="5"></textarea>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="">Trabajador</label>
                <select name="cbo_trabajador" id="cbo_trabajador" class="form-control">
                  <?php foreach ($dataTrabajador as $data) : ?>
                    <option value=" <?php echo $data->id_trabajador ?>"> <?php echo $data->nombres;
                                                                          echo " " . $data->apellido_uno;
                                                                          echo " " . $data->apellido_uno ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Color</label>
                <input type="color" class="form-control" id="txt_color" name="txt_color" value="#ff99ee">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="">Color del Texto</label>
                <input type="color" class="form-control" id="txt_color_texto" name="txt_color_texto" value="#ffffff">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="">Fecha Inicio Vacaciones</label>
                <input type="datetime-local" class="form-control" id="txt_fecha_inicio" name="txt_fecha_inicio">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="">Fecha Fin Vacaciones</label>
                <input type="datetime-local" class="form-control" id="txt_fecha_fin" name="txt_fecha_fin">
              </div>
            </div>

            <div class="col-md-4">
              <input type="submit" class="btn btn-primary" value="REGISTRAR" id="btn-registrar-vacaciones" name="btn-registrar-vacaciones">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>