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
        <input type="radio" name="Atributo" id="Atributo" value="IdUsuario" checked>IdPropietario
        <input type="radio" name="Atributo" id="Atributo" value="Usuario">Nombre
        <input type="radio" name="Atributo" id="Atributo" value="Nombre">RFC
        <input type="radio" name="Atributo" id="Atributo" value="TipoUsuario">Localidad
        <input type="radio" name="Atributo" id="Atributo" value="Correo">Municipio
        <input type="radio" name="Atributo" id="Atributo" value="Domicilio">RFC
        <input type="radio" name="Atributo" id="Atributo" value="NumeroTelefono">Localidad
        <br>
        <input type="submit">
    <form>

<?php
    if(isset($_GET['Valor'])){
        $Valor=$_GET['Valor'];
        $Atributo=$_GET['Atributo'];
        include("Conexion.php");
        $Con=Conectar();
        $SQL="SELECT * FROM Usuarios WHERE $Atributo LIKE '%$Valor%';";
        $Result=Ejecutar($Con,$SQL);
        
        ///Crear Tabla
        echo '<table border=1><tr>';
        echo '<th>'.'IdUsuario'.'</th>';
        echo '<th>'.'Usuario'.'</th>';
        echo '<th>'.'Nombre'.'</th>';
        echo '<th>'.'TipoUsuario'.'</th>';
        echo '<th>'.'Correo'.'</th>';
        echo '<th>'.'Domicilio'.'</th>';
        echo '<th>'.'NumeroTelefono'.'</th>';
        echo '</tr>';
        for($F = 0; $F < mysqli_num_rows($Result); $F++)
        {
            $Fila=mysqli_fetch_row($Result);
            echo '<tr>';
            echo '<td>'.$Fila[0].'</td>';
            echo '<td>'.$Fila[1].'</td>';
            echo '<td>'.$Fila[3].'</td>';
            echo '<td>'.$Fila[4].'</td>';
            echo '<td>'.$Fila[5].'</td>'; 
            echo '<td>'.$Fila[6].'</td>';
            echo '<td>'.$Fila[7].'</td>';
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