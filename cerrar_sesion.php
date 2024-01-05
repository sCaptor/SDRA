<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

// Destruir todas las variables de sesión
session_unset();
// Destruir la sesión
session_destroy();

// Redirigir a la página de inicio de sesión u otra página después de cerrar sesión
header('Location: login.html');
exit;
?>
