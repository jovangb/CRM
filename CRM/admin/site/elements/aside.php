<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="admin.php" class="brand-link">
    <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">CRM Creativa</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Jorge Baidon</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item menu-closed">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Contactos
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="ingresar_contacto.php" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Ingresar contacto</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="mostrar_contactos.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ver contactos</p>
              </a>
            </li>
          </ul>
        </li>


        <li class="nav-item menu-closed">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Citas
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="calendario.php" class="nav-link active">
                <i class="nav-icon fas fa-th"></i>
                <p>Calendario</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="mostrar-citas.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ver citas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="ingresar_cita.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Agendar cita</p>
              </a>
            </li>
          </ul>
        </li>
          <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
