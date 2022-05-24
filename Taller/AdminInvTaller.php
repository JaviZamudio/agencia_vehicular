<?php
    session_start();
    if(isset($_SESSION['Bandera']) && $_SESSION['Bandera']==1 && $_SESSION['Tipo']=="A"){
?>
<html> 
<link rel="stylesheet" href="styles/style.css" type="text/css">
    <label></label>
    <head>
		<title></title>
		<style type="text/css">
			
			* {
				margin:0px;
				padding:0px;
			}
			
			#header {
				margin: auto;
				width: 700px;
				font-family:Arial, Helvetica, sans-serif;

			}
			
			ul, ol {
				list-style:none;
			}
			
			.nav > li {
				float:left;
			}
			
			.nav li a {
				background-color:#000;
				color:#fff;
				text-decoration:none;
				padding:10px 12px;
				display:block;
			}
			
			.nav li a:hover {
				background-color:#434343;
			}
			
			.nav li ul {
				display:none;
				position:absolute;
				min-width:140px;
			}
			
			.nav li:hover > ul {
				display:block;
			}
			
			.nav li ul li {
				position:relative;
			}
			
			.nav li ul li ul {
				right:-140px;
				top:0px;
			}
			
		</style>
	</head>
	<body>
		<div id="header">
			<ul class="nav">
				<li><a href="">Taller</a>
                    <ul>
						<li><a href="../Taller/AdminCitasTaller.php">Citas</a></li>
                        <li><a href="../Taller/AdminInvTaller.php">Inventario</a></li>
                    </ul>

                <li><a href="">Registros</a>
                    <ul>
						<li><a href="../Admin/Autos.php">Autos</a></li>
                        <li><a href="../Admin/Empleados.php">Empleados</a></li>
                    </ul>
                <li><a href="">Ventas</a>
                    <ul>
						<li><a href="../Ventas/AdminVentas.php">Lista de Ventas</a></li>
                        <li><a href="../Ventas/AdminRegistrarVentas.php">Nueva Venta</a></li>
                    </ul>
			</ul>
		</div>
        <br><br><br>
        <div>
        <li><a href="./AgregarInventario.php">Nuevo Producto</a>
        </div>
        <br><br><br>
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
            echo '<td>'.'<a href="DPropietarios.php?Numero='.$Fila[0].'">Elimina</a>'.'</td>';
            echo '<td>'.'<a href="UPropietarios.php?Numero='.$Fila[0].'">Actualizar</a>'.'</td>';
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
