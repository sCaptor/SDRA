<?php
include('conectar.php');
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $curso = $_POST["curso"];
    $division = $_POST["division"];
    $añocursada = $_POST["añocursada"];
    $carrera = $_POST["carrera"];
    $docente = $_POST["docente"];
    $cursoname = $curso . "°" . $division;
    $codcurso = $curso . $division . $carrera . $añocursada;
    $iddocente = $_POST["docente"];

    // Verificar si ya existe un curso con el mismo cod_curso
    $sqlVerificar = "SELECT cod_curso FROM cursos WHERE cod_curso = '$codcurso'";
    $resultVerificar = mysqli_query($conn, $sqlVerificar);

    if ($resultVerificar && mysqli_num_rows($resultVerificar) > 0) {

        $_SESSION['mensaje'] = "Ya existe un curso con ese código. No se puede insertar.";
    } else {

        $sqlInsertar = "INSERT INTO cursos(cod_curso, nombre_curso, id_docente) VALUES ('$codcurso', '$cursoname', '$iddocente')";
        $resultInsertar = mysqli_query($conn, $sqlInsertar);

        if ($resultInsertar) {
            $_SESSION['mensaje'] = "Datos insertados correctamente.";
        } else {
            $_SESSION['mensaje'] = "Error en la consulta: " . mysqli_error($conn);
        }
    }
    header('Location: cursosmanage.php');
}
?>