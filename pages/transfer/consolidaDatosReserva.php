<?php
//incluir config bd
include "../../config.php";

// Verificar si los datos fueron enviados por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $paisReserva = $_POST['pais'];
    $origenReserva = $_POST['origen'];
    $destinoReserva = $_POST['destino'];
    $vehiculoReserva = $_POST['vehiculo'];
    $idVehiculoReserva = $_POST['idVehiculoReserva'];
    $precioReserva = $_POST['precio'];
    $nomCliente = $_POST['nomCliente'];
    $apeCliente = $_POST['apeCliente'];
    $email = $_POST['email'];
    $tipoIdCliente = $_POST['tipoIdCliente'];
    $idCliente = $_POST['idCliente'];
    // Obtener la fecha de la reserva desde POST
    $fechaReserva = $_POST['fechaReserva'];

    // Convertir la fecha al formato d-m-y
    $fechaReservaFormateada = DateTime::createFromFormat('Y-m-d', $fechaReserva)->format('d-m-Y');

    // Generar código de reserva único
    $current_time = time();
    $random_number = rand(10000, 99999);
    $codReserva = 'HCYR' . ($current_time + $random_number);

    // Fecha actual
    $fechaActual = date("d-m-Y");

    // Consulta SQL para insertar los datos en la tabla de reservas
    $sql = "INSERT INTO reservas (
                CODRESERVA, PAISRESERVA, ORIGENRESERVA, DESTINORESERVA, 
                VEHICULORESERVA, IDVEHICULORESERVA, PRECIORESERVA, 
                NOMCLIENTERESERVA, APECLIENTERESERVA, EMAIL, TIPOIDCLIENTERESERVA, 
                IDCLIENTERESERVA, FECHARESERVA, FECHACREARESERVA, FECHAMODRESERVA
            ) VALUES (
                '$codReserva', '$paisReserva', '$origenReserva', '$destinoReserva', 
                '$vehiculoReserva', '$idVehiculoReserva', '$precioReserva', 
                '$nomCliente', '$apeCliente', '$email', '$tipoIdCliente', 
                '$idCliente', '$fechaReservaFormateada', '$fechaActual', '$fechaActual'
            )";

    if ($conn->query($sql) === TRUE) {
        echo "Reserva creada exitosamente.";
        echo "<br>";
        echo "Datos de reserva:";
        echo "<br>";
        echo "codr:" . $codReserva;
        foreach ($_POST as $key => $value) {
            echo "<li><strong>$key:</strong> $value</li>";
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>

<button><a href="../../index.php">Regresar</a></button>