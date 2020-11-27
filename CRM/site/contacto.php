<!DOCTYPE html>
<html lang="en">


<?php include "scripts/head.php" ?>
<!-- <style>
        .navbar {
            background-color: #3FB45F;
        }

        #main {
            margin-top: 90px;
        }

        .card:hover {
            transform: scale(1.01);
            box-shadow: 0 0 11px rgba(33, 33, 33, .2);
        }

        .row {
            min-height: 75vh;
        }
    </style> -->


<body>

    <?php include "elements/header.php" ?>

    <div class="container-fluid" id="main">
        <div class="row d-flex align-items-center text-right">
            <?php include "elements/contact_form.php" ?>
        </div>
    </div>


    <?php include "scripts/js-store.php" ?>
    <script src="../app/app-contacto.js"></script>
</body>

</html>