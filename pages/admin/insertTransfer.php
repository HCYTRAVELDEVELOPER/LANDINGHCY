<?php
// insertTransfer.php

// Iniciar sesión
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Incluir archivo de configuración o conexión a la base de datos
    include "../../config.php";

    // Función para eliminar acentos y convertir a mayúsculas
    function removeAccents($str)
    {
        $accented_chars = [
            'À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë',
            'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø',
            'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'Þ', 'ß',
            'à', 'á', 'â', 'ã', 'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë',
            'ì', 'í', 'î', 'ï', 'ð', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ø',
            'ù', 'ú', 'û', 'ü', 'ý', 'þ', 'ÿ'
        ];
        $unaccented_chars = [
            'A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E',
            'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O', 'O', 'O', 'O', 'O',
            'U', 'U', 'U', 'U', 'Y', 'P', 'S',
            'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c', 'e', 'e', 'e', 'e',
            'i', 'i', 'i', 'i', 'd', 'n', 'o', 'o', 'o', 'o', 'o', 'o',
            'u', 'u', 'u', 'u', 'y', 'p', 'y'
        ];
        return str_replace($accented_chars, $unaccented_chars, $str);
    }

    function formatInput($input)
    {
        return strtoupper(removeAccents(trim($input)));
    }

    // Recoger datos del formulario
    $pais = formatInput($_POST['pais']);
    $ciudad = formatInput($_POST['ciudad']);
    $origen = formatInput($_POST['origen']);
    $destino = formatInput($_POST['destino']);
    $vehiculo = formatInput($_POST['vehiculo']);
    $idVehiculo = formatInput($_POST['idVehiculo']);
    $asientos = formatInput($_POST['asientos']);
    $nomConductor = formatInput($_POST['nomConductor']);
    $idConductor = formatInput($_POST['idConductor']);
    $precio = formatInput($_POST['precio']);
    $estado = formatInput($_POST['estado']);
    $creado = date('d-m-Y'); // Fecha actual en formato Y-m-d
    $usuarioCrea = htmlspecialchars($_SESSION['username']);

    // Mostrar variables
    /*
    echo "<h2>Datos del Formulario</h2>";
    echo "<p><strong>País:</strong> " . htmlspecialchars($pais) . "</p>";
    echo "<p><strong>Ciudad:</strong> " . htmlspecialchars($ciudad) . "</p>";
    echo "<p><strong>Origen:</strong> " . htmlspecialchars($origen) . "</p>";
    echo "<p><strong>Destino:</strong> " . htmlspecialchars($destino) . "</p>";
    echo "<p><strong>Vehículo:</strong> " . htmlspecialchars($vehiculo) . "</p>";
    echo "<p><strong>ID Vehículo:</strong> " . htmlspecialchars($idVehiculo) . "</p>";
    echo "<p><strong>Asientos:</strong> " . htmlspecialchars($asientos) . "</p>";
    echo "<p><strong>Nombre Conductor:</strong> " . htmlspecialchars($nomConductor) . "</p>";
    echo "<p><strong>ID Conductor:</strong> " . htmlspecialchars($idConductor) . "</p>";
    echo "<p><strong>Precio:</strong> " . htmlspecialchars($precio) . "</p>";
    echo "<p><strong>Estado:</strong> " . htmlspecialchars($estado) . "</p>";
    echo "<p><strong>Creado:</strong> " . htmlspecialchars($creado) . "</p>";
    echo "<p><strong>Usuario Crea:</strong> " . htmlspecialchars($usuarioCrea) . "</p>";
    */

    // Consulta SQL para insertar datos
    $sql = "INSERT INTO transfer (PAIS, CIUDAD, ORIGEN, DESTINO, VEHICULO, ID_VEHICULO, ASIENTOS, NOM_CONDUCTOR, ID_CONDUCTOR, PRECIO, ESTADO, CREADO, USUARIO_CREA)
            VALUES ('$pais', '$ciudad', '$origen', '$destino', '$vehiculo', '$idVehiculo', '$asientos', '$nomConductor', '$idConductor', '$precio', '$estado', '$creado', '$usuarioCrea')";

    // Imprimir la consulta SQL para depuración
    //echo "<pre>$sql</pre>";

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        // Redirigir a transfer.php o mostrar un mensaje de éxito
        header('Location: transfer.php?insertGet=1');
    } else {
        echo "Error: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
} else {
    echo "Método de solicitud no permitido.";
}
