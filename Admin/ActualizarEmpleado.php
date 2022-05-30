<?php
	//AUTENTICACION
	include("../login/auth.php");
	authAdmin();

	$Id=$_REQUEST['Id'];
	include("../Admin/Conexiones.php");
	$Con=Conectar();
	$SQL="SELECT * FROM Usuarios WHERE Id = '$Id';";
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
<form method="post" action="../Admin/ActualizarEmpleado.php">
	<h2>FORMULARIO DE VEHICULOS</h2>

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
		if($Result){
			print("<script>alert('Empleado Actualizado');</script>");
			print("<script>window.location='./Usuarios.php';</script>");
		}
		else{
			print("<script>alert('Error al actualizar');</script>");
			print("<script>window.location='./Usuarios.php';</script>");
		}
		Cerrar($Con);
	}
?>
</body>
</html>