<?php
    session_start();
    if(isset($_SESSION['Bandera'])){
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
						<li><a href="..\\Taller\\AdminCitasTaller.php">Citas</a></li>
                        <li><a href="..\\Taller\\AdminInvTaller.php">Inventario</a></li>
                    </ul>

                <li><a href="">Registros</a>
                    <ul>
						<li><a href="..\\Admin\\Autos.php">Autos</a></li>
                        <li><a href="..\\Admin\\Empleados.php">Empleados</a></li>
                    </ul>
                <li><a href="">Ventas</a>
                    <ul>
						<li><a href="..\\Ventas\\AdminVentas.php">Lista de Ventas</a></li>
                        <li><a href="..\\Ventas\\AdminRegistrarVentas.php">Nueva Venta</a></li>
                    </ul>
			</ul>
		</div>
        <br><br><br>
        <div>
        <form method="get">
        Valor
        <input type="text" name="Valor" id="Valor" required><br>
        Atributo:
        <input type="radio" name="Atributo" id="Atributo" value="IdAuto" checked>IdPropietario
        <input type="radio" name="Atributo" id="Atributo" value="NumeroSerie">Nombre
        <input type="radio" name="Atributo" id="Atributo" value="Modelo">RFC
        <input type="radio" name="Atributo" id="Atributo" value="Marca">Localidad
        <input type="radio" name="Atributo" id="Atributo" value="Motor">Municipio
        <input type="radio" name="Atributo" id="Atributo" value="Carrocecía">RFC
        <input type="radio" name="Atributo" id="Atributo" value="CaballosFuerza">Localidad
        <input type="radio" name="Atributo" id="Atributo" value="Puertas">Municipio
        <input type="radio" name="Atributo" id="Atributo" value="Cilindros">Localidad
        <input type="radio" name="Atributo" id="Atributo" value="Combustible">Municipio
        <br>
        <input type="submit">
    <form>

<?php
    if(isset($_GET['Valor'])){
        $Valor=$_GET['Valor'];
        $Atributo=$_GET['Atributo'];
        include("Conexion.php");
        $Con=Conectar();
        $SQL="SELECT * FROM Autos WHERE $Atributo LIKE '%$Valor%';";
        $Result=Ejecutar($Con,$SQL);
        
        ///Crear Tabla
        echo '<table border=1><tr>';
        echo '<th>'.'IdAuto'.'</th>';
        echo '<th>'.'NumeroSerie'.'</th>';
        echo '<th>'.'Modelo'.'</th>';
        echo '<th>'.'Marca'.'</th>';
        echo '<th>'.'Motor'.'</th>';
        echo '<th>'.'Carrocecía'.'</th>';
        echo '<th>'.'CaballosFuerza'.'</th>';
        echo '<th>'.'Puertas'.'</th>';
        echo '<th>'.'Cilindros'.'</th>';
        echo '<th>'.'Combustible'.'</th>';
        echo '<th>'.'Precio'.'</th>';
        echo '</tr>';
        for($F = 0; $F < mysqli_num_rows($Result); $F++)
        {
            $Fila=mysqli_fetch_row($Result);
            echo '<tr>';
            echo '<td>'.$Fila[0].'</td>';
            echo '<td>'.$Fila[2].'</td>';
            echo '<td>'.$Fila[3].'</td>';
            echo '<td>'.$Fila[4].'</td>';
            echo '<td>'.$Fila[5].'</td>'; 
            echo '<td>'.$Fila[6].'</td>';
            echo '<td>'.$Fila[7].'</td>';
            echo '<td>'.$Fila[8].'</td>';
            echo '<td>'.$Fila[9].'</td>';
            echo '<td>'.$Fila[10].'</td>';
            echo '<td>'.'<a href="DPropietarios.php?Numero='.$Fila[0].'">Elimina</a>'.'</td>';
            echo '<td>'.'<a href="UPropietarios.php?Numero='.$Fila[0].'">Actualizar</a>'.'</td>';
            echo '</tr>';
        }
        echo '</table>';
        Cerrar($Con);    
    }

?>

        </div>
	</body>
</html>

<?php
    }else{
        print('<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=FAcceso.html"></head>');
    }
?>