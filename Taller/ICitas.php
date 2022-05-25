<?php
    $IdCitas = $_POST['IdCitas'];
    $Usuario = $_POST['Usuario'];
    $FechaEntrada = $_POST['FechaEntrada'];
    $Modelo = $_POST['Modelo'];
    $Marca = $_POST['Marca'];
    $Placas = $_POST['Placas'];
    $NombreCliente = $_POST['Nombre$NombreCliente'];
    $TipoServicio = $_POST['TipoServicio'];
    $Contacto = $_POST['Contacto'];
    $Costo = $_POST['Costo'];

    print("IdPieza".$IdPieza."<br>");
    print("Usuario".$Usuario."<br>");
    print("FechaEntrada".$FechaEntrada."<br>");
    print("Modelo".$Modelo."<br>");
    print("Marca".$Marca."<br>");
    print("Placas".$Placas."<br>");
    print("NombreCliente".$NombreCliente."<br>");
    print("TipoServicio".$TipoServicio."<br>");
    print("Contacto".$Contacto."<br>");
    print("Costo".$Costo."<br>");
    
    //Formar la instrucción SQL
    $SQL= "INSERT INTO Citas(IdCitas,Usuario,FechaEntrada,Modelo,
    Marca,Placas,NombreCliente,TipoServicio,Contacto,Costo)
    VALUES('$IdCitas','$Usuario','$FechaEntrada','$Calibre',
    '$Marca','$Placas','$NombreCliente','$TipoServicio','$Contacto','$Costo');";
    print($SQL);

    //Enviar Instrucción al SMDB
    include("Conexion.php");
    $Con=Conectar();
    $Result=Ejecutar($Con,$SQL);
    Cerrar($Con);
?>