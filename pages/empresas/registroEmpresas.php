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
    <!-- <link rel="stylesheet" href="../../dist/css/transfer/detalleTransfer.css"> -->


    <!-- CSS PARA ESTILOS DEL FORM REGISTRO EMPRESAS -->
    <link rel="stylesheet" href="../../dist/css/empresas/registroEmpresas.css">


</head>




<body class="hold-transition sidebar-collapse layout-top-nav">
    <div class="wrapper">
        <!-- Navbar -->
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/hcy/LANDINGHCY/includes/menu.php'; ?>
        <!-- /.navbar -->


        <div class="container fade-in mt-5"><br>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="form-container">
                        <h2 class="text-center form-title"><i class="fas fa-building"></i> Registro de Empresa</h2> <br>
                        <form id="registroEmpresaForm" method="post" action="registroDatosEmpresa.php" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nombreEmpresa"><i class="fas fa-building"></i> Nombre de la Empresa</label>
                                <input type="text" class="form-control" id="nombreEmpresa" name="nombreEmpresa" required>
                            </div>
                            <div class="form-group">
                                <label for="direccion"><i class="fas fa-map-marker-alt"></i> Dirección</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" required>
                            </div>
                            <div class="form-group">
                                <label for="telefono"><i class="fas fa-phone-alt"></i> Teléfono</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" required>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="fas fa-envelope"></i> Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="representante"><i class="fas fa-user-tie"></i> Representante Legal</label>
                                <input type="text" class="form-control" id="representante" name="representante" required>
                            </div>
                            <div class="form-group">
                                <label for="nit"><i class="fas fa-id-card"></i> NIT</label>
                                <input type="text" class="form-control" id="nit" name="nit" required>
                            </div>
                            <div class="form-group">
                                <label for="descripcion"><i class="fas fa-info-circle"></i> Descripción de la Empresa</label>
                                <textarea class="form-control" id="descripcion" name="descripcion" rows="4" required></textarea>
                            </div><br><br>
                            <div class="form-group">
                                <label for="documentos"><i class="fas fa-file-upload"></i> Adjuntar Documentos</label>
                                <input type="file" class="form-control-file" id="documentos" name="documentos[]" multiple required>
                                <small id="fileHelp" class="form-text text-muted mt-2"></small>
                            </div><br>
                            <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-paper-plane"></i> Enviar Registro</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.getElementById('documentos').addEventListener('change', function() {
                const fileInput = this;
                const fileList = fileInput.files;
                const fileHelp = document.getElementById('fileHelp');
                fileHelp.innerHTML = ''; // Limpiar el contenido anterior
                if (fileList.length > 0) {
                    let fileNames = 'Archivos seleccionados:<br>';
                    for (let i = 0; i < fileList.length; i++) {
                        fileNames += fileList[i].name + '<br>';
                    }
                    fileHelp.innerHTML = fileNames;
                } else {
                    fileHelp.innerHTML = 'No se han seleccionado archivos.';
                }
            });
        </script>













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
</body>

</html>