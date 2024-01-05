<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		<title>SDRA E.E.S.T. Nº2</title>
		<link rel="icon" href="css/favicon.ico" type="image/ico">
		<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
		<link href="css/styles.css" rel="stylesheet" />
		<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
	</head>
	<body class="sb-nav-fixed">
		<!--Nav Bar-->

		<?php include("navbar.php")?>

		
			<div id="layoutSidenav_content">
			
				<main>
					<div class="container px-4">
						<h1 class="mt-2">Gestion de Cursos</h1>
						<div class="row justify-content-around">

							<div class="col-md-4 col-sm-6 mb-4">
								<div class="card">
									<div class="card-header">
										<i class="fas fa-table me-1"></i>
										CARGA DE CURSOS
									</div>
									<div class="card-body">
										<form action="./cursosload.php" method="post">
											<div class="row mb-1">
												<div class="form-group col">
													<label for="curso">Curso(año):</label>
													<input type="text" class="form-control" id="curso" name="curso" placeholder="ej:2" required>
												</div>
												<div class="form-group col">
													<label for="division">Division:</label>
													<input type="text" class="form-control" id="division" name="division" placeholder="ej:3" required>
												</div>
											</div>
											<div class="form-group mb-1">
												<label for="añocursada">Año de cursada:</label>
												<input type="number" class="form-control" id="añocursada" name="añocursada" maxlength="4" minlength="4" placeholder="ej:2020" required>
											</div>
											<div class="form-group row mb-1">
												<div class="col">
													<label for="carrera">Carrera:</label>
													<select class="form-select" name="carrera" id="carrera" required>
														<option value="INF">Informática Personal y Profesional</option>
														<option value="QUI">Quimica</option>
														<option value="MMO">Maestro Mayor de Obra</option>
														<option value="BAS">Ciclo Básico</option>
													</select>
												</div>
												<div class="col">
													<label for="docente">Docente:</label>
													<select name="docente" id="docente" class="form-select">
														<?php
														include("conectar.php");
														
														$sqlDocentes = "SELECT id, CONCAT(nombre, ' ', apellido) AS nombre_completo FROM docente";
														$resultDocentes = mysqli_query($conn, $sqlDocentes);

														if (!$resultDocentes) {
															die("Error en la consulta de docentes: " . mysqli_error($conn));
														}

														while ($rowDocente = mysqli_fetch_assoc($resultDocentes)) {
															$idDocente = $rowDocente['id'];
															$nombreCompletoDocente = $rowDocente['nombre_completo'];
															echo "<option value='$idDocente'>$nombreCompletoDocente</option>";
														}
														?>
													</select>
												</div>
											</div>
											<div>
												<p><?php echo isset($_SESSION['mensaje']) ? $_SESSION['mensaje'] : ''; ?></p>
											</div>
											<input class="btn btn-success" type="submit" value="Enviar">
										</form>
									</div>
								</div>
							</div>
							<div class="col" >
								<div class="card">
									<div class="card-header">
										<i class="fas fa-table me-1"></i>
											CURSOS
									</div>
									<div class="card-body" style="height:290px;max-height: 290px; overflow-y: auto;">
										<?php include("tabla-cursos.php") ?>		
									</div>
								</div>
							</div>
						</div> 
					</div>				
				</main>
				
				<footer class="py-4 bg-light mt-auto">
					<div class="container-fluid px-4">
						<div class="d-flex align-items-center justify-content-between small">
							<div class="text-muted">Copyright &copy; E.E.S.T. Nº2</div>
							
						</div>
					</div>
				</footer>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
		<script src="js/scripts.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
		<script src="assets/demo/chart-area-demo.js"></script>
		<script src="assets/demo/chart-bar-demo.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
		<script src="js/datatables-simple-demo.js"></script>
		<?php
    // Limpiar el mensaje después de mostrarlo
    unset($_SESSION['mensaje']);
    ?>
	</body>
</html>
