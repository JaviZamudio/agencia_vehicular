<?php
    session_start();
    if(isset($_SESSION['Bandera']) && $_SESSION['Bandera']==1 && $_SESSION['Tipo']=="A"){
?>
<html> 
<link rel="stylesheet" href="styles/style.css" type="text/css">
    <label></label>
    <head>

    <link rel="stylesheet" href="../css/Header.css">

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
		<div class="header">
			<div class="header-title">	
				<img src="../images/logo.png" alt="">
				<h1>Agencia Vehicular</h1>
			</div>
			<nav class="nav">
				<div class="dropdown">
					<div class="dropdown-title">
						Taller
					</div>
					<div class="dropdown-content">
						<a href="../Taller/AdminCitasTalller.php" class="dropdown-link">Citas</a>
						<a href="../Taller/AdminInvTaller.php" class="dropdown-link">Inventario</a>
					</div>
				</div>
				<div class="dropdown">
					<div class="dropdown-title">
						Ventas
					</div>
					<div class="dropdown-content">
                        <a href="../Ventas/AdminVentas.php">Lista de Ventas</a>
                        <a href="../Ventas/AdminRegistrarVentas.php">Nueva Venta</a>
					</div>
				</div>
				<div class="dropdown">
					<div class="dropdown-title">
						Registros
					</div>
					<div class="dropdown-content">
                        <a href="../Admin/Autos.php">Autos</a>
                        <a href="../Admin/Empleados.php">Empleados</a>
					</div>
				</div>
			</nav>
		</div>
        <br><br><br>
        <div>

        </div>
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
            echo '<td>'.'<a href="EliminarAuto.php?Id='.$Fila[0].'">Elimina</a>'.'</td>';
            echo '<td>'.'<a href="ActualizarAuto.php?Id='.$Fila[0].'">Actualizar</a>'.'</td>';
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
