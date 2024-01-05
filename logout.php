<?php
// En el script de cerrar sesión (logout.php)
session_start();
session_unset();
session_destroy();
header("Location: login.php"); // Redirigir a la página de inicio de sesión
exit();
?>
