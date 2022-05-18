<?php
    session_start();
    if(isset($_SESSION['BanderaA'])){
?>
<html>
<link rel="stylesheet" href="styles/style.css" type="text/css">
    <label>MENU USUARIO</label>
    <head>
		<title>Menu Desplegable</title>
		<style type="text/css">
			
			* {
				margin:0px;
				padding:0px;
			}
			
			#header {
				margin:auto;
				width:2000px;
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
				<li><a href="">Multas</a>
                    <ul>
                        <li><a href=CUMultas.php?>Consultar</a></li>
                    </ul>

                <li><a href="">Propietarios</a>
                    <ul>
                        <li><a href=CUPropietarios.php?>Consultar</a></li>
                    </ul>
                <li><a href="">Tarjetas</a>
                    <ul>
                        <li><a href=CUTarjetas.php?>Consultar</a></li>
                    </ul>
                <li><a href="">Vehiculos</a>
                    <ul>
                        <li><a href=CUVehiculos.php?>Consultar</a></li>
                    </ul>
				<li><a href="">Verificaciones</a>
                    <ul>
                        <li><a href=CUVerificaciones.php?>Consultar</a></li>
                    </ul>
				<li><a href="">Conductores</a>
                    <ul>
                        <li><a href=CUConductores.php?>Consultar</a></li>
                    </ul>
				<li><a href="">Licencias</a>
                    <ul>
                        <li><a href=CULicencias.php?>Consultar</a></li>
                    </ul>

			</ul>
		</div>
	</body>
</html>

<?php
    }else{
        print('<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=FAcceso.html"></head>');
    }
?>