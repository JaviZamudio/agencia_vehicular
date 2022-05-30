<?php
	// Autenticacion
    include("../login/auth.php");
    authUsuario);
?>

<?php
    $IdVenta = $_GET['IdVenta'];
    //Formar la instrucción SQL
    $SQL= "DELETE FROM Ventas WHERE IdVenta ='$IdVenta';";


    //Enviar Instrucción al SMDB
    include("Conexion.php");
    $Con=Conectar();
    $Result=Ejecutar($Con,$SQL);

    if($Result){
        print("<script>alert('Venta Eliminada');</script>");
        print("<script>window.location='./IVentas.php';</script>");
    }
    else{
        print("<script>alert('Error al eliminar');</script>");
        print("<script>window.location='./IVentas.php';</script>");
    }
    
    Cerrar($Con);

?>