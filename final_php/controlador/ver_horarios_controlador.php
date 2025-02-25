<?php

    require_once("modelo/horarios_modelo.php");

    $horarios = new Horarios_modelo();

    if($_SESSION["buscar"] != "" ){
        $busqueda = strtolower($_POST["buscar"]);
        $arrayHorarios = $horarios->get_busqueda($busqueda);
    }else{
        $arrayHorarios = $horarios->get_sesiones();
    }
    
    require_once("vista/ver_horarios_vista.php");

?>