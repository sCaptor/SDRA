<?php
include('conectar.php');

$query = "SELECT usuarios.*, roles.nombre as nombre_rol FROM usuarios 
          JOIN roles ON usuarios.id_rol = roles.id";

$result_tasks = mysqli_query($conn, $query);
?>

<table class="table">
    <thead>
        <tr style="text-align: center;">
            <th style="width: 10%;">ID</th>
            <th style="width: 20%;">Usuario</th>
            <th style="width: 10%;">Rol</th>
            <th style="width: 20%;">Registro</th>
            <th style="width: 20%;">Vencimiento</th>
            <th style="width: 20%;">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($result_tasks)) : ?>
            <tr>
                <td style="text-align: center; width: 10%;"><?php echo $row['id']; ?></td>
                <td style="text-align: center; width: 20%;"><?php echo $row['username']; ?></td>
                <td style="text-align: center; width: 10%;"><?php echo $row['nombre_rol']; ?></td>
                <td style="text-align: center; width: 20%;"><?php echo $row['fec_registro']; ?></td>
                <td style="text-align: center; width: 20%;"><?php echo $row['fec_vencimiento']; ?></td>
                <td style="width: 20%;">
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
