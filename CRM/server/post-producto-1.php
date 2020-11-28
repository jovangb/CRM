<?php
    session_start();
    error_reporting(0);

    $key = $_SESSION['contador'];
    $clave = $_POST['clave'];
    if($key == null){
        $_SESSION['contador'] = 0;
    }
    

    include("conexion.php");

    $con = Conectar();
    mysqli_set_charset($con, "utf8");
	$SQL = "Select * from producto WHERE id_producto = '$clave';";
    $Query = EjecutarConsulta($con,$SQL);


    if(mysqli_num_rows($Query)>0){
        $_SESSION['contador']++;
        $fila = mysqli_fetch_row($Query);
        if($_SESSION['productos'] == null){
            $_SESSION['productos'] = array();
        }
        array_push($_SESSION['productos'], $fila);
        $mensajes = array(strval($_SESSION['contador']),"success");
        //array_push($_SESSION['productos'],"success", strval($_SESSION['contador']));
        //$datos = array("id_producto"=> $_SESSION['producto'][1], "mensaje" => "success");
        
        echo json_encode($mensajes);

    }else{
        echo json_encode('error');
    }

?>