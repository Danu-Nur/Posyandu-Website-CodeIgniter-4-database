  <!-- Sidebar -->
  <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=base_url()?>/template/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
            <i class="fa fa-database" aria-hidden="true"></i>
              <p>
                Data Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('vitamin')?>" class="nav-link active">
                <i class="fa fa-medkit" aria-hidden="true"></i>
                  <p>Data Vitamin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('imunisasi')?>" class="nav-link active">
                <i class="fa fa-medkit" aria-hidden="true"></i>
                  <p>Data Imunisasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('data_pemeriksaan')?>" class="nav-link  active">
                <i class="fa fa-stethoscope" aria-hidden="true"></i>
                  <p>Data Pemeriksaan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('waktu')?>" class="nav-link  active">
                <i class="fa fa-list-alt" aria-hidden="true"></i>
                  <p>Data Jadwal</p>
                </a>
              </li>
            </ul>
          </li>
          <ul class="nav nav-pills nav-sidebar flex-column mt-1" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
            <a href="<?=base_url('kader')?>" class="nav-link active">
            <i class="fa fa-user-md" aria-hidden="true"></i>
              <p>
                Data Kader
              </p>
            </a>

</ul>
<ul class="nav nav-pills nav-sidebar flex-column mt-2" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
            <a href="<?=base_url('userr')?>" class="nav-link active">
            <i class="fa fa-users" aria-hidden="true"></i>
              <p>
                Data User
              </p>
            </a>

</ul>

<ul class="nav nav-pills nav-sidebar flex-column mt-2" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
            <a href="<?=base_url('artikel')?>" class="nav-link active">
            <i class="fa fa-newspaper" aria-hidden="true"></i>
              <p>
                 Artikel
              </p>
            </a>

</ul>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?= $title;?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
           
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">

