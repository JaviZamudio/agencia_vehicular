<?php
	// AUTENTICACION
	include("../login/auth.php");
	authAdmin();

	$Id=$_REQUEST['Id'];

	include("../Admin/Conexiones.php");
	$Con=Conectar();
	$SQL="SELECT * FROM Ventas WHERE Id = '$Id';";
	$Result=Ejecutar($Con,$SQL);
	$Fila=mysqli_fetch_row($Result);
	Cerrar($Con);
?>

<html>
<head>
	<!-- Estilos -->
	<link rel="stylesheet" href="../css/Forms.css">
	<link rel="stylesheet" href="../css/Header.css">
</head>
<body>
	<!-- HEADER -->

	<!-- FORMULARIO -->
	<form method="post" action="../Admin/ActualizarAuto.php">
	<h2>FORMULARIO DE VEHICULOS</h2>

	<label> Id </label>
	<input type="number" id="Id" value="<?php print($Fila[0]); ?>" required="required" name="Id"></input>
	
	<label>Usuario</label>
	<input type="text" id="Usuario" value="<?php print($Fila[1]); ?>" required="required" name="Usuario"></input>
	
	<label>Auto</label>
	<input type="text" id="Auto" value="<?php print($Fila[2]); ?>" required="required" name="Auto"></input>
	
	<label>Nombre del Cliente</label>
	<input type="text" id="NomCliente" value="<?php print($Fila[3]); ?>" required="required" name="NomCliente"></input>
	
	<label>Fecha</label>
	<input type="text" id="Fecha" value="<?php print($Fila[4]); ?>" required="required" name="Fecha"></input>
	
	<label>Domicilio</label>
	<input type="number" id="Domicilio" value="<?php print($Fila[5]); ?>" required="required" name="Domicilio"></input>
	
	<label>Correo</label>
	<input type="number" id="Correo" value="<?php print($Fila[6]); ?>" required="required" name="Correo"></input>
	
	<label>Telefono</label>
	<input type="text" id="Telefono" value="<?php print($Fila[7]); ?>" required="required" name="Telefono"></input>
	
	<label>RFC</label>
	<input type="number" id="RFC" value="<?php print($Fila[8]); ?>" required="required" name="RFC"></input>
	
	<label>CURP</label>
	<input type="text" id="CURP" value="<?php print($Fila[9]); ?>" required="required" name="CURP"></input>
	
	<label>Monto</label>
	<input type="text" id="Monto" value="<?php print($Fila[10]); ?>" required="required" name="Monto"></input>
	
	<input type="submit">
</form>

<?php
	if(isset($_POST['IdVenta'])){
		$IdVenta=$_POST['IdVenta'];
		$IdUsuario=$_POST['IdUsuario'];
		$IdAuto=$_POST['IdAuto'];
		$NomCliente=$_POST['NomCliente'];
		$Fecha=$_POST['Fecha'];
		$Domicilio=$_POST['Domicilio'];
		$Correo=$_POST['Correo'];
		$Telefono=$_POST['Telefono'];
        $RFC=$_POST['RFC'];
		$CURP=$_POST['CURP'];
		$Monto=$_POST['Monto'];
		
		$Con=Conectar();
		$SQL="UPDATE Ventas SET IdVenta='$IdVenta',
		IdIdUsuario='$IdUsuario', IdAuto='$IdAuto',
		NomCliente='$NomCliente',Fecha='$Fecha',Domicilio='$Domicilio',
		Correo='$Correo',Telefono='$Telefono',RFC='$RFC',
		CURP='$CURP',Monto='$Monto'
        WHERE IdVenta='$IdVenta';";
		$Result=Ejecutar($Con,$SQL);
		if($Result){
			print("<script>alert('Venta Actualizada');</script>");
			print("<script>window.location='./AdminVentas.php';</script>");
		}
		else{
			print("<script>alert('Error al actualizar');</script>");
			print("<script>window.location='./AdminVentas.php';</script>");
		}
		Cerrar($Con);
	}
	?>

</body>
</html>