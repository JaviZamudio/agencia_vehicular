<?php

    $Id=$_POST['Id'];
    $Usuario=$_POST['Usuario'];
    $Password=$_POST['Password'];
    $Nombre=$_POST['Nombre'];
    $TipoUsuario=$_POST['TipoUsuario'];
    $Correo=$_POST['Correo'];
    $NumTelefono=$_POST['NumTelefono'];

    print("Id:".$Id."<br>");
    print("Usuario:".$Usuario."<br>");
    print("Password:".$Password."<br>");
    print("Nombre:".$Nombre."<br>");
    print("TipoUsuario:".$TipoUsuario."<br>");
    print("Correo:".$Correo."<br>");
    print("NumTelefono:".$NumTelefono."<br>");

    //Formar la instruccion SQL
    $SQL="INSERT INTO Vehiculos (Id,Usuario,Password,Nombre,TipoUsuario,Correo,NumTelefono) 
    VALUES('$Id','$Usuario','$Password','$Nombre','$TipoUsuario','$Correo','$NumTelefono')";
    print($SQL);

    //Enviar instruccion al SMBD
    include("Conexiones.php");
    $Con=Conectar();
    $Result=Ejecutar($Con,$SQL);
    Cerrar($Con);

?>