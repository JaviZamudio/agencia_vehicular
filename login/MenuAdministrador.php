<?php
    session_start();
    if(!isset($_SESSION['Bandera']) || $_SESSION['Bandera']!=1 || $_SESSION['Tipo']!='A'){
        header("Location: ./Login.php");
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
						<a href="../Taller/AgregarInventario.php" class="dropdown-link">Agregar Inventario</a>
					</div>
				</div>
				<div class="dropdown">
					<div class="dropdown-title">
						Ventas
					</div>
					<div class="dropdown-content">
                        <a href="../Ventas/AdminVentas.php" class="dropdown-link">Lista de Ventas</a>
					</div>
				</div>
				<div class="dropdown">
					<div class="dropdown-title">
						Registros
					</div>
					<div class="dropdown-content">
						<a href="../Admin/FVehiculos.html" class="dropdown-link">Agregar Autos</a>
                        <a href="../Admin/Autos.php" class="dropdown-link">Inventario Autos</a>
                        <a href="../Admin/Usuarios.php" class="dropdown-link">Empleados</a>
					</div>
				</div>
			</nav>
		</div>
	</body>
</html>