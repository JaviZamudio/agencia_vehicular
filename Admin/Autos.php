<?php
	// Autenticacion
    include("../login/auth.php");
	authAdmin();
?>
<html> 
	<head>
		<!-- ESTILOS -->
		<link rel="stylesheet" href="styles/style.css" type="text/css">
	    <link rel="stylesheet" href="../css/Header.css">
	</head>
	<body>
		<!-- HEADER -->

		<!-- TABLA DE RESULTADOS -->
<?php
        
        include("./Conexiones.php");
        $Con=Conectar();
        $SQL="SELECT * FROM Vehiculos";
        $Result=Ejecutar($Con,$SQL);
        
        ///Crear Tabla
        echo '<table border=1><tr>';
        echo '<th>'.'Id'.'</th>';
        echo '<th>'.'Imagen'.'</th>';
        echo '<th>'.'Marca'.'</th>';
        echo '<th>'.'Linea'.'</th>';
        echo '<th>'.'Clase'.'</th>';
        echo '<th>'.'Modelo'.'</th>';
        echo '<th>'.'NumSerie'.'</th>';
        echo '<th>'.'Tipo'.'</th>';
        echo '<th>'.'Capacidad'.'</th>';
        echo '<th>'.'Combustible'.'</th>';
        echo '<th>'.'Origen'.'</th>';
        echo '<th>'.'Color'.'</th>';
        echo '<th>'.'Cilindros'.'</th>';
        echo '<th>'.'Puertas'.'</th>';
        echo '<th>'.'Asientos'.'</th>';
        echo '<th>'.'Transmision'.'</th>';
        echo '<th>'.'Precio'.'</th>';
        echo '<th>'.'Eliminar'.'</th>';
        echo '<th>'.'Actualizar'.'</th>';

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
            echo '<td>'.$Fila[11].'</td>';
            echo '<td>'.$Fila[12].'</td>';
            echo '<td>'.$Fila[13].'</td>';
            echo '<td>'.$Fila[14].'</td>';
            echo '<td>'.$Fila[15].'</td>';
            echo '<td>'.$Fila[16].'</td>';
            echo '<td>'.'<a href="EliminarAuto.php?Id='.$Fila[0].'">Eliminar</a>'.'</td>';
            echo '<td>'.'<a href="ActualizarAuto.php?Id='.$Fila[0].'">Actualizar</a>'.'</td>';
            echo '</tr>';
        }
        echo '</table>';
        Cerrar($Con);    

?>

	</body>
</html>
