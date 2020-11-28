<div class="col-6">
    <p class="display-4">¿Necesitas un pedido especial?</p>
</div>
<div class="col-4 text-left">
    <form id="formulario">
        <p class="lead">Ingrega tus datos, te contactaremos en breve.</p>
        <input type="text" class="form-control mb-2" placeholder="Nombre" name="nombre" required>
        <input type="number" class="form-control mb-2" placeholder="Teléfono" name="telefono" required>
        <input type="email" class="form-control mb-2" placeholder="Correo Electrónico" name="correo" required>
        <?php include "elements/select_state.php" ?>
        <div class="text-center">
            <button class="btn btn-success" type="submit">Enviar</button>
        </div>
    </form>
</div>
</div>
</div>

<?php include "elements/contact_alert.php" ?>