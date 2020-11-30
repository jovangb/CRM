<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Contacto</h3>
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

      <div  class="row">
        <div class="col-sm">

          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" placeholder="Nombre">
          </div>

          <div class="form-group">
            <label for="correo">Correo electrónico</label>
            <input type="email" class="form-control" name="correo" placeholder="Enter email">
          </div>

          <div class="form-group">
            <label for="direccion">Dirección</label>
            <div class="form-group">
              <input type="text" class="form-control" name="calle_uno" placeholder="Calle 1">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="calle_dos" placeholder="Calle 2">
            </div>

          </div>

          

          <!-- end of column -->
        </div>

        <div class="col-sm">

        <div class="row">
            <div class="col-sm">
              <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="number" class="form-control" name="telefono" placeholder="Teléfono">
              </div>

              <div class="form-group">
                <label for="telefono">Tipo</label>
                <select name="tipo" id="tipo"  class="form-control">
                  <option selected disabled hidden>Tipo</option>
                  <option value="proveedor">Proveedor</option>
                  <option value="cliente">Cliente</option>
                </select>
              </div>
            

            </div>

            <div class="col-sm">

              <div class="form-group">
                <label for="celular">Celular</label>
                <input type="number" class="form-control" name="celular" placeholder="Celular">
              </div>
            </div>

          </div>

          <div class="row">
            <div class="col-sm">
              <div class="form-group">
                <label for="exampleInputPassword1">Estado</label>
                <select name="estado" id="estado" class="form-control">
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
                <label for="CP">Código postal</label>
                <input type="number" class="form-control" name="CP" placeholder="Código postal">
              </div>
            </div>

            <div class="col-sm">

              <div class="form-group">
                <label for="ciudad">Ciudad</label>
                <input type="text" class="form-control" name="ciudad" placeholder="Ciudad">
              </div>
            </div>

          </div>

        </div>
      </div>

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
    <button class="btn btn-success" type="submit">Enviar</button>
      
    </div>
  </form>
  
</div>

<?php include "elements/alerta_contactos.php" ?>