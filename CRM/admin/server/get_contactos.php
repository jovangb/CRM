<?php

include("conexion.php");

$con = Conectar();
$SQL = "Select * from contacto";
$Query = EjecutarConsulta($con, $SQL);

if (mysqli_num_rows($Query) > 0) {
    $filas = mysqli_fetch_all($Query, MYSQLI_ASSOC);
    // echo json_encode($filas);  
    foreach ($filas as $key => $value) {
        $tipo = $value["tipo"];
        $nombre = $value["nombre"];
        $calle_uno = $value["calle_uno"];
        $calle_dos = $value["calle_dos"];
        $ciudad = $value["ciudad"];
        $estado = $value["estado"];
        $CP = $value["CP"];
        $telefono = $value["telefono"];
        $celular = $value["celular"];
        $correo = $value["correo"];
        include "../site/elements/filas_contactos.php";
    }
} else {
    echo json_encode('error');
}
//echo json_encode(array("success"=>true));
?>