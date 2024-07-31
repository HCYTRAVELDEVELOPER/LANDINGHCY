<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<!-- IonIcons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="../../dist/css/adminlte.min.css">
<link rel="stylesheet" href="../../dist/css/transfer/detalleTransfer.css">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    window.onload = function() {
        Swal.fire({
            icon: 'success',
            title: 'Registro exitoso',
            text: 'Se han registrado los datos de empresa, nuestro equipo evaluará su solicitud.',
            confirmButtonText: 'Aceptar',
            allowOutsideClick: false, // No permite cerrar al hacer clic fuera del cuadro
            allowEscapeKey: false,    // No permite cerrar con la tecla Esc
            allowEnterKey: false      // No permite cerrar con la tecla Enter
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../../index.php'; // Cambia 'ruta_a_tu_pagina_de_inicio' por la URL deseada
            }
        });
    }
</script>
