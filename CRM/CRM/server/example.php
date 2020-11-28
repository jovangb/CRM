<?php

// * Make DB conection
include("conexion.php");


$con = Conectar();
$SQL = "Select * from producto;";
// * Return of the Query
$Query = EjecutarConsulta($con, $SQL);


if (mysqli_num_rows($Query) > 0) {
    //* Make a directory with the Query using associative keys
    $filas = mysqli_fetch_all($Query, MYSQLI_ASSOC);
    //* Return a json object as response
    //echo json_encode($filas);  
    // * Inyecting values to php template
    foreach ($filas as $key => $value) {
        $nombre = $value["nombre"];
        $precio = $value["precio"];
        // ! hacer columna url imagen
        $img_url = "../images/planta-1.jpg";
        $alt_img = $value["nombre"];
        // * Target php template to inyect
        include "../site/elements/itemcard.php";
    }
} else {
    echo json_encode('error');
}
//echo json_encode(array("success"=>true));
?>