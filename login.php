<?php
// Establecer el tiempo de vida de la sesión a 5 minutos
$lifetime = 5 * 60; // 5 minutos en segundos
session_set_cookie_params($lifetime);
session_start();
// Guardar la marca de tiempo actual cuando el usuario inicia sesión
$_SESSION['last_activity'] = time();
?>

<?php
include('conectar.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Obtener datos del formulario de inicio de sesión
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = $_POST['contraseña'];
	// Buscar el usuario en la base de datos
	$sql = "SELECT * FROM usuarios WHERE username = ?";
	$stmt = mysqli_prepare($conn, $sql);
	if ($stmt) {
		mysqli_stmt_bind_param($stmt, "s", $username);
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);
		if ($result) {
			if (mysqli_num_rows($result) > 0) {
				$row = mysqli_fetch_assoc($result);
				$storedPassword = $row['contrasena'];
				if (password_verify($password, $storedPassword)) {
					session_start();
					$_SESSION['usuario_autenticado'] = true;
					echo "Inicio de sesión exitoso";
					header('Location: index.php');
					exit; 
				} else {
					
 					echo "Contraseña incorrecta";
				}
			} else {
				echo "Usuario no encontrado";
			}
		} else {
			echo "Error en la consulta: " . mysqli_error($conn);
		}
		mysqli_stmt_close($stmt);
	} else {
		echo "Error en la preparación de la consulta: " . mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>


