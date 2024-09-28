<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pengaturan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Pengaturan</a></li>
              <li class="breadcrumb-item active">Ubah Password</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Ubah Password</h4>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url(); ?>index.php/pengaturan/updatepasswordsuplier" method="post">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Password Baru</label>
                                <input type="hidden" name="username" value="<?php echo $username; ?>">
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Konfirmasi Password Baru</label>
                                <input type="password" name="konfirmasi_password" class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" class="btn btn-success"><span class="fas fa-save"></span> Update</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
