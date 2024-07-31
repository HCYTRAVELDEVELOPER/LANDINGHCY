<?php
//incluir config bd
include "../../config.php";





use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../PHPMailer/src/Exception.php';
require '../../PHPMailer/src/PHPMailer.php';
require '../../PHPMailer/src/SMTP.php';





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
    $random_number = rand(100, 999);
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



        // Enviar correo electrónico usando PHPMailer
        $mail = new PHPMailer(true);

        try {
            // Configuración del servidor SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Reemplaza con tu servidor SMTP
            $mail->SMTPAuth = true;
            $mail->Username = 'morenoguevarajuan20@gmail.com'; // Reemplaza con tu correo
            $mail->Password = 'nkxs ywrj liem eofy'; // Reemplaza con tu contraseña de aplicación
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Configuración del correo
            $mail->CharSet = 'UTF-8'; // Establecer el juego de caracteres a UTF-8
            $mail->setFrom('morenoguevarajuan20@gmail.com', 'HCY Travel');
            $mail->addAddress($email, "$nomCliente $apeCliente");

            $mail->isHTML(true);
            $mail->Subject = 'Confirmación de Reserva ' . $codReserva;
            $mail->Body    = "
       <html>
       <head>
       <title>Confirmación de Reserva</title>
       </head>
       <body>
       <p>Estimado/a $nomCliente $apeCliente,</p>
       <p>Su reserva ha sido creada exitosamente con el código: $codReserva.</p>
       <p>Detalles de la reserva:</p>
       <ul>
           <li><strong>País:</strong> $paisReserva</li>
           <li><strong>Origen:</strong> $origenReserva</li>
           <li><strong>Destino:</strong> $destinoReserva</li>
           <li><strong>Vehículo:</strong> $vehiculoReserva</li>
           <li><strong>Precio:</strong> $precioReserva</li>
           <li><strong>Fecha de Reserva:</strong> $fechaReservaFormateada</li>
       </ul>
       <p>Gracias por reservar con nosotros.</p>
       </body>
       </html>
       ";

            $mail->send();
            //echo 'Correo de confirmación enviado.';
            header("Location: confirmaInsertReserva.php");
        } catch (Exception $e) {
            echo "Error al enviar el correo de confirmación: {$mail->ErrorInfo}";
        }




    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>

<button><a href="../../index.php">Regresar</a></button>