<?php
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $estado = $_POST['estado'];

    include("conexion.php");

    $con = Conectar();
	$SQL = "INSERT INTO contactos (tipo, nombre, calle_uno, calle_dos, ciudad, estado, CP, telefono, celular, correo) 
    VALUES (null, '$nombre', null, null, null, '$estado', null, null, '$telefono','$correo');";
    $Query = EjecutarConsulta($con,$SQL);


    if($Query == true){
        echo json_encode('success');
    }else{
        echo json_encode('error');
    }

?>