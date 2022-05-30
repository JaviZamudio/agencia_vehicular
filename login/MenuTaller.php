<?php
    session_start();
    if(!isset($_SESSION['Bandera']) || $_SESSION['Bandera']!=1 || $_SESSION['Tipo']!='T'){
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
						Citas
						<a href="../Admin/CitasTaller.html" class="dropdown-link">Mostrar Citas</a>
            <a href="../Admin/AgregarCitas.php" class="dropdown-link">Agregar Citas</a>
					</div>
				</div>
				<div class="dropdown">
					<a href="../Taller/InvTaller.php">
						Inventario
					</a>
				</div>
				<div class="dropdown" href="../Taller/CitasTaller.php">
					<a>
						Citas
					</a>
				</div>
			</nav>
		</div>
	</body>
</html>