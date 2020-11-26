<?php
$product = "Doble Orquídea Morada";
$img_url = "../images/planta-1.jpg";
$alt_img = "orquidea";
$price = 589.00;
?>


<article class="col">
    <div class="card mb-2">
        <img src="<?php echo $img_url ?>" alt="<?php echo $product ?>" class="img-fluid">
        <div class="card-body text-center">
            <p>
                <small class="text-success">Entrega sin costo, El mísmo día, Todos los días</small><br><br>
                <?php echo $product ?>
                <br>
                <br>
                <?php echo $price ?>
                <br>
                <br>
                ★★★★
            </p>
        </div>
    </div>
</article>