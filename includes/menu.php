      
      <?php
      //INICIAR VARIABLES DE SESIÓN
      session_start();
      ?>

      

      <link rel="stylesheet" href="http://localhost/hcy/LANDINGHCY/dist/css/menu.css">


      <nav class="main-header navbar navbar-expand-md navbar-light navbar-white fixed-top">
        <div class="container">
          <a href="http://localhost/hcy/LANDINGHCY/index.php" class="navbar-brand">
            <img src="http://localhost/hcy/LANDINGHCY/dist/img/logos/logo_principal.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-4" style="opacity: .9">
            <span class="brand-text font-weight-bold">HCY Travel</span>
          </a>

          <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            Menú <!-- Agrega un texto opcional para mejorar la accesibilidad -->
          </button>


          <div class="collapse navbar-collapse order-3" id="navbarCollapse">


            <!-- Left navbar links -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="http://localhost/hcy/LANDINGHCY/index.php" class="nav-link">Inicio</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Transfers</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">La empresa</a>
              </li>
              <li class="nav-item">
                <a href="http://localhost/hcy/LANDINGHCY/pages/empresas/registroEmpresas.php" target="_blank" class="nav-link">
                  Registro Empresas &nbsp;<i class="fas fa-arrow-alt-circle-right" style="transform: rotate(-40deg); font-size: 0.8em;"></i>
                </a>
              </li>
              <li class="nav-item">
                <a href="https://www.tripadvisor.com.ar/Attraction_Review-g312806-d19501798-Reviews-HCY_Travel-Puerto_Iguazu_Province_of_Misiones_Litoral.html" target="_blank" class="nav-link">
                  TripAdvisor &nbsp;<i class="fas fa-arrow-alt-circle-right" style="transform: rotate(-40deg); font-size: 0.8em;"></i>
                </a>
              </li>


            </ul>


          </div>

          <!-- Right navbar links -->
          <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">



            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">15</span>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-header">15 Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <i class="fas fa-envelope mr-2"></i> 4 new messages
                  <span class="float-right text-muted text-sm">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <i class="fas fa-users mr-2"></i> 8 friend requests
                  <span class="float-right text-muted text-sm">12 hours</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <i class="fas fa-file mr-2"></i> 3 new reports
                  <span class="float-right text-muted text-sm">2 days</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
              </div>
            </li>


            <!-- VALIDAR SI EXISTE SESIÓN Y MOSTRAR ÍCONO DE USUARIO -->
            <?php
            // VERIFICAR SI LA SESIÓN EXISTE Y MOSTRAR ÍCONO DE USER
            if (isset($_SESSION['name'])) {
              echo "<style> 

              .login-item {
                display: none;
              }
              .user-item{
                display: block;
              }

              </style>";
            } else {
              echo "<style> 

              .login-item {
                display: block;
              }
              .user-item{
                display: none;
              }

              </style>";
            }
            ?>
            <!-- FIN VALIDAR SI EXISTE SESIÓN Y MOSTRAR ÍCONO DE USUARIO -->


            <!-- LOGIN -->
            <li class="nav-item dropdown">
              <a class="login-item nav-link" href="http://localhost/hcy/LANDINGHCY/pages/login/login.php" title="Iniciar sesión" type="hidden">
                <i class="fas fa-sign-in-alt"></i>
              </a>
              <a class="user-item nav-link" href="http://localhost/hcy/LANDINGHCY/pages/login/login.php" title="Iniciar sesión" type="hidden">
                <i class="far fa-user"></i>
              </a>
            </li>
            <!-- FIN LOGIN -->

          </ul>
        </div>
      </nav>