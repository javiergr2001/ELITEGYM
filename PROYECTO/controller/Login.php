<?php

    require ("../model/Usuario.php");
    require("../db/ConexionUsuarios.php");

    //cuando se reciba el nombre de usuario y la contrasena
    if (isset($_POST["usuariologin"])){
        //compruebo que sean correctos
        if (dbUsuarios::Login($_POST["usuariologin"],$_POST["contrasenalogin"])){
            //si lo son recojo el usuario de la base de datos, lo meto en la sesión y paso al controlador de la tienda
            session_start();
            $usuario = dbUsuarios::RecogerUsuario($_POST["usuariologin"]);
            $_SESSION["usuario"] = $usuario;
            header("location:../view/administracion.html");
        }else{
            //si no lo son vuelvo al login
            $error = "Usuario_o_contraseña_incorrectos";
            header("location:../index.php?error=".$error);
        }
    }
?>
