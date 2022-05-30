<?php
    // Autenticacion
    include("../login/auth.php");
    authAdmin();
    
    $Numero=$_REQUEST['Numero'];
    include("Conexion.php");
    $Con=Conectar();
    $SQL="SELECT *  FROM  Inventario  WHERE   IdPieza='$Numero';";
    $Result=Ejecutar($Con,$SQL);
    $Fila=mysqli_fetch_row($Result);
    Cerrar($Con);    
?>

<html>
    <form method="post" action="IInventario.php" >
        <h2>FORMULARIO DE VEHICULOS </h2>
        
        <label>Id</label>
        <input type="number" id="IdPieza" value="<?php  print($Fila[0]); ?>"   required="required" name="IdPieza" readonly></input>
        
        <label>Pieza</label>
        <input type="text" id="Pieza" value="<?php  print($Fila[1]); ?>"   required="required" name="Pieza"></input>
       
        <label>Tipo</label>
        <input  type="text" id="Tipo"  value="<?php  print($Fila[2]); ?>"  name="Tipo"></input>
        
        <label>Calibre</label>
        <input  type="text" id="Calibre"  value="<?php  print($Fila[3]); ?>"  name="Calibre"></input>
        
        <label>Precio</label>
        <input  type="text" id="Precio"   value="<?php  print($Fila[4]); ?>" name="Precio"></input>
        
        <input type="submit"> </input>
    </form>
</html>

<?php
    if(isset($_REQUEST['Pieza'])){
        $Pieza=$_REQUEST['Pieza'];
        $Tipo=$_REQUEST['Tipo'];
        $Calibre=$_REQUEST['Calibre'];
        $Precio=$_REQUEST['Precio'];
        
        $Con=Conectar();
        $SQL="UPDATE Inventario  SET Pieza='$Pieza', 
        Tipo='$Tipo', Calibre='$Calibre', 
        Precio='$Precio'
        WHERE IdPieza ='$Numero';";
        $Result=Ejecutar($Con,$SQL);
        print("Registros Actualizados = ".mysqli_affected_rows($Con));
        Cerrar($Con); 
    }

?>