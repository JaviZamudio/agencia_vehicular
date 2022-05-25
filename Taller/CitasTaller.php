<?php
    session_start();
    if(isset($_SESSION['Bandera']) && $_SESSION['Bandera']==1 && $_SESSION['Tipo']=="A"){
?>

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
            echo '</tr>';
        }
        echo '</table>';
        Cerrar($Con);    
    }else{
        // echo "<script>alert($_SESSION[''])</script>"
        header("Location: ../login/FAcceso.html");
    }

?>

        </div>
	</body>
</html>