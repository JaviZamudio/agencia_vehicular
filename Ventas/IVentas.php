<?php
    // Autenticacion
    include("../login/auth.php");
    authUsuario();

    $IdVentas = $_POST['IdVentas'];
    $IdUsuario = $_POST['IdUsuario'];
    $IdAuto = $_POST['IdAuto'];
    $NomCliente = $_POST['NomCliente'];
    $Fecha = $_POST['Fecha'];
    $Domicilio = $_POST['Domicilio'];
    $Correo = $_POST['Nombre$Correo'];
    $Telefono = $_POST['Telefono'];
    $RFC = $_POST['RFC'];
    $CURP = $_POST['CURP'];
    $Monto = $_POST['Monto'];

    print("IdVenta".$IdVenta."<br>");
    print("IsUsuario".$IsUsuario."<br>");
    print("IdAuto".$IdAuto."<br>");
    print("NomCliente".$NomCliente."<br>");
    print("Fecha".$Fecha."<br>");
    print("Domicilio".$Domicilio."<br>");
    print("Correo".$Correo."<br>");
    print("Telefono".$Telefono."<br>");
    print("RFC".$RFC."<br>");
    print("CURP".$CURP."<br>");
    print("Monto".$Monto."<br>");
    
    //Formar la instrucción SQL
    $SQL= "INSERT INTO Ventas(IdVenta,IdUsuario,IdAuto,NomCliente,
    Fecha,Domicilio,Correo,Telefono,RFC,CURP,Monto)
    VALUES('$IdVenta,'$IdUsuario','$IdAuto','$NomCliente',
    '$Fecha','$Domicilio','$Correo','$Telefono','$RFC','$CURP','$Monto');";
    print($SQL);

    //Enviar Instrucción al SMDB
    include("Conexiones.php");
    $Con=Conectar();
    $Result=Ejecutar($Con,$SQL);

    if($Result){
        print("<script>alert('Venta Creada');</script>");
        print("<script>window.location='./IVentas.php';</script>");
    }
    else{
        print("<script>alert('Error al agregar');</script>");
        print("<script>window.location='./IVentas.php';</script>");
    }

    Cerrar($Con);
?>