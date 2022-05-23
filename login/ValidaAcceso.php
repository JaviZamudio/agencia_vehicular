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
                        $_SESSION['Usuario']=$Usuario;
                        $_SESSION['Tipo']=$Fila[4];
                        //redirigir a ./MenuAdministrador.php
                        header("Location: ./MenuAdministrador.php");
                    }else if($Fila[4]=='U'){
                        $_SESSION['Bandera']=1;
                        $_SESSION["Usuario"]=$Usuario;
                        $_SESSION["Tipo"] = $Fila[4];
                        //redirigir a ./MenuUsuario.php
                        header("Location: ./MenuUsuario.php");
                    }
                    //para 'Taller'
                    else if($Fila[4]=='T'){
                        $_SESSION['Bandera']=1;
                        $_SESSION["Usuario"]=$Usuario;
                        $_SESSION["Tipo"] = $Fila[4];
                        //redirigir a ./MenuTaller.php
                        header("Location: ./MenuTaller.php");
                    }
        }else{
            print("CONTRASEÑA INCORRECTA");
            }
        }else{
        print("EL USUARIO NO EXISTE");
    }
    Cerrar($Con);
?>