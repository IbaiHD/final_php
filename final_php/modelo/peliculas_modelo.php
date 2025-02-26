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
        public function eliminarPeliculas($id){
            $query = "DELETE FROM peliculas WHERE id='$id'";
            $result = $this->conn->query($query);
            if($this->conn->affected_rows > 0){
                return "Se ha eliminado una Película de la base de datos";
            }else{
                return "No se ha encontrado nada que eliminar";
            }
        }

        public function get_peliculas_seleccionadas($id){
            $query = "SELECT * FROM peliculas WHERE id='$id'";
            $result = $this->conn->query($query);
            $this->cines[] = $result->fetch_assoc();
            return $this->cines;
        }

        public function modificarPeliculas($id,$nombre,$genero){
            $query = "UPDATE peliculas SET nombre='$nombre', genero='$genero' WHERE id='$id'";
            $result = $this->conn->query($query);
            if($this->conn->affected_rows > 0){
                return "Se ha modificado una Película de la base de datos";
            }else{
                return "No se ha encontrado nada que modificar";
            }
        }

        public function get_busqueda($busqueda){
            $query = "SELECT * FROM peliculas WHERE genero LIKE '%$busqueda%'";
            $result = $this->conn->query($query);
            while($fila = $result->fetch_assoc()){
                $this->peliculas[]=$fila;
            }
            return $this->peliculas;
        }

    }

?>