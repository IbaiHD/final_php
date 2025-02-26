<?php

    class Horarios_modelo{
        private $conn;
        private $horarios;

        public function __construct(){
            require_once("modelo/conexion.php");
            $this->conn = Conexion::conectar();
            $this->horarios = array();
        }

        public function get_horarios(){
            $query = "SELECT * FROM horarios";
            $result = $this->conn->query($query);
            while($fila = $result->fetch_assoc()){
                $this->horarios[]=$fila;
            }
            return $this->horarios;
        }

        public function get_sesiones(){
            $query = "SELECT p.nombre as nombrepeli, c.nombre as nombrecine, h.hora_inicio, h.hora_fin, h.id 
                FROM horarios h 
                INNER JOIN peliculas p ON h.id_pelicula = p.id
                INNER JOIN cines c ON h.id_cine = c.id
                ORDER BY h.hora_inicio ASC";
            $result = $this->conn->query($query);
            while($fila = $result->fetch_assoc()){
                $this->horarios[]=$fila;
            }
            return $this->horarios;
        }

        public function get_busqueda($buscar){
            $query = "SELECT p.nombre as nombrepeli, c.nombre as nombrecine, h.hora_inicio, h.hora_fin, h.id
                FROM horarios h 
                INNER JOIN peliculas p ON h.id_pelicula = p.id
                INNER JOIN cines c ON h.id_cine = c.id
                WHERE p.nombre LIKE '%$buscar%'
                ORDER BY h.hora_inicio ASC";
            $result = $this->conn->query($query);

            $this->horarios = array();
            while($fila = $result->fetch_assoc()){
                $this->horarios[]=$fila;
            }
            return $this->horarios;
        }

        public function añadirSesiones($nombre_pelicula,$nombre_cine,$hora_inicio,$hora_fin){
            $query = "INSERT INTO horarios(hora_inicio,hora_fin,id_pelicula,id_cine) VALUES ('$hora_inicio','$hora_fin','$nombre_pelicula','$nombre_cine')";
            $result = $this->conn->query($query);
            if($this->conn->affected_rows > 0){
                return "Se ha añadido una nueva sesión a la base de datos";
            }else{
                return "No se ha podido añadir nada";
            }
        }

        public function eliminarHorarios($id){
            $query = "DELETE FROM horarios WHERE id='$id'";
            $result = $this->conn->query($query);
            if($this->conn->affected_rows > 0){
                return "Se ha eliminado una Sesión de la base de datos";
            }else{
                return "No se ha encontrado nada que eliminar";
            }
        }

        public function get_horario_seleccionado($id){
            $query = "SELECT p.nombre as nombrepeli, c.nombre as nombrecine, h.hora_inicio, h.hora_fin, h.id 
            FROM horarios h 
            INNER JOIN peliculas p ON h.id_pelicula = p.id
            INNER JOIN cines c ON h.id_cine = c.id
            WHERE h.id='$id'";
            $result = $this->conn->query($query);
            $this->horarios[] = $result->fetch_assoc();
            return $this->horarios;
        }

        public function modificarHorarios($id,$hora_inicio,$hora_fin){
            $query = "UPDATE horarios SET hora_inicio='$hora_inicio', hora_fin='$hora_fin' WHERE id='$id'";
            $result = $this->conn->query($query);
            if($this->conn->affected_rows > 0){
                return "Se ha modificado un Cine de la base de datos";
            }else{
                return "No se ha encontrado nada que modificar";
            }
        }

    }

?>