<?php
    $id_contacto = $_POST['contacto'];
    $type = $_POST['type'];
    $descripcion = $_POST['descripcion'];
    $quantyty = $_POST['quantyty'];
    $fecha_cita = $_POST['fecha_cita'];
  


    include("conexion.php");

    $con = Conectar();
	$SQL = "INSERT INTO cita (id_admin,id_contacto, type, descripcion, quantyty, status,fecha_cita) 
    VALUES (2,'$id_contacto','$type', '$descripcion', '$quantyty', '0', '$fecha_cita');";
    $Query = EjecutarConsulta($con,$SQL);

    if($Query == true){
        echo json_encode('success');
    }else{
        echo json_encode('error');
    }

?>