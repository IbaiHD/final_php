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
                    require_once("controlador/añadir_pelicula_controlador.php");
                    break;
                case "cines":
                    require_once("controlador/añadir_cines_controlador.php");
                    break;
                case "horarios":
                    require_once("controlador/añadir_horarios_controlador.php");
                    break;
            }
        break;

        case "modificar":
            switch ($_SESSION["tabla"]){
                case "peliculas":
                    require_once("controlador/añadir_pelicula_controlador.php");
                    break;
                case "cines":
                    require_once("controlador/añadir_cines_controlador.php");
                    break;
                case "horarios":
                    require_once("controlador/añadir_horarios_controlador.php");
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