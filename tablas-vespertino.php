<?php
include('conectar.php');

$query = "SELECT alumno.*, cursos.cod_curso FROM alumno JOIN cursos ON alumno.curso = cursos.id";
$result_tasks = mysqli_query($conn, $query);
?>

<table class="table">
    <thead>
    <tr style="text-align: center;">
            <th style="width: %;">ID</th>
            <th style="width: %;">Nombre</th>
            <th style="width: %;">Apellido</th>
            <th style="width: %;">N°DNI</th>
            <th style="width: %;">N°Legajo</th>
            <th style="width: %;">F.Nacimiento</th>
            <th style="width: %;">F.Ingreso</th>
            <th style="width: %;">Curso</th>
            <th style="width: %;">Carrera</th>
            <th style="width: %;">Opciones</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($result_tasks)) : ?>
            <tr>
                <td style="text-align: center; width: %;"><?php echo $row['id']; ?></td>
                <td style="text-align: center; width: %;"><?php echo $row['nombre']; ?></td>
                <td style="text-align: center; width: %;"><?php echo $row['apellido']; ?></td>
                <td style="text-align: center; width: %;"><?php echo $row['dni']; ?></td>
                <td style="text-align: center; width: %;"><?php echo $row['legajo']; ?></td>
                <td style="text-align: center; width: %;"><?php echo $row['fec_nac']; ?></td>
                <td style="text-align: center; width: %;"><?php echo $row['fec_ingreso']; ?></td>
                <td style="text-align: center; width: %;"><?php echo $row['cod_curso']; ?></td>
                <td style="text-align: center; width: %;"><?php echo $row['carrera']; ?></td>
                <td style="width: %;">
                    <div class="row">
                        <div style="text-align: center;">
                            <a href="editar.php?id=<?php echo $row['id']; ?>" class="btn btn-secondary btn-sm"><i class="fas fa-marker"></i></a>
                            <a href="borrar.php?id=<?php echo $row['id']; ?>" class="btn btn-secondary btn-sm"><i class="fas fa-trash-alt"></i></a>
                        </div>
                    </div>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>
