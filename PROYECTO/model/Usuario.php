<?php
class Usuario
{
    private $usuario;
    private $nombre;
    private $apellidos;
    private $email;
    private $dni;
    private $telefono;
    private $pwd;
    public function __construct($Usuario, $Nombre, $Apellidos, $Email, $Dni, $Telefono, $Pwd)
    {
        $this->usuario = $Usuario;
        $this->nombre = $Nombre;
        $this->apellidos = $Apellidos;
        $this->email = $Email;
        $this->dni = $Dni;
        $this->telefono = $Telefono;
        $this->pwd = md5($Pwd);
    }
    public function getUsuario()
    {
        return $this->usuario;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getApellidos()
    {
        return $this->apellidos;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getDni()
    {
        return $this->dni;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }
    public function getPwd()
    {
        return $this->pwd;
    }
}