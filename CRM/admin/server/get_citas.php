<?php

// * Make DB conection
include("conexion.php");


$con = Conectar();
$SQL = "SELECT admin.nombre AS admin, contacto.nombre AS contacto, fecha_cita, quantyty, type, descripcion, status 
        FROM cita 
        INNER JOIN admin ON cita.id_admin = admin.id_admin
        INNER JOIN contacto ON cita.id_contacto= contacto.id_contacto
        ORDER BY DATE(fecha_cita) ASC;";
// * Return of the Query
$Query = EjecutarConsulta($con, $SQL);


if (mysqli_num_rows($Query) > 0) {

    //* Make a directory with the Query using associative keys
    $filas = mysqli_fetch_all($Query, MYSQLI_ASSOC);
    //* Return a json object as response
    //echo json_encode($filas);  
    // * Inyecting values to php template
    foreach ($filas as $key => $value) {
        $admin = $value["admin"];
        $contacto = $value["contacto"];
        $fecha = $value["fecha_cita"];
        $quantyty = $value["quantyty"];
        $type = $value["type"];
        $descripcion = $value["descripcion"];
        $status = $value["status"];


        // * Target php template to inyect
        include "../site/elements/date_row.php";
    }
} else {
    echo json_encode('error');
}
//echo json_encode(array("success"=>true));
