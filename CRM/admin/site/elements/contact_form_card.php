<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Contacto</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form>
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
            <label for="exampleInputPassword1">Nombre</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nombre">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Correo electrónico</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Dirección</label>
            <div class="form-group">
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Calle 1">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Calle 2">
            </div>

          </div>

          

          <!-- end of column -->
        </div>

        <div class="col-sm">

        <div class="row">
            <div class="col-sm">
              <div class="form-group">
                <label for="exampleInputEmail1">Teléfono</label>
                <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Teléfono">
              </div>


              <div class="form-group">
                <label for="exampleInputPassword1">Tipo</label>
                <select class="form-control">
                  <option selected disabled hidden>Tipo</option>
                  <option value="Proveedor">Proveedor</option>
                  <option value="Ciente">Ciente</option>
                </select>
              </div>
            </div>

            <div class="col-sm">

              <div class="form-group">
                <label for="exampleInputPassword1">Celular</label>
                <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Celular">
              </div>
            </div>

          </div>

          <div class="row">
            <div class="col-sm">
              <div class="form-group">
                <label for="exampleInputPassword1">Estado</label>
                <select class="form-control">
                  <option selected disabled hidden>Estado</option>
                  <option value="Aguascalientes">Aguascalientes</option>
                  <option value="Baja California">Baja California</option>
                  <option value="Baja California Sur">Baja California Sur</option>
                  <option value="Campeche">Campeche</option>
                  <option value="Chiapas">Chiapas</option>
                  <option value="Chihuahua">Chihuahua</option>
                  <option value="Coahuila">Coahuila</option>
                  <option value="Colima">Colima</option>
                  <option value="Distrito Federal">Distrito Federal</option>
                  <option value="Durango">Durango</option>
                  <option value="Estado de Mexico">Estado de México</option>
                  <option value="Guanajuato">Guanajuato</option>
                  <option value="Guerrero">Guerrero</option>
                  <option value="Hidalgo">Hidalgo</option>
                  <option value="Jalisco">Jalisco</option>
                  <option value="Michoacán">Michoacán</option>
                  <option value="Morelos">Morelos</option>
                  <option value="Nayarit">Nayarit</option>
                  <option value="Nuevo León">Nuevo León</option>
                  <option value="Oaxaca">Oaxaca</option>
                  <option value="Puebla">Puebla</option>
                  <option value="Querétaro">Querétaro</option>
                  <option value="Quintana Roo">Quintana Roo</option>
                  <option value="San Luis Potosí">San Luis Potosí</option>
                  <option value="Sinaloa">Sinaloa</option>
                  <option value="Sonora">Sonora</option>
                  <option value="Tabasco">Tabasco</option>
                  <option value="Tamaulipas">Tamaulipas</option>
                  <option value="Tlaxcala">Tlaxcala</option>
                  <option value="Veracruz">Veracruz</option>
                  <option value="Yucatán">Yucatán</option>
                  <option value="Zacatecas">Zacatecas</option>
                </select>
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Código postal</label>
                <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Código postal">
              </div>
            </div>

            <div class="col-sm">

              <div class="form-group">
                <label for="exampleInputPassword1">Ciudad</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ciudad">
              </div>
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