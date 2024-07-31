<?php
// INCLUIR CONFIG
include_once $_SERVER['DOCUMENT_ROOT'] . '/hcy/LANDINGHCY/config.php';

//DEFINE NOMBRE DE USUARIO DE LA SESIÓ ACTIVA
$usernameSesionActiva = $_SESSION['username'];


// Verificar si la sesión está activa
if (isset($_SESSION['username'])) {
    // Consulta SQL para obtener los datos necesarios de la tabla USERS
    $sqlDatosUsuario = "SELECT USERNAME, NAME, NUMID, EMAIL, ROL FROM USERS WHERE USERNAME = '$usernameSesionActiva';";
    $resultDatosUsuario = $conn->query($sqlDatosUsuario);

    if ($resultDatosUsuario->num_rows > 0) {
        error_reporting(0);
        // Recorrer los resultados y asignar los datos a las variables
        while ($row = $resultDatosUsuario->fetch_assoc()) {
            $usernameSesion = $row['USERNAME'];
            $nameSesion = $row['NAME'];
            $numidSesion = $row['NUMID'];
            $emailSesion = $row['EMAIL'];
            $rolSesion = $row['ROL'];


            // Mostrar los datos
            /*
            echo "Username: " . $usernameSesion . "<br>";
            echo "Name: " . $nameSesion . "<br>";
            echo "Email: " . $emailSesion . "<br>";
            echo "Rol: " . $rolSesion . "<br><br>";
            */
        }
    } else {
        echo "No se encontraron usuarios.";
    }

    // Cerrar la conexión
    $conn->close();
} else {
    echo "No hay una sesión activa.";
}
?>
