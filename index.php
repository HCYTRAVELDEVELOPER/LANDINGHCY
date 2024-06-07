<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <title>HCY Travel | Dashboard 3</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/card_paises.css">
  <link rel="stylesheet" href="dist/css/card_transfer.css">
  <link rel="stylesheet" href="dist/css/nuestros_servicios.css">
  <link rel="stylesheet" href="dist/css/footer.css">
  <link rel="stylesheet" href="dist/css/menu.css">
</head>



<body class="hold-transition sidebar-collapse layout-top-nav">
  <div class="wrapper">

    <!-- Navbar -->
    <?php include 'includes\menu.php'; ?>
    <!-- /.navbar -->

    <!--SLIDE PRINCIPAL-->

    <style>
      /*MODIFICACION SLIDER*/
      #carouselExampleControls {
        margin-top: -20%;
      }
    </style>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="dist/img/slide1.jpeg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="dist/img/slide1.jpeg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="dist/img/slide1.jpeg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- FIN SLIDE PRINCIPAL -->




    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <!-- INICIO CARDS PAISES -->
      <div class="container-center">
        <a href="#" class="country-box" id="argentina" style="text-decoration: none; color: inherit;">
          <div class="country-logo">
            <img src="dist/img/paises/argentina.jpg" alt="Bandera de Argentina">
          </div>
          <div class="country-name">Argentina</div>
        </a>
        <a href="#" class="country-box" id="brasil" style="text-decoration: none; color: inherit;">
          <div class="country-logo">
            <img src="dist/img/paises/brasil.png" alt="Bandera de Brasil">
          </div>
          <div class="country-name">Brasil</div>
        </a>
      </div>
      <!-- FIN CARDS PAISES -->









      <!-- INICIO CARDS TRANSFER -->
      <div id="cards-argentina" class="transfer-cards">

        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Transfers en <strong>Argentina</strong></h1>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->


        <div class="container">
          <div class="row no-gutters">
            <div class="col-md-4">
              <!-- Card Transfer 1 -->
              <a id="link_transfer" href="pages/transfer/detalleTransfer.php">
                <div class="card card_transfer">
                  <img src="dist/img/carros/car1.jpg" alt="Card Image" class="card-img-top">
                  <div class="card-body">
                    <h5 class="card-title">Santiago de Chile</h5><br><br>

                    <div class="botonesInfoCards">
                      <button class="disabled btn btn-transparent btn-sm">
                        <i class="fas fa-map-marker-alt"></i> Argentina
                      </button>
                      <button class="disabled btn btn-transparent btn-sm">
                        <i class="fas fa-car-side"></i> Transfer
                      </button>
                    </div>

                    <br>

                    <p class="card-text"><i class="fas fa-map-marker-alt"></i> <strong>Desde:</strong> Argentina Oeste</p>
                    <p class="card-text"><i class="fas fa-map-marker-alt"></i> <strong>Hacia:</strong> Argentina Centro</p>
                    <p class="price">$50 USD</p>
                    <span class="passengers"><i class="fas fa-user"></i> x4</span>
                  </div>
                </div>
              </a>
              <!-- /.Card Transfer 1 -->
            </div>
            <div class="col-md-4">
              <!-- Card Transfer 2 -->
              <a id="link_transfer" href="pages/transfer/detalleTransfer.php">
                <div class="card card_transfer">
                  <img src="dist/img/carros/car1.jpg" alt="Card Image" class="card-img-top">
                  <div class="card-body">
                    <h5 class="card-title">Santiago de Chile</h5><br><br>
                    <div class="botonesInfoCards">
                      <button class="disabled btn btn-transparent btn-sm">
                        <i class="fas fa-map-marker-alt"></i> Argentina
                      </button>
                      <button class="disabled btn btn-transparent btn-sm">
                        <i class="fas fa-car-side"></i> Transfer
                      </button>
                    </div>

                    <br>

                    <p class="card-text"><i class="fas fa-map-marker-alt"></i> <strong>Desde:</strong> Argentina Oeste</p>
                    <p class="card-text"><i class="fas fa-map-marker-alt"></i> <strong>Hacia:</strong> Argentina Centro</p>
                    <p class="price">$50 USD</p>
                    <span class="passengers"><i class="fas fa-user"></i> x6</span>
                  </div>
                </div>
              </a>
              <!-- /.Card Transfer 2 -->
            </div>
            <div class="col-md-4">
              <!-- Card Transfer 2 -->
              <a id="link_transfer" href="pages/transfer/detalleTransfer.php">
                <div class="card card_transfer">
                  <img src="dist/img/carros/car1.jpg" alt="Card Image" class="card-img-top">
                  <div class="card-body">
                    <h5 class="card-title">Santiago de Chile</h5><br><br>
                    <div class="botonesInfoCards">
                      <button class="disabled btn btn-transparent btn-sm">
                        <i class="fas fa-map-marker-alt"></i> Argentina
                      </button>
                      <button class="disabled btn btn-transparent btn-sm">
                        <i class="fas fa-car-side"></i> Transfer
                      </button>
                    </div>

                    <br>

                    <p class="card-text"><i class="fas fa-map-marker-alt"></i> <strong>Desde:</strong> Argentina Oeste</p>
                    <p class="card-text"><i class="fas fa-map-marker-alt"></i> <strong>Hacia:</strong> Argentina Centro</p>
                    <p class="price">$50 USD</p>
                    <span class="passengers"><i class="fas fa-user"></i> x6</span>
                  </div>
                </div>
              </a>
              <!-- /.Card Transfer 2 -->
            </div>
          </div>
        </div>
      </div>

      <div id="cards-brasil" class="transfer-cards">

        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Transfers en <strong>Brasil</strong></h1>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->


        <div class="container">
          <div class="row no-gutters">
            <div class="col-md-4">
              <!-- Card Transfer 1 -->
              <a id="link_transfer" href="pages/transfer/detalleTransfer.php">
                <div class="card card_transfer">
                  <img src="dist/img/carros/car1.jpg" alt="Card Image" class="card-img-top">
                  <div class="card-body">
                    <h5 class="card-title">Rio de Janeiro</h5><br><br>
                    <div class="botonesInfoCards">
                      <button class="disabled btn btn-transparent btn-sm">
                        <i class="fas fa-map-marker-alt"></i> Brasil
                      </button>
                      <button class="disabled btn btn-transparent btn-sm">
                        <i class="fas fa-car-side"></i> Transfer
                      </button>
                    </div>

                    <br>

                    <p class="card-text"><i class="fas fa-map-marker-alt"></i> <strong>Desde:</strong> Brasil Oeste</p>
                    <p class="card-text"><i class="fas fa-map-marker-alt"></i> <strong>Hacia:</strong> Brasil Centro</p>
                    <p class="price">$50 USD</p>
                    <span class="passengers"><i class="fas fa-user"></i> x4</span>
                  </div>
                </div>
              </a>
              <!-- /.Card Transfer 1 -->
            </div>
            <div class="col-md-4">
              <!-- Card Transfer 2 -->
              <a id="link_transfer" href="pages/transfer/detalleTransfer.php">
                <div class="card card_transfer">
                  <img src="dist/img/carros/car1.jpg" alt="Card Image" class="card-img-top">
                  <div class="card-body">
                    <h5 class="card-title">Rio de Janeiro</h5><br><br>
                    <div class="botonesInfoCards">
                      <button class="disabled btn btn-transparent btn-sm">
                        <i class="fas fa-map-marker-alt"></i> Brasil
                      </button>
                      <button class="disabled btn btn-transparent btn-sm">
                        <i class="fas fa-car-side"></i> Transfer
                      </button>
                    </div>

                    <br>

                    <p class="card-text"><i class="fas fa-map-marker-alt"></i> <strong>Desde:</strong> Brasil Oeste</p>
                    <p class="card-text"><i class="fas fa-map-marker-alt"></i> <strong>Hacia:</strong> Brasil Centro</p>
                    <p class="price">$50 USD</p>
                    <span class="passengers"><i class="fas fa-user"></i> x6</span>
                  </div>
                </div>
              </a>
              <!-- /.Card Transfer 2 -->
            </div>
            <div class="col-md-4">
              <!-- Card Transfer 2 -->
              <a id="link_transfer" href="pages/transfer/detalleTransfer.php">
                <div class="card card_transfer">
                  <img src="dist/img/carros/car1.jpg" alt="Card Image" class="card-img-top">
                  <div class="card-body">
                    <h5 class="card-title">Rio de Janeiro</h5><br><br>
                    <div class="botonesInfoCards">
                      <button class="disabled btn btn-transparent btn-sm">
                        <i class="fas fa-map-marker-alt"></i> Brasil
                      </button>
                      <button class="disabled btn btn-transparent btn-sm">
                        <i class="fas fa-car-side"></i> Sedan
                      </button>
                    </div>

                    <br>

                    <p class="card-text"><i class="fas fa-map-marker-alt"></i> <strong>Desde:</strong> Brasil Oeste</p>
                    <p class="card-text"><i class="fas fa-map-marker-alt"></i> <strong>Hacia:</strong> Brasil Centro</p>
                    <p class="price">$50 USD</p>
                    <span class="passengers"><i class="fas fa-user"></i> x6</span>
                  </div>
                </div>
              </a>
              <!-- /.Card Transfer 2 -->
            </div>
          </div>
        </div>
      </div>
      <!-- FIN CARDS TRANSFER -->

      <!-- BOTON TODOS LOS TRANSFER -->
      <br><br>
      <div class="boton_transfer-container">
        <a href="#" class="boton_transfer">Todos los Transfer</a>
      </div>
      <br><br>
      <!-- FIN BOTON TODOS LOS TRANSFER -->


      <!-- INICIO TODOS LOS SERVICIOS -->
      <div class="container_nuestros_servicios">
        <div class="left_section_nuestros_servicios">
          <h1><strong>Nuestros Servicios</strong></h1>
          <p>Quasi est quaerat. Sit molestiae et. Provident ad dolorem occaecati eos iste. Soluta rerum quidem minus ut molestiae velit error quod. Excepturi quidem expedita molestias quas.</p>
          <p>Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat. Quasi aperiam sit non sit neque reprehenderit.</p>
          <a href="#" class="button_nuestros_servicios">Join our Team <span>&#8594;</span></a>
        </div>
        <div class="right_section_nuestros_servicios">
          <img src="dist/img/slide1.jpeg" alt="Nuestros Servicios">
        </div>
      </div>
      <!-- FIN TODOS LOS SERVICIOS -->



    </div>
    <!-- /.content-wrapper -->



    <!-- Main Footer -->
    <?php include 'includes/footer.php'; ?>
    <!-- Fin Main Footer -->






  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE -->
  <script src="dist/js/adminlte.js"></script>

  <!-- OPTIONAL SCRIPTS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard3.js"></script>
  <!-- INCLUIR JS PARA SELECCIÓN DE TRANSFERS -->
  <script src="dist/js/cards_transfers.js"></script>
</body>

</html>