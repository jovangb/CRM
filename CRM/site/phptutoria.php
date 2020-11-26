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
        .navbar {
            background-color: #3FB45F;
        }

        .primarycolor {
            background-color: #3FB45F;
        }

        #main {
            margin-top: 90px;
        }

        .card:hover {
            transform: scale(1.01);
            box-shadow: 0 0 11px rgba(33, 33, 33, .2);
        }

        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 60px;
            line-height: 60px;
        }
    </style>
</head>

<body>

    <?php include "elements/header.php" ?>

    <section class="container-fluid min-vh-100">
        <section class="container h-100" id="main">

            <section class="row">
                <?php include "elements/searchbar.php" ?>
            </section>

            <section class="row mb-2">

                <?php include "elements/itemcard.php" ?>
                <?php include "elements/itemcard.php" ?>
                <?php include "elements/itemcard.php" ?>
                <?php include "elements/itemcard.php" ?>

            </section>

            <section class="row mb-2">

                <?php include "elements/itemcard.php" ?>
                <?php include "elements/itemcard.php" ?>
                <?php include "elements/itemcard.php" ?>
                <?php include "elements/itemcard.php" ?>

            </section>

        </section>

    </section>
    <!-- hay que reparar el footer que se ve del pito -->
    <?php include "elements/footer.php" ?>

</body>

</html>