<?php
include 'conectar.php';

// Verificar si el usuario está autenticado
session_start();
if (!isset($_SESSION['usuario_autenticado']) || $_SESSION['usuario_autenticado'] !== true) {
    // Si el usuario no está autenticado, redirige al formulario de inicio de sesión
    header('Location: login.html');
    exit();
}
else {
include('./paginas/index.html');
}
?>




