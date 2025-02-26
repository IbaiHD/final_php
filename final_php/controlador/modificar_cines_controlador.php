<?php

    require_once("modelo/cines_modelo.php");

    $cines = new Cines_modelo(); 

    if($_SESSION["dato1"] != "" && $_SESSION["dato2"] != ""){
            $aviso_modificado = $cines->modificarCines($_SESSION["id_formulario"], $_SESSION["dato1"], $_SESSION["dato2"]);
            $_SESSION["id_formulario"] = "";
    }else{
        $aviso_modificado = "";
    }


    if($_SESSION["modificar"] == ""){
        $arrayCines = $cines->get_cines();
        require_once("vista/modificar_cines_form_vista.php");
    }else{
        $_SESSION["id_formulario"] = $_SESSION["modificar"];
        $_SESSION["modificar"] = "";
        $arrayCines = $cines->get_cine_seleccionado($_SESSION["id_formulario"]);
        require_once("vista/modificar_cines_vista.php");
    }

?>