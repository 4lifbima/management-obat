<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url(); ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Pengelohan Obat</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $username; ?></a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>index.php/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
          </li>    
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <?php if($level == 'admin') { ?>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>index.php/obat/data" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Obat</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>index.php/suplier/data" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Suplier</p>
                </a>
              </li>
              <?php } ?>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>index.php/laporan/obatmasuk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Obat Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>index.php/laporan/obatkeluar" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Obat Keluar</p>
                </a>
              </li>
            </ul>
          </li>
          <?php if($level == 'admin') { ?>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Transaksi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>index.php/transaksi/obatmasuk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Obat Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>index.php/transaksi/obatkeluar" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Obat Keluar</p>
                </a>
              </li>
            </ul>
          </li>
          <?php } ?>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Pengaturan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>index.php/pengaturan/profile" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>index.php/pengaturan/ubahpassword" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ubah Password</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>index.php/auth/logout" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
                
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>