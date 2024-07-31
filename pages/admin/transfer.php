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
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="../../plugins/bs-stepper/css/bs-stepper.min.css">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="../../plugins/dropzone/min/dropzone.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- Estilos de Toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

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


            <?php
            error_reporting(E_ALL);
            ini_set('display_errors', 1);
            include "../../config.php";



            // Verificar si 'insertGet' está definido y no está vacío
            if (isset($_GET['insertGet']) && $_GET['insertGet'] == "1") {
                echo '
                    <script>
                        toastr["success"]("", "Se insertó el transfer correctamente!");
                    
                        toastr.options = {
                            "closeButton": false,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": false,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "400",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }
                    </script>';
            }



            ?>


            <div class="container"> <br>

            <h3><strong>Agregar transfer al sistema</strong></h3><br>

                <form id="insertTransfer" method="post" action="insertTransfer.php">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="pais">País</label>
                            <select class="form-control" id="pais" name="pais" required>
                                <?php
                                $sqlPais = "SELECT ID, NOMBRE FROM pais";
                                $resultPais = $conn->query($sqlPais);
                                while ($row = $resultPais->fetch_assoc()) {
                                    echo "<option value='" . $row['NOMBRE'] . "'>" . $row['NOMBRE'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ciudad">Ciudad</label>
                            <input type="text" class="form-control" id="ciudad" name="ciudad" required>
                        </div>
                        <div class="form-group">
                            <label for="origen">Origen</label>
                            <input type="text" class="form-control" id="origen" name="origen" required>
                        </div>
                        <div class="form-group">
                            <label for="destino">Destino</label>
                            <input type="text" class="form-control" id="destino" name="destino" required>
                        </div>
                        <div class="form-group">
                            <label for="vehiculo">Vehículo</label>
                            <select class="form-control" id="vehiculo" name="vehiculo" required>
                                <option value="" readonly>- Selecciona -</option>
                                <?php
                                $sqlVehiculo = "SELECT ID, NOMBRE FROM vehiculo";
                                $resultVehiculo = $conn->query($sqlVehiculo);
                                while ($row = $resultVehiculo->fetch_assoc()) {
                                    echo "<option value='" . $row['ID'] . " - " . $row['NOMBRE'] . " " . $row['APELLIDO'] . "'>" . $row['NOMBRE'] . "</option>";
                                }
                                ?>
                            </select>
                            <input type="hidden" id="idVehiculo" name="idVehiculo">
                        </div>
                        <div class="form-group">
                            <label for="asientos">Asientos</label>
                            <input type="number" class="form-control" id="asientos" name="asientos" required>
                        </div>
                        <div class="form-group">
                            <label for="nomConductor">Nombre Conductor</label>
                            <select class="form-control" id="nomConductor" name="nomConductor" required>
                                <option value="" readonly>- Selecciona -</option>
                                <?php
                                $sqlConductor = "SELECT ID, NOMBRE, APELLIDO FROM conductor";
                                $resultConductor = $conn->query($sqlConductor);
                                while ($row = $resultConductor->fetch_assoc()) {
                                    echo "<option value='" . $row['ID'] . " - " . $row['NOMBRE'] . " " . $row['APELLIDO'] . "'>" . $row['NOMBRE'] . " " . $row['APELLIDO'] . "</option>";
                                }
                                ?>
                            </select>
                            <input type="hidden" id="idConductor" name="idConductor">
                        </div>
                        <div class="form-group">
                            <label for="precio">Precio</label>
                            <input type="number" class="form-control" id="precio" name="precio" required>
                        </div>
                        <div class="form-group">
                            <label for="estado">Estado</label>
                            <select class="form-control" id="estado" name="estado" required>
                                <option value="ACTIVO">ACTIVO</option>
                                <option value="SIN SERVICIO">SIN SERVICIO</option>
                                <option value="MANTENIMIENTO">MANTENIMIENTO</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="insertTrasnfer.php" type="button" class="btn btn-secondary" data-dismiss="modal">Volver</a>
                        <button type="submit" class="btn btn-primary">Guardar cambios</button>
                    </div>
                </form>
            </div>

            <script>
                // Script para actualizar los campos ocultos con los valores seleccionados en los dropdowns
                document.getElementById('vehiculo').addEventListener('change', function() {
                    document.getElementById('idVehiculo').value = this.value;
                });

                document.getElementById('nomConductor').addEventListener('change', function() {
                    document.getElementById('idConductor').value = this.value;
                });
            </script>












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

    <!-- Select2 -->
    <script src="../../plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- InputMask -->
    <script src="../../plugins/moment/moment.min.js"></script>
    <script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- date-range-picker -->
    <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- BS-Stepper -->
    <script src="../../plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <!-- dropzonejs -->
    <script src="../../plugins/dropzone/min/dropzone.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>


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