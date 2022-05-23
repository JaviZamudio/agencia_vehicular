<?php
function Conectar(){
    $Servidor="localhost";
    $Usuario="root";
    $Contrasena="";
    $BD="AgenciaVehicular";
    $Con = mysqli_connect($Servidor,$Usuario,$Contrasena,$BD);
    return $Con;
}

function Ejecutar($Con,$SQL){
$Result=mysqli_query($Con,$SQL) or die(mysqli_error($Con));
    return $Result;
}

function Cerrar($Con){
    mysqli_close($Con);
}
?>