<?php
    // Autenticacion
    include("../login/auth.php");
    authAdmin();

    $IdPieza = $_POST['IdVehiculo'];
    $Pieza = $_POST['Marca'];
    $Tipo = $_POST['Linea'];
    $Calibre = $_POST['Clase'];
    $Precio = $_POST['Modelo'];

    print("IdVehiculo".$IdPieza."<br>");
    print("Marca".$Pieza."<br>");
    print("Linea".$Tipo."<br>");
    print("Clase".$Calibre."<br>");
    print("Modelo".$Precio."<br>");
    
    //Formar la instrucción SQL
    $SQL= "INSERT INTO Inventario(IdPieza,Pieza,Tipo,Calibre,Precio)
    VALUES('$IdPieza','$Pieza','$Tipo','$Calibre','$Precio');";
    print($SQL);

    //Enviar Instrucción al SMDB
    include("Conexion.php");
    $Con=Conectar();
    $Result=Ejecutar($Con,$SQL);

    if($Result){
        print("<script>alert('Pieza Agregada');</script>");
        print("<script>window.location='./Inventario.php';</script>");
    }
    else{
        print("<script>alert('Error al agregar');</script>");
        print("<script>window.location='./Inventario.php';</script>");
    }

    Cerrar($Con);
?>