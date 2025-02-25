<?php

    require_once("modelo/cines_modelo.php");

    $cines = new Cines_modelo();
    $arrayCines = $cines->get_cines();

    require_once("vista/ver_cines_vista.php");

?>