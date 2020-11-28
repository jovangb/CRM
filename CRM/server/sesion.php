<?php
    session_start();
    error_reporting(0);
    // TODO: Agregar variable id_usuario
    $key = $_SESSION['usuario'];

    if($key == null || $key == ''){
        echo json_encode('nosesion');
        exit;
    }else{
        $datos_sesion = array();
        if($_SESSION['contador'] != null){
            array_push($datos_sesion,strval($_SESSION['contador']),"sesion");
        }
        else{
            array_push($datos_sesion,"","sesion");
        }
        echo json_encode($datos_sesion);
        //echo json_encode("sesion");
    }
?>