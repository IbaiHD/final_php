<?php

    require_once("modelo/cines_modelo.php");

    $cines = new Cines_modelo(); 
    if($_SESSION["eliminar"] != ""){
        $aviso_eliminado = $cines->eliminarCines($_SESSION["eliminar"]);
        $_SESSION["eliminar"] = "";
    }else{
        $aviso_eliminado = "";
    }
    $arrayCines = $cines->get_cines();

    require_once("vista/eliminar_cines_vista.php");

?>