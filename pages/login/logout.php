<?php
// INICIAR VARIABLES DE SESIÓN
session_start();

// DESTRUIR LA SESIÓN Y REDIRIGIR
session_destroy();

echo "<script>
        window.location.href = '../index.php';
      </script>";
exit();
?>
