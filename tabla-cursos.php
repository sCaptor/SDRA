<?php
include('conectar.php');

$query = "SELECT cursos.*, CONCAT(docente.nombre, ' ', docente.apellido) AS nombre_docente FROM cursos JOIN docente ON cursos.id_docente = docente.id";

$result_tasks = mysqli_query($conn, $query);
?>

<table class="table">
    <thead>
        <tr style="text-align: center;">
            <th style="width: %;">ID Curso</th>
            <th style="width: %;">Código del Curso</th>
            <th style="width: %;">Nombre del Curso</th>
            <th style="width: %;">ID Docente</th>
            <th style="width: %;">Docente Encargado</th>
            <th style="width: %;">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($result_tasks)) : ?>
            <tr>
                <td style="text-align: center; width: %;"><?php echo $row['id']; ?></td>
                <td style="text-align: center; width: %;"><?php echo $row['cod_curso']; ?></td>
                <td style="text-align: center; width: %;"><?php echo $row['nombre_curso']; ?></td>
                <td style="text-align: center; width: %;"><?php echo $row['id_docente']; ?></td>
                <td style="text-align: center; width: %;"><?php echo $row['nombre_docente']; ?></td>
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
