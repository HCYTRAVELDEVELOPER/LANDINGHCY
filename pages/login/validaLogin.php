<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.0.20/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.0.20/sweetalert2.min.js"></script>
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
<body>




<?php
// INCLUIR CONFIG
include_once $_SERVER['DOCUMENT_ROOT'] . '/hcy/LANDINGHCY/config.php';
//session_start(); // Iniciar la sesión
error_reporting(0);

// VALIDAR POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validar el formato del correo electrónico
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Por favor, introduce un correo electrónico válido.'
            }).then(() => {
                setTimeout(() => {
                    window.location.href = 'login.php';
                }, 100); // Espera 0.1 segundos antes de redirigir
            });
          </script>";
        exit(); // Detener la ejecución del script
    }

    // Consultar la base de datos para verificar el correo electrónico y obtener la contraseña almacenada
    $check_sql = "SELECT * FROM USERS WHERE EMAIL = ?";
    $stmt = $conn->prepare($check_sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $stored_password = $user['PASSWORD'];

        // Verificar la contraseña
        if (password_verify($password, $stored_password)) {
            session_start(); // Iniciar la sesión
            // Guardar el nombre de usuario y el nombre completo en la sesión
            $_SESSION['username'] = $user['USERNAME'];
            $_SESSION['name'] = $user['NAME'];


            echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: '¡Inicio de sesión exitoso!',
                    text: 'Bienvenido.'
                }).then(function() {
                    window.location.href = 'http://localhost/hcy/LANDINGHCY/pages/admin/main.php'; // Redirige a la página de inicio
                });
              </script>";
        } else {
            echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Contraseña incorrecta',
                    text: 'Intenta nuevamente.'
                }).then(function() {
                    window.location.href = 'login.php'; // Redirige a la página de inicio
                });
              </script>";
        }
    } else {
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'El correo electrónico ingresado no está registrado.'
            }).then(() => {
                setTimeout(() => {
                    window.location.href = 'login.php';
                }, 100); // Espera 0.1 segundos antes de redirigir
            });
          </script>";
    }

    // Cerrar la conexión
    $stmt->close();
    $conn->close();
}
?>






</body>
</html>