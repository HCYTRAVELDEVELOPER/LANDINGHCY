<?php
//incluir datos bd config
include "../../config.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validar si se recibió el nombre de usuario
    if (isset($_POST['usuarioUsername'])) {
        $usuarioUsername = $_POST['usuarioUsername'];
        $rol = $_POST['rol'];

        // Consulta para actualizar el rol del usuario
        $query = "UPDATE users SET ROL = '$rol' WHERE USERNAME = '$usuarioUsername'";

        // Ejecutar la consulta
        if (mysqli_query($conn, $query)) {
            // Redirigir a una página de éxito o mostrar un mensaje
            header('Location: rolesUsuarios.php?editGet=1');
        } else {
            echo "Error al actualizar el rol: " . mysqli_error($conn);
        }
    } else {
        echo "Usuario no recibido.";
    }
}

?>