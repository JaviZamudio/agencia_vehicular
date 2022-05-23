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
        
        <div>

        </div>
	</body>
</html>

<?php
    }else{
        print('<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=FAcceso.html"></head>');
    }
?>