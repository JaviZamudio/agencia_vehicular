<?php
	// Autenticacion
    include("../login/auth.php");
    authTaller();
?>
<html>
<form method="post" action="ICitas.php">
	<h2>FORMULARIO DEL CITAS DEL TALLER</h2>
	

	<label>Id</label>
	<input type="number" id="IdCitas" required="required" name="IdCitas"></input>
	
	<label>Usuario</label>
	<input type="text" id="Usuario" required="required" name="Usuario"></input>
	
	<label>FechaEntrada</label>
	<input type="date" id="FechaEntrada" required="required" name="FechaEntrada"></input>
	
	<label>Modelo</label>
	<input type="text" id="Modelo" required="required" name="Modelo"></input>
	
	<label>Marca</label>
	<input type="text" id="Marca" required="required" name="Marca"></input>

    <label>Placas</label>
	<input type="text" id="Placas" required="required" name="Placas"></input>
	
    <label>Nombre del Cliente</label>
	<input type="text" id="NombreCliente" required="required" name="NombreCliente"></input>
	
    <label>Tipo de Servicio</label>
	<input type="text" id="TipoServicio" required="required" name="TipoServicio"></input>
	
    <label>Contacto</label>
	<input type="number" id="Contacto" required="required" name="Marca"></input>
	
    <label>Costo</label>
	<input type="number" id="Costo" required="required" name="Costo"></input>
	
	<input type="submit">

</form>
</html>