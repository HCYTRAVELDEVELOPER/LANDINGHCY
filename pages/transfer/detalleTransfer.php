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
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../../dist/css/transfer/detalleTransfer.css">

</head>




<body class="hold-transition sidebar-collapse layout-top-nav">
    <div class="wrapper">
        <!-- Navbar -->
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/hcy/LANDINGHCY/includes/menu.php'; ?>
        <!-- /.navbar -->


        <div class="detalle-transfer p-5 mb-4 bg-light rounded-5">
            <div class="container-fluid py-5">
                <b>
                <h2>Detalle Transfer</h2><br>
                </b>
                <div class="row">
                    <div class="col-md-8">
                        <div class="detail-item">
                            <div class="icon-detail">
                                <i class="fas fa-plane-departure icon"></i>
                            </div>
                            <div class="text-detail">
                                <strong>País</strong>
                                <p>Texto debajo de País</p>
                            </div>
                        </div>
                        <div class="detail-item">
                            <div class="icon-detail">
                                <i class="fas fa-plane-departure icon"></i>
                            </div>
                            <div class="text-detail">
                                <strong>País</strong>
                                <p>Texto debajo de País</p>
                            </div>
                        </div>
                        <div class="detail-item">
                            <div class="icon-detail">
                                <i class="fas fa-map-marker-alt icon"></i>
                            </div>
                            <div class="text-detail">
                                <strong>País</strong>
                                <p>Texto debajo de País</p>
                            </div>
                        </div>
                        <div class="detail-item">
                            <div class="icon-detail">
                                <i class="fas fa-car icon"></i>
                            </div>
                            <div class="text-detail">
                                <strong>País</strong>
                                <p>Texto debajo de País</p>
                            </div>
                        </div>
                        <div class="detail-item">

                            <div class="icon-detail">
                                <i class="fas fa-user-friends icon"></i>
                            </div>
                            <div class="text-detail">
                                <strong>País</strong>
                                <p>Texto debajo de País</p>
                            </div>
                        </div>
                        <div class="detail-item">
                            <div class="icon-detail">
                                <i class="fas fa-dollar-sign icon"></i>
                            </div>
                            <div class="text-detail">
                                <strong>País</strong>
                                <p>Texto debajo de País</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-right">
                        <img src="http://localhost/hcy/LANDINGHCY/dist/img/detalleTransfer/detalleTransfer.png" alt="Imagen del vehículo" class="img-fluid">
                    </div>
                </div>
                <div class="text-right mt-4">
                    <button class="boton-reservar btn btn">Reservar Ahora</button>
                </div>
            </div>
        </div>













        <!-- Main Footer -->
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/hcy/LANDINGHCY/includes/footer.php'; ?>
        <!-- Fin Main Footer -->

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="../../dist/js/adminlte.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="../../plugins/chart.js/Chart.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../../dist/js/pages/dashboard3.js"></script>
    <!-- INCLUIR JS PARA SELECCIÓN DE TRANSFERS -->
    <script src="../../dist/js/cards_transfers.js"></script>
</body>

</html>