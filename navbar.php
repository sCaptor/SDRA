<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">    
			<!-- Navbar Brand-->
			<div style=" position: absolute; top: 14px;">
				<img src="css/android-chrome-512x512.png" style="width: 30px;  position: absolute; top: 0; left: 20px; border-radius: 25px; " alt="Escuela" width="100">

			
			</div>
			<a class="navbar-brand ps-3" style="position: absolute; left: 50px;" href="index.php">E.E.S.T. Nº2</a>
			<!-- Sidebar Toggle-->
			<button style="position: absolute; left: 200px;" class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i><img src="./img/bars-solid.svg" alt="Mi SVG" width="20" height="20" fill="red"></i></button>
			<!-- Navbar Search-->
			<form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
				<div class="input-group">
					<input class="form-control" type="text" placeholder="Buscar" aria-label="Search for..." aria-describedby="btnNavbarSearch" />
					<button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
				</div>
			</form>
			<!-- Navbar-->
			<ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i></i></a>
					<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="#!">Configuracion</a></li>
						<li><a class="dropdown-item" href="#!">AutoLogout:<div id="contador">00:00</div></a></li>
						<li><hr class="dropdown-divider" /></li>
						<li>
							<form action="./cerrar_sesion.php">
								<input class="dropdown-item" type="submit" value="Cerrar Sesion">
						</form></li>
					</ul>
				</li>
			</ul>
		</nav>
		<div id="layoutSidenav">
			<div id="layoutSidenav_nav">
				<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
					<div class="sb-sidenav-menu">
						<div class="nav">
							<div class="sb-sidenav-menu-heading">Interface</div>
							<a id="tablasColor" class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
								<div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
								Tablas
								<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
							</a>
							<div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
								<nav class="sb-sidenav-menu-nested nav">
									<a id="styleMañana" class="nav-link" href="tmañana.php">Turno Mañana</a>
									<a id="styleTarde" class="nav-link" href="ttarde.php">Turno Tarde</a>
									<a id="styleVespertino" class="nav-link" href="tvespertino.php">Turno Vespertino</a>
								</nav>
							</div>
							<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
								<div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
								Gestion
								<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
							</a>
							<div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
								<nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
									<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
										Authentication
										<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
									</a>
									<div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
										<nav class="sb-sidenav-menu-nested nav">
											<a class="nav-link" href="login.html">Login</a>
											<a class="nav-link" href="register.html">Register</a>
											<a class="nav-link" href="password.html">Cambiar Contraseña</a>
										</nav>
									</div>
									<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
										Error
										<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
									</a>
									<div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
										<nav class="sb-sidenav-menu-nested nav">
											<a class="nav-link" href="401.html">401 Page</a>
											<a class="nav-link" href="404.html">404 Page</a>
											<a class="nav-link" href="500.html">500 Page</a>
										</nav>
									</div>
								</nav>
							</div>
							<div class="sb-sidenav-menu-heading">AdminTools</div>
								<a class="nav-link" href="usuarios.php">
									<div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
									Gestion de usuarios & contraseñas
								</a>
								<a class="nav-link" href="BBDD.php">
									<div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
									Gestion de base de datos
								</a>
                                <a class="nav-link" href="cursosmanage.php">
									<div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
									Gestion de Cursos
								</a>
							</div>
                            
					</div>
					<div class="sb-sidenav-footer">
						<div class="text-muted">Copyright &copy; E.E.S.T. Nº2</div>
				</nav>
			</div>