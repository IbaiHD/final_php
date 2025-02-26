<?php

    require_once("modelo/peliculas_modelo.php");

    $peliculas = new Peliculas_modelo();

    if($_SESSION["buscar"] != "" ){
        $busqueda = strtolower($_POST["buscar"]);
        $arrayPeliculas = $peliculas->get_busqueda($busqueda);
    }else{
        $arrayPeliculas = $peliculas->get_peliculas();
    }
    

    require_once("vista/ver_peliculas_vista.php");

?>