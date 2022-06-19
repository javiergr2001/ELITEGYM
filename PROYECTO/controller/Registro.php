<?php
    
    require("../model/Usuario.php");
    require("../db/ConexionUsuarios.php");

    //cuando se reciban los datos del usuario
    if (isset($_POST["nombre"])){
        $usuario = $_POST["usuario"];
        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        $email = $_POST["email"];
        $dni = $_POST["dni"];
        $tel = $_POST["telefono"];
        $contrasena = $_POST["contrasena"];
        $us = new Usuario($usuario,$nombre,$apellidos,$email,$dni,$tel,$contrasena);
        try {
            //Guarda usuario, manda al login
            dbUsuarios::addUsuario($us);
            header("location:../index.php");
        }catch (PDOException $e){
            //si salta la excepcion es porque el nombre de usuario ya existe, asi que vuelvo a la vista y muestro un mensaje de error
            header("location:../index.php?error=El nombre de usuario ya existe");
        }
    }