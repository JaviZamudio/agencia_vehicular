<?php
    include("../login/auth.php");
	authAdmin();
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
        echo '<th>'.'Nombre de Usuario'.'</th>';
        echo '<th>'.'Fecha de Entrada'.'</th>';
        echo '<th>'.'Modelo'.'</th>';
        echo '<th>'.'Marca'.'</th>';
        echo '<th>'.'Placas'.'</th>';
        echo '<th>'.'Nombre del Cliente'.'</th>';
        echo '<th>'.'Tipo de Servicio'.'</th>';
        echo '<th>'.'Contacto del cliente'.'</th>';
        echo '<th>'.'Costo'.'</th>';

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
            echo '<td>'.'<a href="EliminarCitas.php?Numero='.$Fila[0].'">Elimina</a>'.'</td>';
            echo '<td>'.'<a href="ActualizarCitas.php?Numero='.$Fila[0].'">Actualizar</a>'.'</td>';
            echo '</tr>';
        }
        echo '</table>';
        Cerrar($Con);    
    ?>

	</body>
</html>
