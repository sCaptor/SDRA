<?php include("conectar.php"); ?>	
<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-11.2">
      <div class="card card-body mx-auto" style="fixed">
        <?php
        // Recupera el término de búsqueda desde el formulario
        $term = $_POST['term']; // Cambiamos la variable de $id a $term (término de búsqueda)
        
        // Utilizamos una consulta preparada para evitar inyecciones SQL
        $sql = "SELECT * FROM turnos WHERE 
                id LIKE ? OR 
                cliente LIKE ? OR 
                hora LIKE ? OR 
                fecha LIKE ? OR 
                dia LIKE ?";
        $stmt = $conn->prepare($sql);

        // Bind parameters
        $searchTerm = "%$term%";
        $stmt->bind_param("sssss", $searchTerm, $searchTerm, $searchTerm, $searchTerm, $searchTerm);
        $stmt->execute();
        $result = $stmt->get_result();

        // Muestra los resultados en una tabla
        if ($result->num_rows >= 1) {
          echo "<h2>Resultados de la búsqueda:</h2>";
          echo "<table border='1' class='table table-bordered'>";
          echo "<tr><th>ID</th><th>Turno</th><th>Cliente</th><th>Fecha</th><th>Dia</th><th>Tarea</th></tr>";

          while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["cliente"] . "</td>";
            echo "<td>" . $row["hora"] . "</td>";
            echo "<td>" . $row["fecha"] . "</td>";
            echo "<td>" . $row["dia"] . "</td>";

            echo '<td>
                <div style="text-align:center">
                  <a href="editar.php?id=' . $row['id'] . '" class="btn btn-outline-primary btn-dark btn-sm">
                    <i class="fas fa-marker"></i>
                  </a>
                  <a href="borrar.php?id=' . $row['id'] . '" class="btn btn-outline-danger btn-dark btn-sm">
                    <i class="fas fa-trash-alt"></i>
                  </a>
                </div>
              </td>';
            echo "</tr>";
          }
          echo "</table>";

          echo "<h2><a class=' btn btn-outline-danger btn-secondary' style='padding-left: 20px' href='index.php'>Volver</a><h2>";
        } else {
          echo "<p style='font-size:20px'>No se encontraron resultados.</p>";
          echo "<h2><a class=' btn btn-outline-danger btn-secondary' style='padding-left: 20px' href='index.php'>Volver</a><h2>";
        }
        ?>
      </div>
    </div>
  </div>
</main>
