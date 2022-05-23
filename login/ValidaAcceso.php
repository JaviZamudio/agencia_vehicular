<?php
    session_start();
    $Usuario=$_POST['Usuario'];
    $Password=$_POST['Password'];

    include("../Admin/Conexiones.php");
    $Con=Conectar();
    $SQL="SELECT * FROM Usuarios WHERE Usuario='$Usuario';";
    $Result=Ejecutar($Con,$SQL);
    
    $Existe=mysqli_num_rows($Result);
    if($Existe==1){
        print("EL USUARIO EXISTE");
        $Fila=mysqli_fetch_row($Result);
        if($Password==$Fila[2]){
            print("CONTRASEÑA CORRECTA");
                    if($Fila[4]=='A'){
                        $_SESSION['Bandera']=1;
                        print('<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=MenuAdministrador.php"></head>');
                    }else{
                        $_SESSION['BanderaA']=1;
                        print('<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=MenuUsuario.php"></head>');
                    }
            
        }else{
            print("CONTRASEÑA INCORRECTA");
            }
        }else{
        print("EL USUARIO NO EXISTE");
    }
    Cerrar($Con);
?>