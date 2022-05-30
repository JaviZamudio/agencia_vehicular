<?php
	// Autenticacion
    include("../login/auth.php");
    authTaller();
?>
<html> 
    <head>
		<link rel="stylesheet" href="styles/style.css" type="text/css">
	</head>
	<body>
		
<?php
        
        include("./Conexiones.php");
        $Con=Conectar();
        $SQL="SELECT * FROM Inventario";
        $Result=Ejecutar($Con,$SQL);
        
        ///Crear Tabla
        echo '<table border=1><tr>';
        echo '<th>'.'Id'.'</th>';
        echo '<th>'.'Nombre'.'</th>';
        echo '<th>'.'Tipo'.'</th>';
        echo '<th>'.'Calibre'.'</th>';
        echo '<th>'.'Precio'.'</th>';

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
            echo '<td>'.'<a href="EliminarInventario.php?Numero='.$Fila[0].'">Elimina</a>'.'</td>';
            echo '<td>'.'<a href="ACtualizarIntentario.php?Numero='.$Fila[0].'">Actualizar</a>'.'</td>';
            echo '</tr>';
        }
        echo '</table>';
        Cerrar($Con);    

?>

	</body>
</html>
