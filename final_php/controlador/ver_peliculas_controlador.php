<?php

    require_once("modelo/peliculas_modelo.php");

    $peliculas = new Peliculas_modelo();
    $arrayPeliculas = $peliculas->get_peliculas();

    require_once("vista/ver_peliculas_vista.php");

?>