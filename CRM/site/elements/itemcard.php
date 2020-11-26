<?php
// $product = "Doble Orquídea Morada";
$img_url = "../images/planta-1.jpg";
// $alt_img = "orquidea";
// $price = 589.00;

include("../../server/conexion.php");

$con = Conectar();
$SQL = "Select * from producto;";
$Query = EjecutarConsulta($con, $SQL);


if (mysqli_num_rows($Query) > 0) {
    $filas = mysqli_fetch_all($Query, MYSQLI_ASSOC);
    echo json_encode($filas);
    /* foreach ($filas as $key => $value) { ?>
        <article class="col">
            <div class="card mb-2">
                <img src="<?php echo $img_url ?>" alt="<?php echo $value["nombre"] ?>" class="img-fluid">
                <div class="card-body text-center">
                    <p>
                        <small class="text-success">Entrega sin costo, El mísmo día, Todos los días</small><br><br>
                        <?php echo $value["nombre"] ?>
                        <br>
                        <br>
                        <?php echo $value["precio"] ?>
                        <br>
                        <br>
                        ★★★★
                    </p>
                </div>
            </div>
        </article>
    <?php 
    }*/


} else {
    echo json_encode('error');
}
//echo json_encode(array("success"=>true));
?>
