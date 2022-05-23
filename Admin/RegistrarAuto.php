<html>
<form method="post" action="IVehiculos.php">
	<label>FORMULARIO DE VEHICULOS</label>
	<p></p>

	<label>Id</label>
	<input type="number" id="Id" required="required" name="Id"></input>
	<br>
	<label>Imagen</label>
	<input type="text" id="Imagen" required="required" name="Imagen"></input>
	<br>
	<label>Marca</label>
	<input type="text" id="Marca" required="required" name="Marca"></input>
	<br>
	<label>Linea</label>
	<input type="text" id="Linea" required="required" name="Linea"></input>
	<br>
	<label>Clase</label>
	<input type="text" id="Clase" required="required" name="Clase"></input>
	<br>
	<label>Modelo</label>
	<input type="text" id="Modelo" required="required" name="Modelo"></input>
	<br>
	<label>NumSerie</label>
	<input type="number" id="NumSerie" required="required" name="NumSerie"></input>
	<br>
	<label>Tipo</label>
	<input type="text" id="Tipo" required="required" name="Tipo"></input>
	<br>
	<label>Capacidad</label>
	<input type="number" id="Capacidad" required="required" name="Capacidad"></input>
	<br>
	<label>Combustible</label>
	<select name="Combustible" id="Combustible" required="required">
		<option value="Gasolina">Gasolina</option>
		<option value="GasNatural">GasNatural</option>
		<option value="Diesel">Diesel</option>
		<option value="Electrico">Electrico</option>
	</select>
	<br>
	<label>Origen</label>
	<input type="text" id="Origen" required="required" name="Origen"></input>
	<br>
	<label>Color</label>
	<input type="text" id="Color" required="required" name="Color"></input>
	<br>
	<label>Cilindros</label>
	<input type="number" id="Cilindros" required="required" name="Cilindros"></input>
	<br>
	<label>Puertas</label>
	<input type="number" id="Puertas" required="required" name="Puertas"></input>
	<br>
	<label>Asientos</label>
	<input type="number" id="Asientos" required="required" name="Asientos"></input>
	<br>
	<label>Transmision</label>
	<input type="text" id="Transmision" required="required" name="Transmision"></input>
    <br>
    <label>Precio</label>
	<input type="number" id="Precio" required="required" name="Precio"></input>

	<input type="submit">

</form>
</html>