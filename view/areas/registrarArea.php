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
                        <form action="" method="POST" id="frmAjaxRegistrarArea">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Escriba la Nueva Area</label>
                                        <input type="text" class="form-control" name="txt_area" id="txt_area" placeholder="Digite el Area a crear">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <input type="submit" class="btn btn-primary" value="REGISTRAR AREA" id="btn-registrar-area" name="btn-registrar-area">
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