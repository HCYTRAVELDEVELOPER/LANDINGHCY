<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="../index.php" class="brand-link">
    <img src="../dist/img/logos/logo_principal.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">HCY Travel</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?php echo htmlspecialchars($_SESSION['name']); ?></a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>




    <?php
    //INCLUIR DATOS DE SESION
    include_once "datosUsuarioSesion.php";
    //echo "<p style='color: white'>" . $rolSesion . "</p>";
    ?>




    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Administrar
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">


            <!-- VALIDACIONES EN PHP PARA MOSTRAR ACCESOS SEGUN ROL -->
            <?php
            //VALIDACIÓN SESIÓN ADMINISTRADOR
            if ($rolSesion == "ADMINISTRADOR") {
            ?>
              <li class="nav-item">
                <a href="../admin/misReservas.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mis Reservas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Agregar Transfer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Agregar País</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Agregar Conductor</p>
                </a>
              </li>
            <?php
            } //FIN IF
            ?>
            <!-- FIN VALIDACIONES EN PHP PARA MOSTRAR ACCESOS SEGUN ROL -->





            <!-- VALIDACIONES EN PHP PARA MOSTRAR ACCESOS SEGUN ROL -->
            <?php

            //VALIDACIÓN SESIÓN CLIENTE
            if ($rolSesion == "CLIENTE") {

            ?>
              <li class="nav-item">
                <a href="../admin/misReservas.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mis Reservas</p>
                </a>
              </li>
            <?php
            } //FIN IF
            ?>
            <!-- FIN VALIDACIONES EN PHP PARA MOSTRAR ACCESOS SEGUN ROL -->










          </ul>
        </li>



        <!-- VALIDACIONES EN PHP PARA MOSTRAR ACCESOS REPORTES SEGUN ROL -->
        <?php

        //VALIDACIÓN SESIÓN CLIENTE
        if ($rolSesion == "ADMINISTRADOR") {

        ?>


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Charts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ChartJS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Flot</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/uplot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>uPlot</p>
                </a>
              </li>
            </ul>
          </li>


        <?php
        } //FIN IF
        ?>
        <!-- FIN VALIDACIONES EN PHP PARA MOSTRAR ACCESOS REPORTES SEGUN ROL -->








        <li class="nav-header">EXAMPLES</li>
        <li class="nav-item">
          <a href="pages/calendar.html" class="nav-link">
            <i class="nav-icon far fa-calendar-alt"></i>
            <p>
              Calendar
              <span class="badge badge-info right">2</span>
            </p>
          </a>
        </li>




        <li class="nav-header">IMPORTANTE</li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-circle text-danger"></i>
            <p class="text">Important</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-circle text-warning"></i>
            <p>Warning</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-circle text-info"></i>
            <p>Informational</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>