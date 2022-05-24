<?php
    session_start();
    if(!isset($_SESSION['Bandera'])){
		header("Location: ./FAcceso.html");
	}
?>
<html> 
    <head>
		<link rel="stylesheet" href="styles/style.css" type="text/css">
		<link rel="stylesheet" href="../css/Header.css">
	</head>
	<body>
		<div class="header">
			<div class="header-title">	
				<img src="../images/logo.png" alt="">
				<h1>Agencia Vehicular</h1>
			</div>
			<nav class="nav">
				<div class="dropdown">
					<div class="dropdown-title">
						Taller
					</div>
					<div class="dropdown-content">
						<a href="../Taller/AdminCitasTalller.php" class="dropdown-link">Citas</a>
						<a href="../Taller/AdminInvTaller.php" class="dropdown-link">Inventario</a>
					</div>
				</div>
				<div class="dropdown">
					<div class="dropdown-title">
						Ventas
					</div>
					<div class="dropdown-content">
                        <a href="../Ventas/AdminVentas.php" class="dropdown-link">Lista de Ventas</a>
                        <a href="../Ventas/AdminRegistrarVentas.php" class="dropdown-link">Nueva Venta</a>
					</div>
				</div>
				<div class="dropdown">
					<div class="dropdown-title">
						Registros
					</div>
					<div class="dropdown-content">
                        <a href="../Admin/Autos.php" class="dropdown-link">Autos</a>
                        <a href="../Admin/Empleados.php" class="dropdown-link">Empleados</a>
					</div>
				</div>
			</nav>
		</div>
	</body>
</html>