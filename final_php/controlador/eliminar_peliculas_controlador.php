<?php
    require_once("modelo/peliculas_modelo.php");

    $peliculas = new Peliculas_modelo();
    if($_SESSION["eliminar"] != ""){
        $aviso_eliminado = $peliculas->eliminarPeliculas($_SESSION["eliminar"]);
        $_SESSION["eliminar"] = "";
    }else{
        $aviso_eliminado = "";
    }
    $arrayPeliculas = $peliculas->get_peliculas();

    require_once("vista/eliminar_peliculas_vista.php");
?>