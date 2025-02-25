<?php

    $error_nombre = "";
    $error_genero = "";
    $aviso_añadido = "";
    if(isset($_POST["nombre"])){
        if(trim(strip_tags($_POST["nombre"])) != ""){
            $nombre = trim(strip_tags($_POST["nombre"]));
        }else{
            $error_nombre = "Campo de nombre vacío";
        }
    }

    if(isset($_POST["genero"])){
        if(trim(strip_tags($_POST["genero"])) != ""){
            $genero = trim(strip_tags($_POST["genero"]));
        }else{
            $error_genero= "Campo de genero vacío";
        }
    }

    if(isset($nombre) && isset($genero)){
        require_once("modelo/peliculas_modelo.php");
        $pelicula = new Peliculas_modelo();
        $aviso_añadido = $pelicula->añadirPeliculas($nombre,$genero);
    }

    require_once("vista/añadir_peliculas_vista.php");

?>