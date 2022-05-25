<?php
    $Id=$_GET['Id'];

    include("Conexiones.php");
    $Con=Conectar();
    $SQL="DELETE FROM Usuarios WHERE Id = '$Id';";
    $Result=Ejecutar($Con,$SQL);
    $ContadorEliminados=mysqli_affected_rows($Con);
    print("Registros eliminados = ". $ContadorEliminados);
    Cerrar($Con);
?>