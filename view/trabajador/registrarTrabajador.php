<?php

use PhpOffice\PhpSpreadsheet\Shared\OLE\PPS;

include_once('view/template/head.php') ?>

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
                        <form action="insertTrabajador" method="POST" id="frmAjaxRegistrarTrabajador">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">DNI / PE / DOCUMENTO</label>
                                        <input type="text" class="form-control" id="txt_documento" name="txt_documento">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Nombres</label>
                                        <input type="text" class="form-control" id="txt_nombres" name="txt_nombres">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Primer Apellido</label>
                                        <input type="text" class="form-control" id="txt_apellido1" name="txt_apellido1">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Segundo Apellido</label>
                                        <input type="text" class="form-control" id="txt_apellido2" name="txt_apellido2">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Puesto</label>
                                        <input type="text" class="form-control" id="txt_puesto" name="txt_puesto">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Fecha Inicio de Labores</label>
                                        <input type="date" class="form-control" id="txt_fecha_labores" name="txt_fecha_labores">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Area Correspondiente</label>
                                        <select name="cbo_areas" class="form-control" id="cbo_areas">
                                            <?php foreach ($dataArea as $data) : ?>
                                                <option value=" <?php echo $data->id_area ?>"> <?php echo $data->area ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <input type="submit" class="btn btn-primary" value="REGISTRAR" id="btn-registrar-trabajador" name="btn-registrar-trabajador">
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