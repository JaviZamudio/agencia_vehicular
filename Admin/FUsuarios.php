<?php
    // Autenticacion
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
	<form method="post" action="IUsuarios.php">
		<h2>FORMULARIO DE USUARIOS</h2>

		<label>Id</label>
		<input type="number" id="Id" required="required" name="Id" value=""></input>
		
		<label>Usuario</label>
		<input type="text" id="Usuario" required="required" name="Usuario"></input>
		
		<label>Password</label>
		<input type="text" id="Password" required="required" name="Password"></input>
		
		<label>Nombre</label>
		<input type="text" id="Nombre" required="required" name="Nombre"></input>
		
		<label>Tipo Usuario</label>
		<select name="TipoUsuario" id="TipoUsuario" required="required">
			<option value="A">A</option>
			<option value="U">U</option>
			<option value="T">T</option>
		</select>
		
		<label>Correo</label>
		<input type="text" id="Correo" required="required" name="Correo"></input>
		
		<label>NumTelefono</label>
		<input type="text" id="NumTelefono" required="required" name="NumTelefono"></input>

		<input type="submit">

	</form>
</body>

</html>