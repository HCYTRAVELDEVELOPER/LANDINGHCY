  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
              <a href="../admin/main.php" class="nav-link">Home</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
              <a href="#" class="nav-link">Contact</a>
          </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
          <!-- Navbar Search -->
          <li class="nav-item">
              <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                  <i class="fas fa-search"></i>
              </a>
              <div class="navbar-search-block">
                  <form class="form-inline">
                      <div class="input-group input-group-sm">
                          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                          <div class="input-group-append">
                              <button class="btn btn-navbar" type="submit">
                                  <i class="fas fa-search"></i>
                              </button>
                              <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                  <i class="fas fa-times"></i>
                              </button>
                          </div>
                      </div>
                  </form>
              </div>
          </li>








          <!-- Notifications Dropdown Menu -->
          <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="far fa-bell"></i>
                  <span class="badge badge-warning navbar-badge">15</span>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  <span class="dropdown-item dropdown-header">15 Notifications</span>
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
          <!-- Messages Dropdown Menu -->
          <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="far fa-user"></i>
                  <span class="badge badge-danger navbar-badge"></span>
              </a>
              <div class="dropdown-menu dropdown-menu dropdown-menu-right">
                  <a href="#" class="dropdown-item">
                      Administrar usuario
                  </a>
                  <a href="http://129.151.97.70/LANDINGHCY/pages/login/logout.php" class="dropdown-item">
                      Cerrar sesión
                  </a>
              </div>
          </li>
          <li class="nav-item">
              <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                  <i class="fas fa-expand-arrows-alt"></i>
              </a>
          </li>
      </ul>
      <div id="google_translate_element" class="custom-translate"></div>
  </nav>
  <!-- /.navbar -->






  <!-- Agregar el script de Google Translate al final del archivo -->
<script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({
      pageLanguage: 'es', // Idioma predeterminado de tu sitio
      includedLanguages: 'de,en,es,fr,it,ja,ko,pt,ru,zh-CN,zh-TW', // Idiomas que deseas soportar
      layout: google.translate.TranslateElement.InlineLayout.SIMPLE
    }, 'google_translate_element');
  }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>




<style>
  .custom-translate {
    position: fixed;
    /* Mantiene el elemento fijo en una posición específica */
    bottom: 15px;
    /* Ajusta la distancia desde el borde inferior de la ventana */
    right: 15px;
    /* Ajusta la distancia desde el borde derecho de la ventana */
    z-index: 9999;
    /* Asegura que el widget esté sobre otros elementos */
    border-radius: 4px;
    /* Bordes redondeados */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    /* Sombra sutil */
    padding: 10px;
    /* Espaciado interno */
    width: auto;
    /* Ancho automático para que no afecte otros elementos */
    height: auto;
    /* Altura automática para que no afecte otros elementos */
  }

  .custom-translate .goog-te-combo {
    background-color: #007bff;
    /* Color de fondo del botón */
    border: none;
    /* Sin borde */
    border-radius: 4px;
    /* Bordes redondeados */
    color: #ffffff;
    /* Color del texto */
    padding: 5px 10px;
    /* Espaciado interno */
    font-size: 14px;
    /* Tamaño de fuente */
    transition: background-color 0.3s, color 0.3s;
    /* Transición suave para el color */
  }

  .custom-translate .goog-te-combo:hover {
    background-color: #0056b3;
    /* Color de fondo al pasar el cursor */
    color: #ffffff;
    /* Color del texto al pasar el cursor */
  }
</style>



