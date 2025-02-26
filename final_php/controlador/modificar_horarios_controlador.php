<?php

    require_once("modelo/horarios_modelo.php");

    $horarios = new Horarios_modelo(); 

    if($_SESSION["dato1"] != "" && $_SESSION["dato2"] != ""){
            $aviso_modificado = $horarios->modificarHorarios($_SESSION["id_formulario"], $_SESSION["dato1"], $_SESSION["dato2"]);
            $_SESSION["id_formulario"] = "";
    }else{
        $aviso_modificado = "";
    }


    if($_SESSION["modificar"] == ""){
            if($_SESSION["buscar"] != "" ){
        $busqueda = strtolower($_POST["buscar"]);
        $arrayHorarios = $horarios->get_busqueda($busqueda);
    }else{
        $arrayHorarios = $horarios->get_sesiones();
    }
        require_once("vista/modificar_horarios_form_vista.php");
    }else{
        $_SESSION["id_formulario"] = $_SESSION["modificar"];
        $_SESSION["modificar"] = "";
        $arrayHorarios = $horarios->get_horario_seleccionado($_SESSION["id_formulario"]);
        require_once("vista/modificar_horarios_vista.php");
    }

?>