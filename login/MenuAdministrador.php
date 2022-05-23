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
						<li><a href="..\\Taller\\CitasTaller.php">Citas</a></li>
                        <li><a href="..\\Taller\\InvTaller.php">Inventario</a></li>
                    </ul>

                <li><a href="">Propietarios</a>
                    <ul>
						<li><a href=FPropietarios.html?>Alta</a></li>
                        <li><a href=CPropietarios.php?>Modificar</a></li>
                    </ul>
                <li><a href="">Tarjetas</a>
                    <ul>
						<li><a href=FTarjetas.html?>Alta</a></li>
                        <li><a href=CTarjetas.php?>Modificar</a></li>
                    </ul>
                <li><a href="">Vehiculos</a>
                    <ul>
						<li><a href=FVehiculos.html?>Alta</a></li>
                        <li><a href=CVehiculos.php?>Modificar</a></li>
                    </ul>
				<li><a href="">Verificaciones</a>
                    <ul>
						<li><a href=FVerificaciones.html?>Alta</a></li>
                        <li><a href=CVerificaciones.php?>Modificar</a></li>
                    </ul>
				<li><a href="">Conductores</a>
                    <ul>
						<li><a href=FConductores.html?>Alta</a></li>
                        <li><a href=CConductores.php?>Modificar</a></li>
                    </ul>
				<li><a href="">Licencias</a>
                    <ul>
						<li><a href=FLicencias.html?>Alta</a></li>
                        <li><a href=CLicencias.php?>Modificar</a></li>
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