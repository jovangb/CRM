<?php
    
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $calle_uno = $_POST['calle_uno'];
    $calle_dos = $_POST['calle_dos'];
    $telefono = $_POST['telefono'];
    $tipo = $_POST['tipo'];
    $celular = $_POST['celular'];
    $estado = $_POST['estado'];
    $CP = $_POST['CP'];
    $ciudad = $_POST['ciudad'];


    include("conexion.php");

    $con = Conectar();
	$SQL = "INSERT INTO contacto (tipo, nombre, calle_uno, calle_dos, ciudad, estado, CP, telefono, celular, correo) 
    VALUES ('$tipo', '$nombre', '$calle_uno', '$calle_dos', '$ciudad', '$estado', '$CP', '$telefono', '$celular','$correo');";
    $Query = EjecutarConsulta($con,$SQL);


    if($Query == true){
        echo json_encode('success');
    }else{
        echo json_encode('error');
    }

?>