<?php
    session_start();
    error_reporting(0);
    $key = $_SESSION['usuario'];

    if($key == null || $key == ''){
        echo json_encode('nosesion');
        exit;
    }else{
        echo json_encode('sesion');
    }
?>