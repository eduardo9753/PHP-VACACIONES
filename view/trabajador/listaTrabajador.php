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
                <h1 class="h3 mb-0 text-gray-800"><?php echo $titulo ?> <a href="dashboard" class="btn btn-success"><i class='bx bx-refresh bx-spin'></i></a></h1>
                <?php include_once('view/helpers/botonDashboard.php'); ?>
            </div>
            <!-- Content Row -->
            <div class="row">
                <!-- Page-header end -->
                <div class="card mx-auto">
                    <div class="card-body">
                        <table id="datatable" class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">DOCUMENTO</th>
                                    <th scope="col">NOMBRES</th>
                                    <th scope="col">APELLIDO 1</th>
                                    <th scope="col">APELLIDO 2</th>
                                    <th scope="col">ACCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($dataTrabajador as $data) : ?>
                                    <tr>
                                        <th scope="row"><?php echo $data->dni ?></th>
                                        <td><?php echo $data->nombres ?></td>
                                        <td><?php echo $data->apellido_uno ?></td>
                                        <td><?php echo $data->apellido_dos ?></td>
                                        <td>
                                            <form action="editarTrabajador" method="POST">
                                                <input type="text" name="txt_id_trabajador" id="txt_id_trabajador" value="<?php echo $data->id_trabajador ?>" hidden>
                                                <input type="submit" class="btn btn-danger" value="EDITAR">
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
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