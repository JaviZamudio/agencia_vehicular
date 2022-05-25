<?php
	$Id=$_REQUEST['Id'];
	include("../Admin/Conexiones.php");
	$Con=Conectar();
	$SQL="SELECT * FROM Usuarios WHERE Id = '$Id';";
	$Result=Ejecutar($Con,$SQL);
	$Fila=mysqli_fetch_row($Result);
	Cerrar($Con);
?>

<html>
<form method="post" action="../Admin/ActualizarEmpleado.php">
	<label>FORMULARIO DE VEHICULOS</label>
	<p></p>

	<label>Id</label>
	<input type="number" id="Id" value="<?php print($Fila[0]); ?>" required="required" name="Id"></input>
	
	<label>Usuario</label>
	<input type="text" id="Usuario" value="<?php print($Fila[1]); ?>" required="required" name="Usuario"></input>
	
	<label>Password</label>
	<input type="text" id="Password" value="<?php print($Fila[2]); ?>" required="required" name="Password"></input>
	
	<label>Nombre</label>
	<input type="text" id="Nombre" value="<?php print($Fila[3]); ?>" required="required" name="Nombre"></input>
	
	<label>TipoUsuario</label>
	<input type="text" id="TipoUsuario" value="<?php print($Fila[4]); ?>" required="required" name="TipoUsuario"></input>
	
	<label>Correo</label>
	<input type="text" id="Correo" value="<?php print($Fila[5]); ?>" required="required" name="Correo"></input>
	
	<label>NumTelefono</label>
	<input type="number" id="NumTelefono" value="<?php print($Fila[6]); ?>" required="required" name="NumTelefono"></input>

	<input type="submit">

</form>
</html>

<?php
	if(isset($_POST['Marca'])){
		$Id=$_POST['Id'];
		$Usuario=$_POST['Usuario'];
		$Password=$_POST['Password'];
		$Nombre=$_POST['Nombre'];
		$TipoUsuario=$_POST['TipoUsuario'];
		$Correo=$_POST['Correo'];
		$NumTelefono=$_POST['NumTelefono'];
	

		$Con=Conectar();
		$SQL="UPDATE Vehiculos SET Nombre='$Nombre',
		Usuario='$Usuario', Nombre='$Nombre',TipoUsuario='$TipoUsuario',Correo='$Correo',
		NumTelefono='$NumTelefono'
        WHERE Id='$Id';";
		$Result=Ejecutar($Con,$SQL);
		print("Registros actualizados = ".mysqli_affected_rows($Con));
		Cerrar($Con);
	}
?>
