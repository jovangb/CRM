<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Citas</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form id="formulario">
    <div class="card-body">

      <!-- 
  tipo
  nombre
  calle_uno
  calle_dos
  ciudad
  estado
  CP
  Teléfono
  Celular
  correo
 -->

      <div class="row">
        <div class="col-sm">

          <div class="form-group">
          <label for="id_contacto">Contacto</label>
            <select class="form-control" id="contacto" name="contacto">
              
            </select>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Descripcion</label>
            <div class="form-group">
              <input type="text" class="form-control"name="descripcion" placeholder="Descripcion">
            </div>

          </div>



          <!-- end of column -->
        </div>

        <div class="col-sm">

          <div class="row">
            <div class="col-sm">
              <div class="form-group">
                <label for="exampleInputPassword1">Tipo</label>
                <select name="type" id="type" class="form-control">
                  <option selected disabled hidden>Tipo</option>
                  <option value="Venta">Venta</option>
                  <option value="Proveedor">Proveedor</option>
                </select>
              </div>

              <div class="form-group">
                <label>Fecha</label>
                <div class="form-group">
                <input type="text" class="form-control"name="fecha_cita" placeholder="Fecha">
            </div>
              </div>

            </div>

            <div class="col-sm">

              <div class="form-group">
                <label for="exampleInputPassword1">Cantidad</label>
                <input type="text" class="form-control" name="quantyty" placeholder="Cantidad">
              </div>

            </div>

          </div>

          <div class="row">
            <div class="col-sm">

              <div class="form-group">

              </div>
            </div>

            <div class="col-sm">
            </div>

          </div>

        </div>
        <script src="scripts/mostrar-contacto.js"></script>
      </div>

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button class="btn btn-success" type="submit">Enviar</button>
    </div>
    
  </form>
  
</div>
<?php include "elements/alerta_citas.php" ?>