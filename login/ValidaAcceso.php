<?php
    session_start();
    $UserName=$_POST['UserName'];
    $Password=$_POST['Password'];

    include("Conexiones.php");
    $Con=Conectar();
    $SQL="SELECT * FROM Cuentas WHERE UserName='$UserName';";
    $Result=Ejecutar($Con,$SQL);
    
    $Existe=mysqli_num_rows($Result);
    if($Existe==1){
        print("EL USUARIO EXISTE");
        $Fila=mysqli_fetch_row($Result);
        if($Password==$Fila[1]){
            print("CONTRASEÑA CORRECTA");
            $SQL="UPDATE Cuentas SET Intentos='0' WHERE UserName='$UserName';";
            if($Fila[3]==1){
                print("CUENTA ACTIVA");
                if($Fila[4]==0){
                    //$_SESSION['Bandera']=1;
                    if($Fila[2]=='A'){
                        $_SESSION['Bandera']=1;
                        print('<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=MenuAdministrador.php"></head>');
                    }else{
                        $_SESSION['BanderaA']=1;
                        print('<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=MenuUsuario.php"></head>');
                    }
                }else{
                    print("ACCESO DENEGADO");
                }
            }else{
                print("CUENTA NO ACTIVA");
            }
        }else{
            print("CONTRASEÑA INCORRECTA");
            $SQL="UPDATE Cuentas SET Intentos='$Intentos + 1' WHERE Username='$Username';";
            }
        }else{
        print("EL USUARIO NO EXISTE");
    }
    Cerrar($Con);
?>