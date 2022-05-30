<?php
	// Autenticacion
    include("../login/auth.php");
    authAdmin();
?>

<html>
<form method="post" action="IInventario.php">
	<h2>FORMULARIO DEL INVENTARIO DEL TALLER</h2>

	<label>Id</label>
	<input type="number" id="IdPieza" required="required" name="IdPieza"></input>
	
	<label>Nombre de Pieza</label>
	<input type="text" id="Pieza" required="required" name="Pieza"></input>
	
	<label>Tipo</label>
	<input type="text" id="Tipo" required="required" name="Tipo"></input>
	
	<label>Calibre</label>
	<input type="text" id="Calibre" required="required" name="Calibre"></input>
	
	<label>Precio</label>
	<input type="number" id="Precio" required="required" name="Precio"></input>
	
	<input type="submit">

</form>
</html>