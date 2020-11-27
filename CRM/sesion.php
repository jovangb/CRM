<?php
    session_start();
    error_reporting(0);
    $key = $_SESSION['usuario'];

    if($key == null || $key == ''){
        $_SESSION = array();
        session_destroy();
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
            echo json_encode('nosesion');
        }
    }else{
        echo json_encode('sesion');
    }
?>