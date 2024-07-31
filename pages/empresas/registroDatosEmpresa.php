<?php
// Incluye conexión a la base de datos
include "../../config.php";

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener datos del formulario
    $nombreEmpresa = $conn->real_escape_string($_POST['nombreEmpresa']);
    $direccion = $conn->real_escape_string($_POST['direccion']);
    $telefono = $conn->real_escape_string($_POST['telefono']);
    $email = $conn->real_escape_string($_POST['email']);
    $representante = $conn->real_escape_string($_POST['representante']);
    $nit = $conn->real_escape_string($_POST['nit']);
    $descripcion = $conn->real_escape_string($_POST['descripcion']);

    // Directorio de subida de archivos
    $uploadDir = '../../files/empresas/';

    // Crear el directorio si no existe
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $documentos = [];
    // Procesar archivos subidos
    foreach ($_FILES['documentos']['tmp_name'] as $key => $tmpName) {
        $fileName = basename($_FILES['documentos']['name'][$key]);
        $filePath = $uploadDir . $fileName;

        // Mover archivo a la carpeta de subida
        if (move_uploaded_file($tmpName, $filePath)) {
            $documentos[] = $filePath;
        } else {
            echo "Error al subir el archivo $fileName.";
        }
    }

    // Convertir el array de documentos en una cadena de texto (en caso de múltiples archivos)
    $documentosString = implode(',', $documentos);

    // Insertar datos en la base de datos
    $sql = "INSERT INTO empresas (NOMEMPRESA, DIRECCION, TELEFONO, CORREO, REPRESENTNTELEGAL, NIT, DESCRIPCION, DOCUMENTOS)
            VALUES ('$nombreEmpresa', '$direccion', '$telefono', '$email', '$representante', '$nit', '$descripcion', '$documentosString')";

    if ($conn->query($sql) === TRUE) {
        // Redirigir a transfer.php o mostrar un mensaje de éxito
        header('Location: confirmaInsertRegistroEmpresa.php?insertGet=1');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}
?>
