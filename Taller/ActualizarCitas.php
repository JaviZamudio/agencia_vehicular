<?php
    $Numero=$_REQUEST['Numero'];
    include("Conexion.php");
    $Con=Conectar();
    $SQL="SELECT *  FROM  Citas  WHERE   IdCitas='$Numero';";
    $Result=Ejecutar($Con,$SQL);
    $Fila=mysqli_fetch_row($Result);
    Cerrar($Con);    
?>

<html>
    <form method="post" action="IInventario.php" >
        <label>FORMULARIO DE VEHICULOS </label>
        <p></p>
        <label>Id</label>
        <input type="number" id="IdCitas" value="<?php  print($Fila[0]); ?>"   required="required" name="IdPieza" readonly></input>
        <br>
        <label>Usuario</label>
        <input type="text" id="Usuario" value="<?php  print($Fila[1]); ?>"   required="required" name="Usuario"></input>
        <br>
        <label>FechaEntrada</label>
        <input  type="date" id="FechaEntrada"  value="<?php  print($Fila[2]); ?>"  name="FechaEntrada"></input>
        <br>
        <label>Modelo</label>
        <input  type="text" id="Modelo"  value="<?php  print($Fila[3]); ?>"  name="Modelo"></input>
        <br>
        <label>Marca</label>
        <input  type="text" id="Marca"   value="<?php  print($Fila[4]); ?>" name="Marca"></input>
        <br>
        <label>Placas</label>
        <input type="text" id="Placas" value="<?php  print($Fila[5]); ?>"   required="required" name="Placas"></input>
        <br>
        <label>NombreCliente</label>
        <input  type="text" id="NombreCliente"  value="<?php  print($Fila[6]); ?>"  name="NombreCliente"></input>
        <br>
        <label>TipoServicio</label>
        <input  type="text" id="TipoServicio"  value="<?php  print($Fila[7]); ?>"  name="TipoServicio"></input>
        <br>
        <label>Contacto</label>
        <input  type="number" id="Contacto"   value="<?php  print($Fila[8]); ?>" name="Contacto"></input>
        <br>
        <label>Costo</label>
        <input  type="number" id="Costo"   value="<?php  print($Fila[9]); ?>" name="Costo"></input>
        <br>
        <input type="submit"> </input>
    </form>
</html>

<?php
    if(isset($_REQUEST['Usuario'])){
        $Usuario=$_REQUEST['Usuario'];
        $FechaEntrada=$_REQUEST['FechaEntrada'];
        $Modelo=$_REQUEST['Modelo'];
        $Marca=$_REQUEST['Marca'];
        $Placas=$_REQUEST['Placas'];
        $NombreCliente=$_REQUEST['NombreCliente'];
        $TipoServicio=$_REQUEST['TipoServicio'];
        $Contacto=$_REQUEST['Contacto'];
        $Marca=$_REQUEST['Marca'];
        
        $Con=Conectar();
        $SQL="UPDATE Inventario  SET Usuario='$Usuario', 
        FechaEntrada='$FechaEntrada', Modelo='$Modelo', 
        Marca='$Marca',Placas='$Placas',
        NombreCliente='$NombreCliente',TipoServicio='$TipoServicio',
        Contacto='$Contacto',Costo='$Costo'
        WHERE IdCitas ='$Numero';";
        $Result=Ejecutar($Con,$SQL);
        print("Registros Actualizados = ".mysqli_affected_rows($Con));
        Cerrar($Con); 
    }

?>