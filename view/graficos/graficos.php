<?php include_once('view/template/head.php') ?>

<!-- Sidebar -->
<?php include_once('view/template/nav.php'); ?>
<!-- End of Sidebar -->

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
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for=""># Vacaciones en Curso</label>
                                    <input type="text" class="form-control" name="txt_vaca_curso" id="txt_vaca_curso" value="<?php echo $dataVacacionesEnCursos ?>" disabled>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for=""># Vacaciones Rechazadas</label>
                                    <input type="text" class="form-control" name="txt_vaca_rechazo" id="txt_vaca_rechazo" value="<?php echo $dataVacacionesRechazadas ?>" disabled>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for=""># Vacaciones Terminadas</label>
                                    <input type="text" class="form-control" name="txt_vaca_termino" id="txt_vaca_termino" value="<?php echo $dataVacacionesTerminadas ?>" disabled>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for=""># TOTAL</label>
                                    <input type="text" class="form-control" name="txt_total" id="txt_total" value="<?php echo $dataTotal ?>" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <canvas id="myChart"></canvas>
                        </div>
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