<?php

//INCLUIR ARCHIVO CONFIG

include "config.php";


// Obtener el país seleccionado desde la solicitud
$pais = $_GET['pais'];

// Crear y ejecutar consulta SQL para obtener los transfers
$sql = "SELECT * FROM transfer WHERE PAIS = '$pais'";
$result = $conn->query($sql);

// Crear un array para almacenar los datos de los transfers
$transfers = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Agregar cada transfer al array
        $transfers[] = $row;
    }
}

// Devolver los datos de los transfers en formato JSON
echo json_encode($transfers);

// Cerrar la conexión
$conn->close();
?>