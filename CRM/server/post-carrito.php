<?php
    session_start();
    error_reporting(0);

    if($_SESSION['productos'] == null){
        echo json_encode("nodata");
    }
    else{
        echo json_encode($_SESSION['productos']);
    }

?>