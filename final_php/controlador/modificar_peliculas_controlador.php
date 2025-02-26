<?php

    require_once("modelo/peliculas_modelo.php");

    $peliculas = new Peliculas_modelo(); 

    if($_SESSION["dato1"] != "" && $_SESSION["dato2"] != ""){
            $aviso_modificado = $peliculas->modificarPeliculas($_SESSION["id_formulario"], $_SESSION["dato1"], $_SESSION["dato2"]);
            $_SESSION["id_formulario"] = "";
    }else{
        $aviso_modificado = "";
    }


    if($_SESSION["modificar"] == ""){
        $arrayPeliculas = $peliculas->get_peliculas();
        require_once("vista/modificar_peliculas_form_vista.php");
    }else{
        $_SESSION["id_formulario"] = $_SESSION["modificar"];
        $_SESSION["modificar"] = "";
        $arrayPeliculas = $peliculas->get_peliculas_seleccionadas($_SESSION["id_formulario"]);
        require_once("vista/modificar_peliculas_vista.php");
    }

?>