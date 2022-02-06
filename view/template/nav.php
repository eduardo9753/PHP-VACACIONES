<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SIS-VACA<sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - areas -->
    <li class="nav-item  <?php echo $active_area ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class='bx bx-area'></i>
            <span>Gestion de Areas</span>
        </a>
        <div id="collapseTwo" class="collapse <?php echo $show_area ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Enlaces:</h6>
                <a class="collapse-item <?php echo ($ruta == 'Area') ? "active" : ""; ?>" href="Area">Areas</a>
                <a class="collapse-item <?php echo ($ruta == 'registrarArea') ? "active" : ""; ?>" href="registrarArea">Registrar una Area</a>
            </div>
        </div>
    </li>


    <!-- Nav Item - trabajador -->
    <li class="nav-item  <?php echo $active_trabajador ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTres" aria-expanded="true" aria-controls="collapseTwo">
            <i class='bx bx-body'></i>
            <span>Gestion de Trabajadores</span>
        </a>
        <div id="collapseTres" class="collapse <?php echo $show_trabajador ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Enlaces:</h6>
                <a class="collapse-item <?php echo ($ruta == 'Trabajador') ? "active" : ""; ?>" href="Trabajador">Trabajadores</a>
                <a class="collapse-item <?php echo ($ruta == 'registrarTrabajador') ? "active" : ""; ?>" href="registrarTrabajador">Registrar Trabajador</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - vacaciones -->
    <li class="nav-item  <?php echo $active_vacaciones ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCuatro" aria-expanded="true" aria-controls="collapseTwo">
            <i class='bx bxs-calendar'></i>
            <span>Gestion de Vacaciones</span>
        </a>
        <div id="collapseCuatro" class="collapse <?php echo $show_vacaciones ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Enlaces:</h6>
                <a class="collapse-item <?php echo ($ruta == 'registrarVacaciones') ? "active" : ""; ?>" href="registrarVacaciones">Registrar Vacaciones</a>
            </div>
        </div>
    </li>



    <!-- Nav Item - estadistica -->
    <li class="nav-item  <?php echo $active_estadistica ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class='bx bxs-pie-chart-alt-2 bx-burst'></i>
            <span>ESTADISTICAS</span>
        </a>
        <div id="collapseUtilities" class="collapse <?php echo $show_estadistica ?>" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">GRAFICOS Y ESTADOS:</h6>
                <a class="collapse-item <?php echo ($ruta == 'Graficos') ? "active" : ""; ?>" href="Graficos">Graficos</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>


    <!-- ACTUALIZAR MI USUARIO -->
    <li class="nav-item  <?php echo $active_profile ?>">
        <a class="nav-link <?php echo ($ruta == 'Profile') ? "active" : ""; ?>" href="Profile">
            <i class='bx bxs-user-pin'></i>
            <span>Profile</span></a>
    </li>

    <!-- CERRAR SESSION -->
    <li class="nav-item">
        <a class="nav-link" href="Close">
            <i class='bx bx-log-out bx-tada'></i>
            <span> Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>