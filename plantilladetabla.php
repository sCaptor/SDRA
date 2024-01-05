<!-- PLANTILLAS PARA CARGAR TABLAS -->
<?php
include('conectar.php');

$query = "";

$result_tasks = mysqli_query($conn, $query);
?>

<table class="table">
    <thead>
        <tr style="text-align: center;">
            <th style="width: %;"></th>
            <th style="width: %;"></th>
            <th style="width: %;"></th>
            <th style="width: %;"></th>
            <th style="width: %;"></th>
            <th style="width: %;"></th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($result_tasks)) : ?>
            <tr>
                <td style="text-align: center; width: %;"><?php echo $row['']; ?></td>
                <td style="text-align: center; width: %;"><?php echo $row['']; ?></td>
                <td style="text-align: center; width: %;"><?php echo $row['']; ?></td>
                <td style="text-align: center; width: %;"><?php echo $row['']; ?></td>
                <td style="text-align: center; width: %;"><?php echo $row['']; ?></td>
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
