<HTML>
<HEAD>
    <TITLE>Eliminar Empleado</TITLE>

    <!-- ESTILOS -->
    <link rel="stylesheet" href="../css/Forms.css">
    <link rel="stylesheet" href="../css/Header.css">
</HEAD>

<body>
    <!-- HEADER -->

    <!-- CONTENIDO -->
    
    <?php
    include("../login/auth.php");
    authAdmin();
    
    $Id=$_GET['Id'];
    
    include("Conexiones.php");
    $Con=Conectar();
    $SQL="DELETE FROM Usuarios WHERE Id = '$Id';";
    $Result=Ejecutar($Con,$SQL);
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
</HTML>