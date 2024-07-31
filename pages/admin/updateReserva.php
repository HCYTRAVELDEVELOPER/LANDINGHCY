<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/hcy/LANDINGHCY/config.php';



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validar si se recibió el ID de reserva
    if (isset($_POST['idReserva'])) {
        $idReserva = $_POST['idReserva'];
        
        // Recibir los datos del formulario
        $codReserva = $_POST['codReserva'];
        $paisReserva = $_POST['paisReserva'];
        $origenReserva = $_POST['origenReserva'];
        $destinoReserva = $_POST['destinoReserva'];
        $vehiculoReserva = $_POST['vehiculoReserva'];
        $precioReserva = $_POST['precioReserva'];
        $nomClienteReserva = $_POST['nomClienteReserva'];
        $apeClienteReserva = $_POST['apeClienteReserva'];
        $email = $_POST['email'];
        $tipoIdClienteReserva = $_POST['tipoIdClienteReserva'];
        $idClienteReserva = $_POST['idClienteReserva'];
        $fechaReserva = date('d-m-Y', strtotime($_POST['fechaReserva']));
        $fechaCreaReserva = date('d-m-Y', strtotime($_POST['fechaCreaReserva']));
        $fechaModReserva = date('d-m-Y'); // Fecha actual

        // Consulta para actualizar los datos de la reserva
        $query = "UPDATE reservas SET 
                    CODRESERVA = '$codReserva',
                    PAISRESERVA = '$paisReserva',
                    ORIGENRESERVA = '$origenReserva',
                    DESTINORESERVA = '$destinoReserva',
                    VEHICULORESERVA = '$vehiculoReserva',
                    PRECIORESERVA = '$precioReserva',
                    NOMCLIENTERESERVA = '$nomClienteReserva',
                    APECLIENTERESERVA = '$apeClienteReserva',
                    EMAIL = '$email',
                    TIPOIDCLIENTERESERVA = '$tipoIdClienteReserva',
                    IDCLIENTERESERVA = '$idClienteReserva',
                    FECHARESERVA = '$fechaReserva',
                    FECHACREARESERVA = '$fechaCreaReserva',
                    FECHAMODRESERVA = '$fechaModReserva' 
                  WHERE ID = $idReserva";

        // Ejecutar la consulta
        if (mysqli_query($conn, $query)) {
            // Redirigir a misReservas.php o mostrar un mensaje de éxito
            header('Location: misReservas.php?editGet=1');
        } else {
            echo "Error al actualizar la reserva: " . mysqli_error($conn);
        }
    } else {
        echo "ID de reserva no recibido.";
    }
}

?>
