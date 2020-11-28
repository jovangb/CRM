<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <?php include "scripts/head.php"?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
<?php include "elements/navbar.php" ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 <?php include "elements/aside.php"?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Contactos</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Contactos</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<!-- Main content -->
<section class="content">
      <div class="container-fluid">
      <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Expandable Table</h3>
              </div>
              <!-- ./card-header -->
              <div class="card-body">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Tipo</th>
                      <th>Nombre</th>
                      <th>Celular</th>
                      <th>Correo</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr data-widget="expandable-table" aria-expanded="false">
                      <td>183</td>
                      <td>Cliente</td>
                      <td>Eduardo C.</td>
                      <td>4424580315</td>
                      <td>lalocortes@gmail.com</td>
                    </tr>
                    <tr class="expandable-body">
                      <td colspan="5">
                      <div class="card-body table-responsive p-0" style="height: 105px; ">
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                <th>Calle </th>
                                <th>Numero int.</th>
                                <th>Ciudad</th>
                                <th>Estado</th>
                                <th>CP</th>
                                <th>Telefono</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>Yaquis</td>
                                <td>#332</td>
                                <td>Querétaro</td>
                                <td>Querétaro</td>
                                <td>76116</td>
                                <td>2185278</td>
                                </tr>
                            </tbody>
                        </table>
                      </div>
                      </td>
                    </tr>
                    <tr data-widget="expandable-table" aria-expanded="false">
                      <td>183</td>
                      <td>Cliente</td>
                      <td>Eduardo C.</td>
                      <td>4424580315</td>
                      <td>lalocortes@gmail.com</td>
                    </tr>
                    <tr class="expandable-body">
                      <td colspan="5">
                      <div class="card-body table-responsive p-0" style="height: 105px; ">
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                <th>Calle </th>
                                <th>Numero int.</th>
                                <th>Ciudad</th>
                                <th>Estado</th>
                                <th>CP</th>
                                <th>Telefono</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>Yaquis</td>
                                <td>#332</td>
                                <td>Querétaro</td>
                                <td>Querétaro</td>
                                <td>76116</td>
                                <td>2185278</td>
                                </tr>
                            </tbody>
                        </table>
                      </div>
                      </td>
                    </tr>
                    <tr data-widget="expandable-table" aria-expanded="false">
                      <td>183</td>
                      <td>Cliente</td>
                      <td>Eduardo C.</td>
                      <td>4424580315</td>
                      <td>lalocortes@gmail.com</td>
                    </tr>
                    <tr class="expandable-body">
                      <td colspan="5">
                      <div class="card-body table-responsive p-0" style="height: 105px; ">
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                <th>Calle </th>
                                <th>Numero int.</th>
                                <th>Ciudad</th>
                                <th>Estado</th>
                                <th>CP</th>
                                <th>Telefono</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>Yaquis</td>
                                <td>#332</td>
                                <td>Querétaro</td>
                                <td>Querétaro</td>
                                <td>76116</td>
                                <td>2185278</td>
                                </tr>
                            </tbody>
                        </table>
                      </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
<?php include "elements/footer.php" ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<?php include "scripts/js-req.php"?>
</body>
</html>
