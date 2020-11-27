<!DOCTYPE html>
<html lang="en">

<?php include "scripts/head.php" ?>

<body>

    <?php include "elements/header.php" ?>

    <section class="container-fluid min-vh-100">
        <section class="container h-100" id="main">

            <section class="row">
                <?php include "elements/searchbar.php" ?>
            </section>
            <section id="outer-items">
             <!-- La parte interior de la iteración de los items debe de estar hecha por etiquetas como las de abajo -->
                <section id="items" class="row mb-2">

                </section>
            </section>

        </section>

    </section>
    <!-- hay que reparar el footer que se ve del pito -->
    <?php include "elements/footer.php" ?>

    <!--  -->

</body>

<?php include "scripts/js-store.php" ?>

</html>