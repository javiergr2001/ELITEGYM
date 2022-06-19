<?php
require_once("ConexionBD.php");
require_once("../model/Usuario.php");

/*
     * clase que sirve para el manejo de usuarios de la base de datos
     * contiene algunos metodos para la funcionalidad de la clase
     */

class DbUsuarios
{
    //funcion que recoge un usuario segun su nombre de usuario y lo devuelve commo parametro
    public static function RecogerUsuario($usuario)
    {
        $conexion = ConexionBD::conectar();
        $sql = $conexion->query("select * from usuarios where Usuario = '" . $usuario . "'");
        $sql->setFetchMode(PDO::FETCH_OBJ);
        $usuario = $sql->fetch();

        return new Usuario($usuario->Usuario, $usuario->Nombre, $usuario->Apellidos, $usuario->Email, $usuario->Dni, $usuario->Telefono, $usuario->Pwd);
    }

    /*
     * función que comprueba que el usuario y la contrasena son correctos
     * recibe el nombre de usuario y la contrasena como parametros
     * recoge la contrasena del usuario que se recibe y comprueba si esta es igual a la que se recibe como parametro
     * devuelve true si el usuario y la contrasena coinciden y false si no
     */
    public static function Login($usuario,$password)
    {
        $conexion = ConexionBD::conectar();
        $sql = $conexion->query("select Pwd from usuarios where Usuario = '".$usuario."'");
        $sql = $sql->fetch();
        $pwd = $sql[0];

        return md5($password) == $pwd;
    }

    //Añade a la base de datos los datos que introduzca el usuario
    public static function addUsuario(Usuario $usuario)
    {
        $conexion = ConexionBD::conectar();
        $sql = $conexion->prepare("insert into usuarios(Usuario,Nombre,Apellidos,Email,Dni,Telefono,Pwd) values(:usuario,:nombre,:apellidos,:email,:dni,:telefono,:contrasena)");

        $us = $usuario->getUsuario();
        $nombre = $usuario->getNombre();
        $apell = $usuario->getApellidos();
        $email = $usuario->getEmail();
        $dni = $usuario->getDni();
        $tel = $usuario->getTelefono();
        $pwd = $usuario->getPwd();

        $sql->bindParam("usuario", $us);
        $sql->bindParam("nombre", $nombre);
        $sql->bindParam("apellidos", $apell);
        $sql->bindParam("email", $email);
        $sql->bindParam("dni", $dni);
        $sql->bindParam("telefono", $tel);
        $sql->bindParam("contrasena", $pwd);
        $sql->execute();
    }
}
