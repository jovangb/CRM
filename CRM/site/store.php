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

    <!-- <?php include "elements/alert.php" ?> -->

</body>

<?php include "scripts/js-store.php" ?>

</html>