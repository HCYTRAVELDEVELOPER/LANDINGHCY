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



        <?php

        //echo $emailSesion;

        ?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <br>



            <?php
            // Incluir datos de conexión a la base de datos
            include "../../config.php";

            // Obtener las empresas de la tabla
            $sqlEmpresas = "SELECT ID, NOMEMPRESA, DIRECCION, TELEFONO, CORREO, REPRESENTNTELEGAL, NIT, DESCRIPCION, DOCUMENTOS FROM empresas";
            $resultEmpresas = $conn->query($sqlEmpresas);

            if ($resultEmpresas->num_rows > 0) {
                // Mostrar datos en la tabla
                echo '<div class="card">
    <div class="card-header">
        <h3 class="card-title">Administrar Empresas</h3>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre Empresa</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th>Representante Legal</th>
                    <th>NIT</th>
                    <th>Descripción</th>
                    <th>Documentos</th>
                </tr>
            </thead>
            <tbody>';
                while ($row = $resultEmpresas->fetch_assoc()) {
                    echo '<tr>
            <td>' . $row["ID"] . '</td>
            <td>' . $row["NOMEMPRESA"] . '</td>
            <td>' . $row["DIRECCION"] . '</td>
            <td>' . $row["TELEFONO"] . '</td>
            <td>' . $row["CORREO"] . '</td>
            <td>' . $row["REPRESENTNTELEGAL"] . '</td>
            <td>' . $row["NIT"] . '</td>
            <td>' . $row["DESCRIPCION"] . '</td>
            <td>
                <button class="btn btn-info" onclick="openDocumentModal(\'' . $row["DOCUMENTOS"] . '\')">
                    Ver Documento
                </button>
            </td>
        </tr>';
                }
                echo '</tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Nombre Empresa</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Representante Legal</th>
                <th>NIT</th>
                <th>Descripción</th>
                <th>Documentos</th>
            </tr>
        </tfoot>
        </table>
    </div>
    </div>';
            } else {
                echo "<h4 style='color: red'>No se encontraron empresas.</h4>";
            }

            // Cerrar la conexión
            $conn->close();
            ?>

            <!-- Modal para mostrar el documento -->
            <div class="modal fade" id="documentModal" tabindex="-1" role="dialog" aria-labelledby="documentModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="documentModalLabel">Documento</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <iframe id="documentFrame" src="" style="width: 100%; height: 500px;" frameborder="0"></iframe>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                // Función para abrir el modal con el documento
                function openDocumentModal(documentUrl) {
                    document.getElementById('documentFrame').src = documentUrl;
                    $('#documentModal').modal('show');
                }
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