<?php

    session_start();

    if(isset($_POST["tarea"])){
        $_SESSION["tarea"] = $_POST["tarea"];
    }

    if(isset($_POST["tabla"])){
        $_SESSION["tabla"] = $_POST["tabla"];
    }

    if(isset($_POST["buscar"])){
        $_SESSION["buscar"] = $_POST["buscar"];
    }else{
        $_SESSION["buscar"] = "";
    }

    if(isset($_POST["eliminar"])){
        $_SESSION["eliminar"] = $_POST["eliminar"];
    }else{
        $_SESSION["eliminar"] = "";
    }

    if(isset($_POST["modificar"])){
        $_SESSION["modificar"] = $_POST["modificar"];
    }else{
        $_SESSION["modificar"] = "";
    }

    if(isset($_POST["dato1"])){
        $_SESSION["dato1"] = $_POST["dato1"];
    }else{
        $_SESSION["dato1"] = "";
    }

    if(isset($_POST["dato2"])){
        $_SESSION["dato2"] = $_POST["dato2"];
    }else{
        $_SESSION["dato2"] = "";
    }

    if(isset($_POST["dato3"])){
        $_SESSION["dato3"] = $_POST["dato3"];
    }else{
        $_SESSION["dato3"] = "";
    }

    if(isset($_POST["dato4"])){
        $_SESSION["dato4"] = $_POST["dato4"];
    }else{
        $_SESSION["dato4"] = "";
    }

    switch ($_SESSION["tarea"]){
        case "añadir":
            switch ($_SESSION["tabla"]){
                case "peliculas":
                    require_once("controlador/añadir_peliculas_controlador.php");
                    break;
                case "cines":
                    require_once("controlador/añadir_cines_controlador.php");
                    break;
                case "horarios":
                    require_once("controlador/añadir_horarios_controlador.php");
                    break;
            }
        break;

        case "eliminar":
            switch ($_SESSION["tabla"]){
                case "peliculas":
                    require_once("controlador/eliminar_peliculas_controlador.php");
                    break;
                case "cines":
                    require_once("controlador/eliminar_cines_controlador.php");
                    break;
                case "horarios":
                    require_once("controlador/eliminar_horarios_controlador.php");
                    break;
            }
        break;

        case "modificar":
            switch ($_SESSION["tabla"]){
                case "peliculas":
                    require_once("controlador/modificar_pelicula_controlador.php");
                    break;
                case "cines":
                    require_once("controlador/modificar_cines_controlador.php");
                    break;
                case "horarios":
                    require_once("controlador/modificar_horarios_controlador.php");
                    break;
            }
        break;   
        
        case "consultar":
            switch ($_SESSION["tabla"]){
                case "peliculas":
                    require_once("controlador/ver_peliculas_controlador.php");
                    break;
                case "cines":
                    require_once("controlador/ver_cines_controlador.php");
                    break;
                case "horarios":
                    require_once("controlador/ver_horarios_controlador.php");
                    break;
            }
        break;          
    }

?>