<?php
	// Autenticacion
    include("../login/auth.php");
    authAdmin();
?>

<?php
    $Numero = $_GET['Numero'];
    //Formar la instrucción SQL
    $SQL= "DELETE FROM Citas WHERE IdCitas ='$Numero';";


    //Enviar Instrucción al SMDB
    include("Conexion.php");
    $Con=Conectar();
    $Result=Ejecutar($Con,$SQL);

    if($Result){
        print("<script>alert('Cita Eliminada');</script>");
        print("<script>window.location='./Citas.php';</script>");
    }
    else{
        print("<script>alert('Error al eliminar');</script>");
        print("<script>window.location='./Citas.php';</script>");
    }
    
    Cerrar($Con);

?>