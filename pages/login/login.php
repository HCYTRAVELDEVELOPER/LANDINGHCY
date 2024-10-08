<?php
//INICIAR VARIABLES DE SESIÓN
session_start();

// VERIFICAR SI LA SESIÓN EXISTE
if (isset($_SESSION['name'])) {
  echo "<script>
          window.location.href = '../../pages/admin/main.php';
        </script>";
  exit(); // Detener la ejecución del script PHP
}else{
  //echo "Sesión no existe";
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
    
    <!-- CSS PARA EL LOGIN -->
    <link rel="stylesheet" href="../../dist/css/login/login.css">

</head>




<body class="hold-transition sidebar-collapse layout-top-nav">
    <div class="wrapper">



        <div class="login-box">
            <div class="login-logo">
                <a href="../../index.php"><img class="img-logo-login" src="../../dist/img/logos/logo_principal.png" alt=""></a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <h3 class="login-box-msg">Ingresa las credenciales de acceso</h3>

                    <form action="validaLogin.php" method="post">
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                            </div>
                            <!-- /.col -->
                            <div class="col-6">
                                <input type="submit" value="INGRESAR" class="btn btn-primary btn-block">
                            </div><br><br>
                            <!-- /.col -->
                        </div>
                    </form>

                    

                    <p class="mb-1">
                        <a href="forgot-password.html">Olvidé mi contraseña</a>
                    </p>
                    <p class="mb-0">
                        <a href="register.php" class="text-center">Registrar nuevo usuario</a>
                    </p>
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
        <!-- /.login-box -->






    </div>
    <!-- ./FIN wrapper -->

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