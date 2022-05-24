<?php
    session_start();
    if(!isset($_SESSION['Bandera']) || $_SESSION['Bandera']!=1 || $_SESSION['Tipo']!='U'){
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
					<a href="../Ventas/Ventas.php">
						Ventas
					</a>
				</div>
				<div class="dropdown" href="../Ventas/Autos.php">
					<a>
						Autos
					</a>
				</div>
			</nav>
		</div>
	</body>
</html>