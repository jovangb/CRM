<?php
    //session_start();

    $clave = $_POST['clave'];

    include("conexion.php");

    $con = Conectar();
    mysqli_set_charset($con, "utf8");
	$SQL = "Select * from producto WHERE id_producto = '$clave';";
    $Query = EjecutarConsulta($con,$SQL);


    if(mysqli_num_rows($Query)>0){
        $fila = mysqli_fetch_row($Query);
        $_SESSION['producto'] = $fila;
        
        $datos = array("id_producto"=> $_SESSION['producto'][1], "mensaje" => "success");
        
        echo json_encode($datos);
        //echo json_encode($conejo);
    }else{
        echo json_encode('error');
    }

?>