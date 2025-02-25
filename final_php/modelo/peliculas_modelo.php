<?php

    class Peliculas_modelo{
        private $conn;
        private $peliculas;

        public function __construct(){
            require_once("modelo/conexion.php");
            $this->conn = Conexion::conectar();
            $this->peliculas = array();
        }

        public function get_peliculas(){
            $query = "SELECT * FROM peliculas";
            $result = $this->conn->query($query);
            while($fila = $result->fetch_assoc()){
                $this->peliculas[]=$fila;
            }
            return $this->peliculas;
        }

        public function añadirPeliculas($nombre,$genero){
            $query = "INSERT INTO peliculas(nombre,genero) VALUES ('$nombre','$genero')";
            $result = $this->conn->query($query);
            if($this->conn->affected_rows > 0){
                return "Se ha añadido una nueva Película a la base de datos";
            }else{
                return "No se ha podido añadir nada";
            }
        }        

    }

?>