<?php
//INICIAR VARIABLES DE SESIÓN
session_start();

// VERIFICAR SI LA SESIÓN EXISTE
if (!isset($_SESSION['name'])) {
    echo "<script>
          window.location.href = 'http://localhost/hcy/LANDINGHCY/pages/login/login.php';
        </script>";
    exit(); // Detener la ejecución del script PHP
} else {
    //echo "Sesión existe";
}



//incluir datos bd config
include "../../config.php";


// Obtener el ID de la reserva desde GET
$idReservaGet = $_GET['idReservaGet'];

// Consulta para obtener los datos de la reserva
$query = "SELECT * FROM reservas WHERE ID = $idReservaGet";
$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $reserva = mysqli_fetch_assoc($result);
    $fechaReserva = isset($reserva['FECHARESERVA']) ? date('Y-m-d', strtotime($reserva['FECHARESERVA'])) : '';
    $fechaCreaReserva = isset($reserva['FECHACREARESERVA']) ? date('Y-m-d', strtotime($reserva['FECHACREARESERVA'])) : '';
    $fechaModReserva = date('Y-m-d'); // Fecha actual
}


?>




<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HCY Travel | Admin</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../../plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Logo Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="../../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>



        <!-- Navbar -->
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/hcy/LANDINGHCY/includes/menuAdmin.php'; ?>
        <!-- /.navbar -->

        <!-- Aside menu Main Sidebar Container -->
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/hcy/LANDINGHCY/includes/asideAdmin.php'; ?>
        <!-- Fin Aside menu Main Sidebar Container -->




        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">




            <div class="container">

                <form id="editForm" method="post" action="updateReserva.php">
                    <input type="hidden" id="idReserva" name="idReserva" value="<?php echo isset($reserva['ID']) ? $reserva['ID'] : ''; ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="codReserva">Código Reserva</label>
                            <input type="text" class="form-control" id="codReserva" name="codReserva" value="<?php echo isset($reserva['CODRESERVA']) ? $reserva['CODRESERVA'] : ''; ?>" required readonly>
                        </div>
                        <div class="form-group">
                            <label for="paisReserva">País Reserva</label>
                            <input type="text" class="form-control" id="paisReserva" name="paisReserva" value="<?php echo isset($reserva['PAISRESERVA']) ? $reserva['PAISRESERVA'] : ''; ?>" required readonly>
                        </div>
                        <div class="form-group">
                            <label for="origenReserva">Origen Reserva</label>
                            <input type="text" class="form-control" id="origenReserva" name="origenReserva" value="<?php echo isset($reserva['ORIGENRESERVA']) ? $reserva['ORIGENRESERVA'] : ''; ?>" required readonly>
                        </div>
                        <div class="form-group">
                            <label for="destinoReserva">Destino Reserva</label>
                            <input type="text" class="form-control" id="destinoReserva" name="destinoReserva" value="<?php echo isset($reserva['DESTINORESERVA']) ? $reserva['DESTINORESERVA'] : ''; ?>" required readonly>
                        </div>
                        <div class="form-group">
                            <label for="vehiculoReserva">Vehículo Reserva</label>
                            <input type="text" class="form-control" id="vehiculoReserva" name="vehiculoReserva" value="<?php echo isset($reserva['VEHICULORESERVA']) ? $reserva['VEHICULORESERVA'] : ''; ?>" required readonly>
                        </div>
                        <div class="form-group">
                            <label for="precioReserva">Precio Reserva</label>
                            <input type="number" class="form-control" id="precioReserva" name="precioReserva" value="<?php echo isset($reserva['PRECIORESERVA']) ? $reserva['PRECIORESERVA'] : ''; ?>" required readonly>
                        </div>
                        <div class="form-group">
                            <label for="nomClienteReserva">Nombre Cliente</label>
                            <input type="text" class="form-control" id="nomClienteReserva" name="nomClienteReserva" value="<?php echo isset($reserva['NOMCLIENTERESERVA']) ? $reserva['NOMCLIENTERESERVA'] : ''; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="apeClienteReserva">Apellido Cliente</label>
                            <input type="text" class="form-control" id="apeClienteReserva" name="apeClienteReserva" value="<?php echo isset($reserva['APECLIENTERESERVA']) ? $reserva['APECLIENTERESERVA'] : ''; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo isset($reserva['EMAIL']) ? $reserva['EMAIL'] : ''; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="tipoIdClienteReserva">Tipo ID Cliente</label>
                            <input type="text" class="form-control" id="tipoIdClienteReserva" name="tipoIdClienteReserva" value="<?php echo isset($reserva['TIPOIDCLIENTERESERVA']) ? $reserva['TIPOIDCLIENTERESERVA'] : ''; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="idClienteReserva">ID Cliente</label>
                            <input type="text" class="form-control" id="idClienteReserva" name="idClienteReserva" value="<?php echo isset($reserva['IDCLIENTERESERVA']) ? $reserva['IDCLIENTERESERVA'] : ''; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="fechaReserva">Fecha Reserva</label>
                            <input type="date" class="form-control" id="fechaReserva" name="fechaReserva" value="<?php echo $fechaReserva; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="fechaCreaReserva">Fecha Creación</label>
                            <input type="date" class="form-control" id="fechaCreaReserva" name="fechaCreaReserva" value="<?php echo $fechaCreaReserva; ?>" required readonly>
                        </div>
                        <div class="form-group">
                            <label for="fechaModReserva">Fecha Modificación</label>
                            <input type="date" class="form-control" id="fechaModReserva" name="fechaModReserva" value="<?php echo $fechaModReserva; ?>" required readonly>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="misReservas.php" type="button" class="btn btn-secondary" data-dismiss="modal">Volver</a>
                        <button type="submit" class="btn btn-primary">Guardar cambios</button>
                    </div>
                </form>

            </div>






            <!-- /.content -->
        </div>




        <!-- Main Footer -->
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/hcy/LANDINGHCY/includes/footerAdmin.php'; ?>
        <!-- Fin Main Footer -->
    </div>
    <!-- ./FIN wrapper -->



    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="../../plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="../../plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="../../plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="../../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../../plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../../plugins/moment/moment.min.js"></script>
    <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="../../plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../../dist/js/pages/dashboard.js"></script>


    <!-- DataTables  & Plugins -->
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../plugins/jszip/jszip.min.js"></script>
    <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <!-- PARA CONTROLAR TABLAS -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>



</body>

</html>