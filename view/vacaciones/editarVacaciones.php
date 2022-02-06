<?php include_once('view/template/head.php') ?>

<?php include_once('view/template/nav.php'); ?>



<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
        <!-- Topbar -->
        <?php include_once('view/template/setting.php'); ?>
        <!-- End of Topbar -->


        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800"><?php echo $titulo ?></h1>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            </div>
            <!-- Content Row -->
            <div class="row">
                <!-- Page-header end -->
                <div class="card mx-auto">
                    <div class="card-body">
                        <form action="" method="POST" id="frmAjaxActualizarVacaciones">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Titulo</label>
                                        <input type="text" class="form-control" id="txt_id_vacaciones" name="txt_id_vacaciones" value="<?php echo $dataVacaciones->id_vaciones ?>" hidden>
                                        <input type="text" class="form-control" id="txt_titulo" name="txt_titulo" value="<?php echo $dataVacaciones->title ?>">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Trabajador</label>
                                        <input type="text" class="form-control" name="txt_trabajador" id="txt_trabajador" value="<?php echo $dataVacaciones->nombres;
                                                                                                                                    echo " " . $dataVacaciones->apellido_uno;
                                                                                                                                    echo " " . $dataVacaciones->apellido_dos ?>">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Color</label>
                                        <input type="color" class="form-control" id="txt_color" name="txt_color" value="<?php echo $dataVacaciones->color ?>">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Color del Texto</label>
                                        <input type="color" class="form-control" id="txt_color_texto" name="txt_color_texto" value="<?php echo $dataVacaciones->textColor ?>">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Fecha Inicio</label>
                                        <input type="datetime-local" class="form-control" id="txt_fecha_inicio" name="txt_fecha_inicio" value="<?php echo $this->SESSION->formatFechaDateTimeLocal($dataVacaciones->start) ?>">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Fecha Fin</label>
                                        <input type="datetime-local" class="form-control" id="txt_fecha_fin" name="txt_fecha_fin" value="<?php echo $this->SESSION->formatFechaDateTimeLocal($dataVacaciones->end) ?>">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Descripcion</label>
                                        <textarea class="form-control" name="txt_descripcion" id="txt_descripcion" cols="30" rows="5"><?php echo $dataVacaciones->descripcion ?></textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">ESTADO ACTUAL</label>
                                        <select name="cbo_estado_vacaciones" class="form-control" id="cbo_estado_vacaciones">
                                            <option value="<?php echo $dataVacaciones->id_estado ?>"><?php echo $dataVacaciones->estado ?></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <input type="submit" class="btn btn-primary" value="ACTUALIZAR DATOS" id="btn-actualizar-vacaciones" name="btn-actualizar-vacaciones">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Page-header end -->
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->


    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Your Website 2021</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->
</div>
<!-- End of Content Wrapper -->
<?php include_once('view/template/footer.php'); ?>