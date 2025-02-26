<?php

    $aviso_añadido = "";
    if(isset($_POST["nombre_pelicula"])){
            $nombre_pelicula = intval($_POST["nombre_pelicula"]);
        }

    if(isset($_POST["nombre_cine"])){
            $nombre_cine = intval($_POST["nombre_cine"]);
        }

    if(isset($_POST["hora_inicio"])){
        $hora_inicio = $_POST["hora_inicio"];
    }

    if(isset($_POST["hora_fin"])){
        $hora_fin = $_POST["hora_fin"];
    }

    if(isset($nombre_pelicula) && isset($nombre_cine) && isset($hora_inicio) && isset($hora_fin)){
        require_once("modelo/horarios_modelo.php");
        $horarios = new horarios_modelo();
        $aviso_añadido = $horarios->añadirSesiones($nombre_pelicula,$nombre_cine,$hora_inicio,$hora_fin);
    }


    require_once("vista/añadir_horarios_vista.php");

?>