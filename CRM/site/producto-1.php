<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Tajawal:300,400,700&display=swap" rel="stylesheet">
    <title>Creativa - Flores y Plantas</title>
    <style>
        .navbar{
        background-color: #3FB45F;
        }
        #main{
            margin-top: 90px;
        }
        .card{
            background-color: #f2f5f5;
        }
        footer{
            background-color: #E5E5E5;
            color: gray;
        }
    </style>
</head>
<body>
    <?php include "elements/header.php" ?>
    <div class="container mb-5" id="main">
        <div class="row">
            <div class="col-6">
                <img src="../images/planta-1-grande.jpg" alt="Orquidea" class="img-fluid">
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <p class="lead"><strong>Doble orquídea morada</strong></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <p class="lead">MX$<span class="display-4">589</span>.00 <br>
                                <span class="text-success text-center">
                                    & Envío Gratis
                                </span>
                                </p>
                            </div>
                            <div class="col-4 pt-4">
                               <h2>★★★★★</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-center font-weight-light"><img src="images/paloma.png" alt="envio"> Envío gratis &nbsp; <img src="images/van.png" alt="van"> En el día todos los días &nbsp; <img src="images/dolar.png" alt="dolar"> Pago seguro</p>
                    <button class="btn btn-success btn-lg mr-2">Comprar ahora</button>
                    <button class="btn btn-warning text-white btn-lg mx-2">Añadir al carrito</button>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>