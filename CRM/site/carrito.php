<!DOCTYPE html>
<html lang="en">

<?php include "scripts/head.php" ?>
<!-- <style>
        .navbar {
            background-color: #3FB45F;
        }

        #main {
            margin-top: 90px;
            min-height: 70vh;
        }

        .card:hover {
            transform: scale(1.01);
            box-shadow: 0 0 11px rgba(33, 33, 33, .2);
        }

        .rowmain {
            min-height: 75vh;
        }
    </style> -->


<body>

    <?php include "elements/header.php" ?>

    <div class="container-fluid" id="main">
        <div class="row justify-content-around rowmain">
            <div class="col text-center py-3 px-5 mx-5">
                <p class="display-4">Tú carrito</p>
                <hr>
                <div class="row">
                    <div class="col">Clave producto</div>
                    <div class="col">Nombre</div>
                    <div class="col">Precio</div>
                </div>
                <hr>
                <div id="productos">
                    <div class="row">
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"></div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <p class="display-4" id="total">$999</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col"><button class="btn btn-success">Confirmar</button></div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="../app/app-carritos.js"></script>
</body>

</html>