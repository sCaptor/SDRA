<!-- archivo conectar.php del proyecto Lista de contactos, desarrollo web de Modelos y Sistemas y Bases de datos | E.E.S.T.N°2 de Fcio Varela -->

<?php
									// PHP llamará a los gestores de almacenamiento de sesiones open y read

													// Conecta con el SERVIDOR WEB LOCAL: localhost - super_user: root - pass: (sin password)
													// Luego con la base de datos en MYSQL formulario, sino muestra el Error de conexión.
$conn = mysqli_connect('localhost', 'root', 'monte238XX', 'tecnica2db') or die (mysqli_error($mysqli));
?>

