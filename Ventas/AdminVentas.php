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
<?php
        
        include("./Conexiones.php");
        $Con=Conectar();
        $SQL="SELECT * FROM Ventas";
        $Result=Ejecutar($Con,$SQL);
        
        ///Crear Tabla
        echo '<table border=1><tr>';
        echo '<th>'.'Id'.'</th>';
        echo '<th>'.'Usuario'.'</th>';
        echo '<th>'.'Auto'.'</th>';
        echo '<th>'.'Nombre del Cliente'.'</th>';
        echo '<th>'.'Fecha'.'</th>';
        echo '<th>'.'Domicilio'.'</th>';
        echo '<th>'.'Correo'.'</th>';
        echo '<th>'.'Telefono'.'</th>';
        echo '<th>'.'RFC'.'</th>';
        echo '<th>'.'CURP'.'</th>';
        echo '<th>'.'Monto'.'</th>';
        echo '</tr>';
        for($F = 0; $F < mysqli_num_rows($Result); $F++)
        {
            $Fila=mysqli_fetch_row($Result);
            echo '<tr>';
            echo '<td>'.$Fila[0].'</td>';
            echo '<td>'.$Fila[1].'</td>';
            echo '<td>'.$Fila[2].'</td>';
            echo '<td>'.$Fila[3].'</td>';
            echo '<td>'.$Fila[4].'</td>'; 
            echo '<td>'.$Fila[5].'</td>';
            echo '<td>'.$Fila[6].'</td>';
            echo '<td>'.$Fila[7].'</td>';
            echo '<td>'.$Fila[8].'</td>';
            echo '<td>'.$Fila[9].'</td>';
            echo '<td>'.$Fila[10].'</td>';
            echo '<td>'.'<a href="EliminarAuto.php?Id='.$Fila[0].'">Eliminar</a>'.'</td>';
            echo '<td>'.'<a href="ActualizarAuto.php?Id='.$Fila[0].'">Actualizar</a>'.'</td>';
            echo '</tr>';
        }
        echo '</table>';
        Cerrar($Con);    

?>

	</body>
</html>
