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
						<!-- Comienzo de los formularios -->
						<div class="container px-4">
								<h1 class="mt-2">Gestion Usuarios</h1>
								<div class="row justify-content-around">

										<div class="col-md-4 col-sm-6 mb-4">
												<div class="card">
														<div class="card-header">
																<i class="fas fa-table me-1"></i>
																CREAR USUARIO
														</div>
														<div class="card-body">
																<form action="./register.php" method="POST">
																		<div class="row mb-3">
																				<div class="col-md-6">
																						<div class="form-floating mb-3 mb-md-0">
																								<input class="form-control" name="nombre" id="nombre" type="text" placeholder="Enter your first name" required>
																								<label for="inputFirstName">Nombre/s</label>
																						</div>
																				</div>
																				<div class="col-md-6">
																						<div class="form-floating">
																								<input class="form-control" name="apellido" id="apellido" type="text" placeholder="Enter your last name" required>
																								<label for="apellido">Apellido/s</label>
																						</div>
																				</div>
																		</div>
																		<div class="row mb-3">
																				<div class="col-md-5">
																						<div class="form-floating mb-3 mb-md-0">
																								<input class="form-control" name="dni" id="dni" type="text" placeholder="Enter your first name" required>
																								<label for="dni">DNI</label>
																						</div>
																				</div>
																				<div class="col-md-7">
																						<div class="form-floating">
																								<select class="form-select" name="rol" id="rol" required>
																										<option value="1">Técnico</option>
																										<option value="2">Preceptor</option>
																										<option value="3">Secretario</option>
																										<option value="4">Directivo</option>
																										<option value="5">Jefe de Preceptores</option>
																								</select>
																								<label for="rol" class="form-label">Selecciona una opción</label>
																						</div>
																				</div>
																		</div>
																		<div class="row mb-3">
																				<div class="col-md-6">
																						<div class="form-floating mb-3 mb-md-0">
																								<input class="form-control" name="contraseña" id="inputPassword" type="password" placeholder="Create a password" required>
																								<label for="inputPassword">Contraseña</label>
																						</div>
																				</div>
																				<div class="col-md-6">
																						<div class="form-floating mb-3 mb-md-0">
																								<input class="form-control" name="confirmcontraseña" id="confirmcontraseña" type="password" placeholder="Confirm password" required>
																								<label for="confirmcontraseña">Confirmar Contraseña</label>
																						</div>
																				</div>
																		</div>
																		<div class="d-grid">
																				<button class="btn btn-primary btn-block" type="submit" value="Enviar">Crear cuenta</button>
																		</div>
																</form>
														</div>
												</div>
										</div>
										<div class="col" >
											<div class="card">
												<div class="card-header">
												<i class="fas fa-table me-1"></i>
													USUARIOS
												</div>
												<div class="card-body" style="height:290px;max-height: 290px; overflow-y: auto;">
													<?php include("tabla-usuarios.php") ?>		
												</div>
											</div>
										</div>
											<!-- Agrega más tarjetas según sea necesario -->
								</div>
								<h5 style="text-align: center">Mas proximamente</h5>
						</div>
						<!-- Fin de los formularios -->
				</main>

				<footer class="py-4 bg-light mt-auto">
					<div class="container-fluid px-4">
						<div class="d-flex align-items-center justify-content-between small">
							<div class="text-muted">Copyright &copy; E.E.S.T. Nº2</div>
							
						</div>
					</div>
				</footer>
			</div>
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
		<script src="js/scripts.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
		<script src="assets/demo/chart-area-demo.js"></script>
		<script src="assets/demo/chart-bar-demo.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
		<script src="js/datatables-simple-demo.js"></script>
	</body>
</html>
