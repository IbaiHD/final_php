<?php

    $error_nombre = "";
    $error_ubicacion = "";
    $aviso_añadido = "";
    if(isset($_POST["nombre"])){
        if(trim(strip_tags($_POST["nombre"])) != ""){
            $nombre = trim(strip_tags($_POST["nombre"]));
        }else{
            $error_nombre = "Campo de nombre vacío";
        }
    }

    if(isset($_POST["ubicacion"])){
        if(trim(strip_tags($_POST["ubicacion"])) != ""){
            $ubicacion = trim(strip_tags($_POST["ubicacion"]));
        }else{
            $error_ubicacion = "Campo de ubicación vacío";
        }
    }

    if(isset($nombre) && isset($ubicacion)){
        require_once("modelo/cines_modelo.php");
        $cine = new Cines_modelo();
        $aviso_añadido = $cine->añadirCines($nombre,$ubicacion);
    }

    require_once("vista/añadir_cines_vista.php");

?>