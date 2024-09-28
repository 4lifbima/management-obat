<!-- Content Wrapper. Contains page content -->
<?php foreach($dataprofile as $data) {} ?>
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
              <li class="breadcrumb-item active">Profile</li>
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
                    <h4 class="card-title">Perbarui Profile</h4>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url(); ?>index.php/pengaturan/updateprofile" method="post">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="hidden" name="id_user" class="form-control" value="<?php echo $data['id_user']; ?>">
                                <input type="text" name="nm_user" class="form-control" value="<?php echo $data['nm_user']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat_user" class="form-control" value="<?php echo $data['alamat_user']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="username" class="form-control" value="<?php echo $data['username']; ?>">
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
