<nav class="navbar navbar-expand-md navbar-dark fixed-top" data-aos="fade-down" data-aos-duration="1000">
    <div class="container">
        <a href="store.php" class="navbar-brand">Creativa</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-md-flex flex-row-reverse" id="navbar">
            <div>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item text-center mx-lg-2">
                        <a href="carrito.php" class="nav-link active"><img src="../images/carrito.png" alt="carrito"><br><small id="carrito">Carrito</small></a>
                        <hr width="50%" class="d-lg-none d-sm-block">
                    </li>
                    <li class="nav-item text-center mx-lg-2">
                        <a href="contacto.php" class="nav-link active"><img src="../images/complain.png" alt="carrito"><br><small>Contacto</small></a>
                        <hr width="50%" class="d-lg-none d-sm-block">
                    </li>
                    <li class="nav-item text-center mx-lg-2">
                        <a href="#" class="nav-link active" id="cerrar_sesion"><img src="../images/user.png" alt="user"><br><small>Cerrar Sesión</small></a>
                        <hr width="50%" class="d-lg-none d-sm-block">
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- * Modal -->

<!-- <div class="modal fade" id="salir" tabindex="-1" role="dialog" aria-labelledby="jg-modal" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title border-0">Cerrar Sesión</h5>
                <button class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col text-center mt-3">
                            <p>¿Seguro que quieres salir?</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" id="aceptar">Aceptar</button>
            </div>
        </div>
    </div>
</div> -->

<?php include "elements/log_out_alert.php" ?>