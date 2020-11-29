<?php
    session_start();
    $usuario = $_SESSION['usuario'];
    $longitud = count($_SESSION['productos']);
    $contador_detalle = 0;
    include("conexion.php");

    $con = Conectar();
	$SQL = "INSERT INTO factura (fecha, id_cliente) VALUES (CURDATE(), '$usuario');";
    $Query = EjecutarConsulta($con,$SQL);
    $idfactura =  mysqli_insert_id($con);

    if($Query == true){
        for ($i=0; $i < $longitud ; $i++) { 
            $contador_detalle++;
            $id_factura = $idfactura;
            $id_producto = intval($_SESSION['productos'][$i][0]);
            $cantidad = 1;
            $precio = intval($_SESSION['productos'][$i][2]);

            $SQL = "INSERT INTO detalle (num_detalle, id_factura, id_producto, cantidad, precio) VALUES ('$contador_detalle', '$id_factura',
             '$id_producto','$cantidad','$precio');";
            $Query = EjecutarConsulta($con,$SQL);
        }
        echo json_encode('success');
    }

?>