<?php
    function authAdmin(){
        session_start();
        if(!isset($_SESSION['Bandera']) || $_SESSION['Bandera']!=1 || $_SESSION['Tipo']!='A'){
            header("Location: ./PaginaRestringida.html");
        }
    }
    function authTaller(){
        session_start();
        if(!isset($_SESSION['Bandera']) || $_SESSION['Bandera']!=1 || $_SESSION['Tipo']!='T'){
            header("Location: ./PaginaRestringida.html");
        }
    }
    function authUsuario(){
        session_start();
        if(!isset($_SESSION['Bandera']) || $_SESSION['Bandera']!=1 || $_SESSION['Tipo']!='U'){
            header("Location: ./PaginaRestringida.html");
        }
    }
?>