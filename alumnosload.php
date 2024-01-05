<?php
include('conectar.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate inputs
    $dni = mysqli_real_escape_string($conn, $_POST["dni"]);
    $legajo = mysqli_real_escape_string($conn, $_POST["legajo"]);
    $nombre = mysqli_real_escape_string($conn, $_POST["nombre"]);
    $apellido = mysqli_real_escape_string($conn, $_POST["apellido"]);
    $fecha_nac = mysqli_real_escape_string($conn, $_POST["fechaNac"]);
    $fecha_ingreso = mysqli_real_escape_string($conn, $_POST["fechaIng"]);
    $carrera = mysqli_real_escape_string($conn, $_POST["tecnicatura"]);
    $curso = mysqli_real_escape_string($conn, $_POST["curso"]);
	$division = mysqli_real_escape_string($conn, $_POST["division"]);
    $añocursada = mysqli_real_escape_string($conn, $_POST["añocursada"]);
    $codcurso = $curso . $division . $carrera . $añocursada;

    $sqlVerificar = "SELECT id FROM cursos WHERE cod_curso = '$codcurso'";
    $resultVerificar = mysqli_query($conn, $sqlVerificar);

    if ($resultVerificar && mysqli_num_rows($resultVerificar) > 0) {
        $row = mysqli_fetch_assoc($resultVerificar);
        $curso_id = $row['id'];

        $sqlInsertar = "INSERT INTO alumno(dni, legajo, nombre, apellido, fec_nac, fec_ingreso, curso, carrera) VALUES ('$dni','$legajo','$nombre','$apellido','$fecha_nac','$fecha_ingreso', '$curso_id', '$carrera')";
        
        // Ejecutar la consulta
        $resultInsertar = mysqli_query($conn, $sqlInsertar);

        if ($resultInsertar) {
            echo "Inserción exitosa";
			$_SESSION['mensaje'] = "Datos insertados correctamente.";
        } else {
            echo "Error en la inserción: " . mysqli_error($conn);
        }
    } else {
        echo "El curso no existe";
    }
	header('Location: BBDD.php');
}
?>
