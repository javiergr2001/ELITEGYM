<?php
/*
 * clase que contiene la funcion conectar(), para conectarse a la base de datos
 */
class ConexionBD{

    //funcion que se conecta a la base de datos a trav�s del objeto PDO conexion y lo devuelve como parametro
    public static function conectar():PDO{
        $conexion = null;
        try{
            $dsn = "mysql:host=mysql.webcindario.com;dbname=elitegym";
            $conexion = new PDO($dsn,'elitegym','Bunker10');
            $conexion ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $conexion->exec("set character set utf8");
        }catch (PDOException $e){
            echo $e->getMessage();
        }
        return $conexion;
    }
}
?>