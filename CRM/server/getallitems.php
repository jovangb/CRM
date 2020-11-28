<?php

include("conexion.php");

$con = Conectar();
$SQL = "Select * from producto;";
$Query = EjecutarConsulta($con, $SQL);

if (mysqli_num_rows($Query) > 0) {
    $filas = mysqli_fetch_all($Query, MYSQLI_ASSOC);
    // echo json_encode($filas);  
    foreach ($filas as $key => $value) {
        $nombre = $value["nombre"];
        $precio = $value["precio"];
        // ! hacer columna url imagen
        $img_url = "../images/planta-1.jpg";
        $alt_img = $value["nombre"];
        include "../site/elements/itemcard.php";
    }
} else {
    echo json_encode('error');
}
//echo json_encode(array("success"=>true));
?>