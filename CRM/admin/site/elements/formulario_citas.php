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
            <label for="exampleInputPassword1">Contacto</label>
            <select class="form-control" id="contacto">
              <option selected disabled hidden>Contacto</option>
              <option value="Jovan García">Jorge Baidon</option>
              <option value="Jorge">Eduardo Cortés</option>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Descripcion</label>
            <div class="form-group">
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Descripcion">
            </div>

          </div>



          <!-- end of column -->
        </div>

        <div class="col-sm">

          <div class="row">
            <div class="col-sm">
              <div class="form-group">
                <label for="exampleInputPassword1">Tipo</label>
                <select class="form-control">
                  <option selected disabled hidden>Tipo</option>
                  <option value="Venta">Venta</option>
                  <option value="Proveedor">Proveedor</option>
                </select>
              </div>

              <div class="form-group">
                <label>Fecha</label>
                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                  <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" />
                  <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                  </div>
                </div>
              </div>

            </div>

            <div class="col-sm">

              <div class="form-group">
                <label for="exampleInputPassword1">Cantidad</label>
                <input type="text" class="form-control" id="cantidad" placeholder="Cantidad">
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
      </div>

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>