<?php
include('conectar.php');							
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $dni = $_POST["dni"];
    $idrol = $_POST["rol"];
    $contraseña = $_POST["contraseña"];
    $confcontraseña = $_POST["confirmcontraseña"];
	if ($contraseña !== $confcontraseña) {
		die("Las contraseñas no coinciden");
	}	
	$hash = password_hash($contraseña, PASSWORD_BCRYPT); // encriptar la contraseña
    $username = strtolower(substr($nombre, 0, 1) . $apellido);
	//consulta 2
	$sql2 = "INSERT INTO docente(dni, nombre, apuellido) VALUES ('$dni', '$nombre', '$apellido')";
	$result2 = mysqli_query($conn, $sql2);
	if ($result2) {
		echo "Consulta exitosa";
	} else {
		echo "Error en la consulta: " . mysqli_error($conn);
	}
	//consulta 3
	$sql3 = "INSERT INTO usuarios(id_rol, username, contrasena, fec_registro, fec_vencimiento) VALUES ('$idrol', '$username', '$hash', NOW(), DATE_ADD(NOW(), INTERVAL 30 DAY))";
	$result3 = mysqli_query($conn, $sql3);
	if ($result3) {
		echo "Consulta exitosa";
	} else {
		echo "Error en la consulta: " . mysqli_error($conn);
	}
	echo "Datos insertados correctamente";
	header('Location: usuarios.php');
}

?>
