<?php foreach($datasuplier as $data) {} ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Suplier</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Data</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/suplier/data">Data Suplier</a></li>
              <li class="breadcrumb-item active">Edit Suplier</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <form action="<?php echo base_url(); ?>index.php/suplier/updatesuplier" method="post">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <h4 class="card-title">Edit Suplier</h4>
                        </div>
                        <div class="col-lg-6 text-right">
                            <button type="submit" class="btn btn-success btn-sm"><span class="fas fa-save"></span> Update</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>ID Suplier</label>
                                <input type="text" name="id_suplier" class="form-control" value="<?php echo $data['id_suplier']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Nama Suplier</label>
                                <input type="text" name="nm_suplier" class="form-control" value="<?php echo $data['nm_suplier']; ?>">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Alamat Suplier</label>
                                <input type="text" name="alamat_suplier" class="form-control" value="<?php echo $data['alamat_suplier']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" value="<?php echo $data['username']; ?>">
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
