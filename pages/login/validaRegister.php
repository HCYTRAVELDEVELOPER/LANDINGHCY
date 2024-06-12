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
    

</head>
<body>
<?php
//INCLUIR CONFIG
include_once $_SERVER['DOCUMENT_ROOT'] . '/hcy/LANDINGHCY/config.php';

// VALIDAR POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Encriptar la contraseña
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Verificar si el nombre de usuario o el correo electrónico ya existen
    $check_sql = "SELECT * FROM USERS WHERE USERNAME = '$username' OR EMAIL = '$email'";
    $result = $conn->query($check_sql);

    if ($result->num_rows > 0) {
        echo "<script>
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'El nombre de usuario o el correo electrónico ya existen.'
            }).then(() => {
                setTimeout(() => {
                    window.location.href = 'register.php';
                }, 300); // Espera 0.5 segundos antes de redirigir
            });
          </script>";
              //echo "Existe";
    } else {
        // Insertar los datos
        $insert_sql = "INSERT INTO USERS (USERNAME, NAME, PASSWORD, EMAIL, CREATED_AT, UPDATED_AT)
                       VALUES ('$username', '$name', '$hashed_password', '$email', NOW(), NOW())";

        if ($conn->query($insert_sql) === TRUE) {
            echo "<script>
            Swal.fire({
                icon: 'success',
                title: '¡Registro exitoso!',
                text: 'Tu cuenta ha sido creada exitosamente.'
            }).then(function() {
                window.location.href = 'http://localhost/hcy/LANDINGHCY/pages/login/login.php'; // Redirige a la página de inicio de sesión
            });
          </script>";
        } else {
            echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Hubo un error al registrar tu cuenta: " . $conn->error . "'
                    });
                  </script>";
        }
    }

    // Cerrar la conexión
    $conn->close();
}
?>

</body>
</html>