<?php
	// Autenticacion
    include("../login/auth.php");
    authAdmin();
?>

<?php
    $Numero = $_GET['Numero'];
    //Formar la instrucción SQL
    $SQL= "DELETE FROM Inventario WHERE IdPieza ='$Numero';";
    print($SQL);

    //Enviar Instrucción al SMDB
    include("Conexion.php");
    $Con=Conectar();
    $Result=Ejecutar($Con,$SQL);

    if($Result){
        print("<script>alert('Pieza Eliminada');</script>");
        print("<script>window.location='./Inventario.php';</script>");
    }
    else{
        print("<script>alert('Error al eliminar');</script>");
        print("<script>window.location='./Inventario.php';</script>");
    }

    Cerrar($Con);

?>