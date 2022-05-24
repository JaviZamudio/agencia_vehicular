<?php
	$Id=$_REQUEST['Id'];
	include("../Admin/Conexiones.php");
	$Con=Conectar();
	$SQL="SELECT * FROM Vehiculos WHERE Id = '$Id';";
	$Result=Ejecutar($Con,$SQL);
	$Fila=mysqli_fetch_row($Result);
	Cerrar($Con);
?>

<html>
<form method="post" action="../Admin/ActualizarAuto.php">
	<label>FORMULARIO DE VEHICULOS</label>
	<p></p>

	<label>Id</label>
	<input type="number" id="Id" value="<?php print($Fila[0]); ?>" required="required" name="Id"></input>
	<br>
	<label>Imagen</label>
	<input type="text" id="Imagen" value="<?php print($Fila[1]); ?>" required="required" name="Imagen"></input>
	<br>
	<label>Marca</label>
	<input type="text" id="Marca" value="<?php print($Fila[2]); ?>" required="required" name="Marca"></input>
	<br>
	<label>Linea</label>
	<input type="text" id="Linea" value="<?php print($Fila[3]); ?>" required="required" name="Linea"></input>
	<br>
	<label>Clase</label>
	<input type="text" id="Clase" value="<?php print($Fila[4]); ?>" required="required" name="Clase"></input>
	<br>
	<label>Modelo</label>
	<input type="number" id="Modelo" value="<?php print($Fila[5]); ?>" required="required" name="Modelo"></input>
	<br>
	<label>NumSerie</label>
	<input type="number" id="NumSerie" value="<?php print($Fila[6]); ?>" required="required" name="NumSerie"></input>
	<br>
	<label>Tipo</label>
	<input type="text" id="Tipo" value="<?php print($Fila[7]); ?>" required="required" name="Tipo"></input>
	<br>
	<label>Capacidad</label>
	<input type="number" id="Capacidad" value="<?php print($Fila[8]); ?>" required="required" name="Capacidad"></input>
	<br>
	<label>Combustible</label>
	<input type="text" id="Combustible" value="<?php print($Fila[9]); ?>" required="required" name="Combustible"></input>
	<br>
	<label>Origen</label>
	<input type="text" id="Origen" value="<?php print($Fila[10]); ?>" required="required" name="Origen"></input>
	<br>
	<label>Color</label>
	<input type="text" id="Color" value="<?php print($Fila[11]); ?>" required="required" name="Color"></input>
	<br>
	<label>Cilindros</label>
	<input type="number" id="Cilindros" value="<?php print($Fila[12]); ?>" required="required" name="Cilindros"></input>
	<br>
	<label>Puertas</label>
	<input type="number" id="Puertas" value="<?php print($Fila[13]); ?>" required="required" name="Puertas"></input>
	<br>
	<label>Asientos</label>
	<input type="number" id="Asientos" value="<?php print($Fila[14]); ?>" required="required" name="Asientos"></input>
	<br>
	<label>Transmision</label>
	<input type="text" id="Transmision" value="<?php print($Fila[15]); ?>" required="required" name="Transmision"></input>
    <br>
	<label>Precio</label>
	<input type="number" id="Precio" value="<?php print($Fila[16]); ?>" required="required" name="Precio"></input>

	<input type="submit">

</form>
</html>

<?php
	if(isset($_POST['Marca'])){
		$Id=$_POST['Id'];
		$Imagen=$_POST['Imagen'];
		$Marca=$_POST['Marca'];
		$Linea=$_POST['Linea'];
		$Clase=$_POST['Clase'];
		$Modelo=$_POST['Modelo'];
		$NumSerie=$_POST['NumSerie'];
		$Tipo=$_POST['Tipo'];
        $Capacidad=$_POST['Capacidad'];
		$Combustible=$_POST['Combustible'];
		$Origen=$_POST['Origen'];
        $Color=$_POST['Color'];
        $Cilindros=$_POST['Origen'];
        $Puertas=$_POST['Puertas'];
        $Asientos=$_POST['Asientos'];
        $Transmision=$_POST['Transmision'];
        $Precio=$_POST['Precio'];

		$Con=Conectar();
		$SQL="UPDATE Vehiculos SET Marca='$Marca',
		Imagen='$Imagen', Marca='$Marca',
		Linea='$Linea',Clase='$Clase',Modelo='$Modelo',
		NumSerie='$NumSerie',Tipo='$Tipo',Capacidad='$Capacidad',
		Combustible='$Combustible',Origen='$Origen',
        Color='$Color',Cilindros='$Cilindros',Puertas='$Puertas',
        Asientos='$Asientos',Transmision='$Transmision',Precio='$Precio'
        WHERE Id='$Id';";
		$Result=Ejecutar($Con,$SQL);
		print("Registros actualizados = ".mysqli_affected_rows($Con));
		Cerrar($Con);
	}
?>
