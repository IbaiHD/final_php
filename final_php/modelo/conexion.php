<?php
    class Conexion{
        public static function conectar(){

            $conexion = new MYSQLI("localhost","root","","cinedb");

            if($conexion->connect_error){
                die("Error de conexion con la base de datos: " .$conexion->connect_error);
            }
            
            $conexion->set_charset("UTF8");            
            return $conexion;
        }
    }
?>