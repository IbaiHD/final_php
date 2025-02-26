<?php

    require_once("modelo/cines_modelo.php");

    $cines = new Cines_modelo(); 
    if($_SESSION["modificar"] != ""){
        $aviso_eliminado = $cines->modificarCines($_SESSION["modificar"], $_SESSION["dato1"], $_SESSION["dato2"]);
        $_SESSION["modificar"] = "";
    }else{
        $aviso_eliminado = "";
    }
    $arrayCines = $cines->get_cines();

    if($_SESSION["modificar"] == ""){
        require_once("vista/modificar_cines_form_vista.php");
    }else{
        require_once("vista/modificar_cines_vista.php");
    }

?>