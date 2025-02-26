<?php

    class Cines_modelo{
        private $conn;
        private $cines;

        public function __construct(){
            require_once("modelo/conexion.php");
            $this->conn = Conexion::conectar();
            $this->cines = array();
        } 

        public function get_cines(){
            $query = "SELECT * FROM cines";
            $result = $this->conn->query($query);
            while($fila = $result->fetch_assoc()){
                $this->cines[]=$fila;
            }
            return $this->cines;
        }

        public function añadirCines($nombre,$ubicacion){
            $query = "INSERT INTO cines(nombre,ubicacion) VALUES ('$nombre','$ubicacion')";
            $result = $this->conn->query($query);
            if($this->conn->affected_rows > 0){
                return "Se ha añadido un nuevo Cine a la base de datos";
            }else{
                return "No se ha podido añadir nada";
            }
        }

        public function eliminarCines($id){
            $query = "DELETE FROM cines WHERE id='$id'";
            $result = $this->conn->query($query);
            if($this->conn->affected_rows > 0){
                return "Se ha eliminado un Cine de la base de datos";
            }else{
                return "No se ha encontrado nada que eliminar";
            }
        }

        public function modificarCines($id,$nombre,$ubicacion){
            $query = "UPDATE FROM cines SET nombre='$nombre', ubicacion='$ubicacion' WHERE id='$id'";
            $result = $this->conn->query($query);
            if($this->conn->affected_rows > 0){
                return "Se ha modificado un Cine de la base de datos";
            }else{
                return "No se ha encontrado nada que modificar";
            }
        }

    }

?>