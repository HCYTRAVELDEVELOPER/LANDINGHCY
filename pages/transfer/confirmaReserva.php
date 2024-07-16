<?php
//incluir config
include "../../config.php";

// Obtener ID del transfer desde el GET
if (isset($_GET['idTransferGet'])) {
    $idTransferGet = $_GET['idTransferGet'];

    // Consulta SQL para obtener los datos del transfer
    $sqlTransferConfirmaReserva = "SELECT * FROM transfer WHERE id = $idTransferGet";
    $resultTransferConfirmaReserva = $conn->query($sqlTransferConfirmaReserva);

    if ($resultTransferConfirmaReserva->num_rows > 0) {
        // Mostrar los datos en los campos correspondientes del HTML
        $row = $resultTransferConfirmaReserva->fetch_assoc();
        $pais = $row['PAIS'];
        $origen = $row['ORIGEN'];
        $destino = $row['DESTINO'];
        $vehiculo = $row['VEHICULO'];
        $idVehiculoReserva = $row['ID_VEHICULO'];
        $precio = $row['PRECIO'];
    } else {
        echo "No se encontraron resultados para el ID del transfer.";
    }
} else {
    echo "No se proporcionó un ID del transfer.";
}

?>

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
    <link rel="stylesheet" href="../../dist/css/transfer/confirmaReserva.css">

</head>




<body class="hold-transition sidebar-collapse layout-top-nav">
    <div class="wrapper">
        <!-- Navbar -->
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/hcy/LANDINGHCY/includes/menu.php'; ?>
        <!-- /.navbar -->






        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">


            <br><br><br>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header align-end">
                        <h1 class="card-title">Resumen de compra</h1>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <!-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button> -->
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-7 order-2 order-md-1">
                                <div class="row">
                                    <div class="col-12 col-sm-4">
                                        <div class="info-box bg-light">
                                            <div class="info-box-content">
                                                <span class="info-box-text text-center text-muted">País</span>
                                                <span class="info-box-number text-center text-muted mb-0"><?php echo isset($pais) ? htmlspecialchars($pais) : ''; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="info-box bg-light">
                                            <div class="info-box-content">
                                                <span class="info-box-text text-center text-muted">Orígen</span>
                                                <span class="info-box-number text-center text-muted mb-0"><?php echo isset($origen) ? htmlspecialchars($origen) : ''; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="info-box bg-light">
                                            <div class="info-box-content">
                                                <span class="info-box-text text-center text-muted">Destino</span>
                                                <span class="info-box-number text-center text-muted mb-0"><?php echo isset($destino) ? htmlspecialchars($destino) : ''; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>





                                <div class="row">
                                    <div id="cardDatosContacto" class="card card-primary">
                                        <div class="card-body">



                                            <form method="post" action="consolidaDatosReserva.php">

                                                <!-- INPUTS OCULTOS PARA LLEVAR DATOS -->
                                                <input type="hidden" name="pais" value="<?php echo $pais; ?>">
                                                <input type="hidden" name="origen" value="<?php echo $origen; ?>">
                                                <input type="hidden" name="destino" value="<?php echo $destino; ?>">
                                                <input type="hidden" name="vehiculo" value="<?php echo $vehiculo; ?>">
                                                <input type="hidden" name="idVehiculoReserva" value="<?php echo $idVehiculoReserva; ?>">
                                                <input type="hidden" name="precio" value="<?php echo $precio; ?>">


                                                <!-- Nombre y Apellido -->
                                                <div class="form-group">
                                                    <label>Nombre:</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Nombre" name="nomCliente" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Apellido:</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Apellido" name="apeCliente" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="tipoIdCliente">Tipo ID</label>
                                                    <select class="form-control" id="tipoIdCliente" name="tipoIdCliente" required>
                                                        <option value="">Seleccione...</option>
                                                        <option value="CC">Cédula de Ciudadanía</option>
                                                        <option value="TI">Tarjeta de Identidad</option>
                                                        <option value="CE">Cédula de Extranjería</option>
                                                        <option value="PA">Pasaporte</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Número ID:</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="ID" name="idCliente" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="fas fa-num"></i></span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Email -->
                                                <div class="form-group">
                                                    <label>Email:</label>
                                                    <div class="input-group">
                                                        <input type="email" class="form-control" placeholder="Email" name="email" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Teléfono -->
                                                <div class="form-group">
                                                    <label>Teléfono:</label>
                                                    <div class="input-group">
                                                        <input type="tel" class="form-control" placeholder="Teléfono" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Fecha de viaje -->
                                                <div class="form-group">
                                                    <label>Fecha de viaje:</label>
                                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                                        <input type="date" class="form-control datetimepicker-input" data-target="#reservationdate" name="fechaReserva" required/>
                                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Botón de enviar -->
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">Continuar</button>
                                                </div>
                                            </form>





                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->



                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                                <h2 class=""><i class="fa fa-check" aria-hidden="true"></i> Resumen de la orden</h2>
                                <br>
                                <div class="text-muted">
                                    <h4>
                                        <p class="text"><i class="fa fa-usd"></i> Precio final (Incluye impuestos) &nbsp; &nbsp;
                                            <strong style="color: green;">$ 00000</strong>
                                        </p>
                                    </h4>

                                    <h5 class="mt-5 text-muted"><i class="fa fa-refresh" aria-hidden="true"></i> Serás redirigido a la plataforma de WebPay</h5><br>
                                </div>



                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->






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
</body>

</html>