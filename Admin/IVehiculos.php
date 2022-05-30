<?php

    include("../login/auth.php");
	authAdmin();

    $Id=$_POST['Id'];
    $Imagen=$_POST['Imagen'];
    $Marca=$_POST['Marca'];
    $Linea=$_POST['Linea'];
    $Clase=$_POST['Clase'];
    $Modelo=$_POST['Modelo'];
    $NumSerie=$_POST['NumSerie'];
    $Tipo=$_POST['Tipo'];
    $Capacidad=$_POST['Capacidad'];
    $Combustible=$_POST['Combustible'];
    $Origen=$_POST['Origen'];
    $Color=$_POST['Color'];
    $Cilindros=$_POST['Cilindros'];
    $Puertas=$_POST['Puertas'];
    $Asientos=$_POST['Asientos'];
    $Transmision=$_POST['Transmision'];
    $Precio=$_POST['Precio'];

    print("Id:".$Id."<br>");
    print("Imagen:".$Imagen."<br>");
    print("Marca:".$Marca."<br>");
    print("Linea:".$Linea."<br>");
    print("Clase:".$Clase."<br>");
    print("Modelo:".$Modelo."<br>");
    print("NumSerie:".$NumSerie."<br>");
    print("Tipo:".$Tipo."<br>");
    print("Capacidad:".$Capacidad."<br>");
    print("Combustible:".$Combustible."<br>");
    print("Origen:".$Origen."<br>");
    print("Color:".$Color."<br>");
    print("Cilindros:".$Cilindros."<br>");
    print("Puertas:".$Puertas."<br>");
    print("Asientos:".$Asientos."<br>");
    print("Transmision:".$Transmision."<br>");
    print("Precio:".$Precio."<br>");

    //Formar la instruccion SQL
    $SQL="INSERT INTO Vehiculos (Id,Imagen,Marca,Linea,Clase,Modelo,NumSerie,Tipo,Capacidad,Combustible,Origen,Color,Cilindros,Puertas,Asientos,Transmision,Precio) 
    VALUES('$Id','$Imagen','$Marca','$Linea','$Clase','$Modelo','$NumSerie','$Tipo','$Capacidad','$Combustible','$Origen','$Color','$Cilindros','$Puertas','$Asientos','$Transmision','$Precio')";
    print($SQL);

    //Enviar instruccion al SMBD
    include("Conexiones.php");
    $Con=Conectar();
    $Result=Ejecutar($Con,$SQL);

    if($Result){
        print("<script>alert('Vehiculo Creado');</script>");
        print("<script>window.location='./Autos.php';</script>");
    }
    else{
        print("<script>alert('Error al crear');</script>");
        print("<script>window.location='./Autos.php';</script>");
    }

    Cerrar($Con);

?>