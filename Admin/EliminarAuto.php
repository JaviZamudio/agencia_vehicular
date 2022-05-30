<html>
<head>
    <!-- ESTILOS -->
    <link rel="stylesheet" href="styles/style.css" type="text/css">
    <link rel="stylesheet" href="../css/Header.css">
</head>
<body>
    <!-- HEADER -->

    <!-- CONTENIDO -->
    
    <?php
    include("../login/auth.php");
    authAdmin();
    
    $Id=$_GET['Id'];
    
    include("Conexiones.php");
    $Con=Conectar();
    $SQL="DELETE FROM Vehiculos WHERE Id = '$Id';";
    $Result=Ejecutar($Con,$SQL);
    $ContadorEliminados=mysqli_affected_rows($Con);
    
    if($Result){
        print("<script>alert('Vehiculo Eliminado');</script>");
        print("<script>window.location='./Autos.php';</script>");
    }
    else{
        print("<script>alert('Error al eliminar');</script>");
        print("<script>window.location='./Autos.php';</script>");
    }
    Cerrar($Con);
    ?>
</body>
</html>