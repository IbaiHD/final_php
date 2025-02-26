<?php

    require_once("modelo/horarios_modelo.php");

    $horarios = new Horarios_modelo();

    if($_SESSION["eliminar"] != ""){
        $aviso_eliminado = $horarios->eliminarHorarios($_SESSION["eliminar"]);
        $_SESSION["eliminar"] = "";
    }else{
        $aviso_eliminado = "";
    }

    if($_SESSION["buscar"] != "" ){
        $busqueda = strtolower($_POST["buscar"]);
        $arrayHorarios = $horarios->get_busqueda($busqueda);
    }else{
        $arrayHorarios = $horarios->get_sesiones();
    }
    
    require_once("vista/eliminar_horarios_vista.php");

?>