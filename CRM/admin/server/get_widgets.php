<?php

include("conexion.php");

$con = Conectar();
$SQL = "SELECT (SELECT COUNT(*) FROM factura) AS ordenes,
        (SELECT SUM(precio) FROM detalle) AS ventas,
        (SELECT COUNT(*) FROM usuariostienda) AS usuariostienda,
        (SELECT COUNT(*) FROM contacto) AS contacto;";

$Query = EjecutarConsulta($con, $SQL);

if (mysqli_num_rows($Query) > 0) {
    $filas = mysqli_fetch_all($Query, MYSQLI_ASSOC);
    // echo json_encode($filas);  
    foreach ($filas as $key => $value) {
        $ordenes = $value["ordenes"];
        $ventas = $value["ventas"];
        $usuariostienda = $value["usuariostienda"];
        $contacto = $value["contacto"];
        include "../site/elements/small_cards.php";
    }
} else {
    echo json_encode('error');
}
//echo json_encode(array("success"=>true));
?>