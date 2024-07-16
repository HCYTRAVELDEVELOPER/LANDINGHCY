<?php
// INICIAR VARIABLES DE SESIÓN
session_start();

// DESTRUIR LA SESIÓN Y REDIRIGIR
session_destroy();

echo "<script>
        window.location.href = 'http://129.151.97.70/LANDINGHCY/';
      </script>";
exit();
?>
