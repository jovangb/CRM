<?php

include("conexion.php");

$con = Conectar();
$SQL = "Select * from contacto";
$Query = EjecutarConsulta($con, $SQL);

if (mysqli_num_rows($Query) > 0) {
    $filas = mysqli_fetch_all($Query, MYSQLI_ASSOC);
    // echo json_encode($filas);  
    foreach ($filas as $key => $value) {
        $id_contacto = $value["id_contacto"];
        $nombre = $value["nombre"];
        include "../site/elements/obtener_contactos.php";
    }
} else {
    echo json_encode('error');
}
//echo json_encode(array("success"=>true));
?>