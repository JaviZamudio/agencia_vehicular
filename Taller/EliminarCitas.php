<?php
    $Numero = $_GET['Numero'];
    //Formar la instrucción SQL
    $SQL= "DELETE FROM Citas WHERE IdCitas ='$Numero';";
    print($SQL);

    //Enviar Instrucción al SMDB
    include("Conexion.php");
    $Con=Conectar();
    $Result=Ejecutar($Con,$SQL);

    //Mostrar registros eliminados
    $ContadorRegistrosEliminados=mysqli_affected_rows($Con);
    print("Registros Eliminados = ".$ContadorRegistrosEliminados);
    Cerrar($Con);

?>