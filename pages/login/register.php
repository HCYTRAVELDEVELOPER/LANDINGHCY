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
                <a href="http://localhost/hcy/LANDINGHCY/index.php"><img class="img-logo-login" src="http://localhost/hcy/LANDINGHCY/dist/img/logos/logo_principal.png" alt=""></a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <h3 class="login-box-msg">Registra los datos de usuario</h3>

                    <form id="registrationForm" action="validaRegister.php" method="post">
                        <label for="username">Name</label>
                        <div class="input-group mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <label for="username">User Name</label>
                        
                        <div class="input-group mb-3">

                            <input type="text" name="username" class="form-control" placeholder="Username" required>
                            <div class="input-group-append">

                                <div class="input-group-text">
                                    <span class="fas fa-at"></span>
                                </div>
                            </div>
                        </div>
                        <label for="username">Email</label>
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <label for="password">Password</label>
                        <div style="color: red; font-size: 16px;" class="error-message" id="passwordError">La contraseña debe contener al menos un carácter especial</div>
                        <div class="input-group mb-3">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>


                        <label for="confirm-password">Confirm Password</label>
                        <div class="input-group mb-3">
                            <input type="password" id="confirm-password" name="confirm-password" class="form-control" placeholder="Confirm Password" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div style="color: red; font-size: 16px;" class="error-message" id="confirmPasswordError">Las contraseñas no coinciden</div> <br>

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
                    <p class="mb-0">
                        <a href="login.php" class="text-center">Tengo usuario registrado</a>
                    </p>
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
        <!-- /.login-box -->






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

    <script src="http://localhost/hcy/LANDINGHCY/dist/js/login/validaRegistroNuevoUsuario.js"></script>

</body>

</html>