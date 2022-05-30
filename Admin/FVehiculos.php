<?php
	include("../login/auth.php");
	authAdmin();
?>

<html>
	<head>
		<link rel="stylesheet" href="styles/style.css" type="text/css">
		<link rel="stylesheet" href="../css/Header.css">
	</head>

<body>
	<!-- HEADER -->

	<!-- CONTENIDO -->
	<form method="post" action="IVehiculos.php">
		<h2>FORMULARIO DE VEHICULOS</h2>
		
		<label>Id</label>
		<input type="number" id="Id" required="required" name="Id" value=""></input>

		<label>Imagen</label>
		<input type="text" id="Imagen" required="required" name="Imagen"></input>

		<label>Marca</label>
		<input type="text" id="Marca" required="required" name="Marca"></input>

		<label>Linea</label>
		<input type="text" id="Linea" required="required" name="Linea"></input>

		<label>Clase</label>
		<input type="text" id="Clase" required="required" name="Clase"></input>

		<label>Modelo</label>
		<input type="text" id="Modelo" required="required" name="Modelo"></input>

		<label>NumSerie</label>
		<input type="number" id="NumSerie" required="required" name="NumSerie"></input>

		<label>Tipo</label>
		<input type="text" id="Tipo" required="required" name="Tipo"></input>

		<label>Capacidad</label>
		<input type="number" id="Capacidad" required="required" name="Capacidad"></input>

		<label>Combustible</label>
		<select name="Combustible" id="Combustible" required="required">
			<option value="Gasolina">Gasolina</option>
			<option value="GasNatural">GasNatural</option>
			<option value="Diesel">Diesel</option>
			<option value="Electrico">Electrico</option>
		</select>

		<label>Origen</label>
		<input type="text" id="Origen" required="required" name="Origen"></input>

		<label>Color</label>
		<input type="text" id="Color" required="required" name="Color"></input>

		<label>Cilindros</label>
		<input type="number" id="Cilindros" required="required" name="Cilindros"></input>

		<label>Puertas</label>
		<input type="number" id="Puertas" required="required" name="Puertas"></input>

		<label>Asientos</label>
		<input type="number" id="Asientos" required="required" name="Asientos"></input>

		<label>Transmision</label>
		<input type="text" id="Transmision" required="required" name="Transmision"></input>

		<label>Precio</label>
		<input type="number" id="Precio" required="required" name="Precio"></input>
		
		<input type="submit">
		
	</form>
</body>
</html>