<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Suplier</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Data</a></li>
              <li class="breadcrumb-item active">Data Suplier</li>
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
                    <div class="row">
                        <div class="col-lg-6">
                            <h4 class="card-title">Data Suplier</h4>
                        </div>
                        <div class="col-lg-6 text-right">
                            <a href="<?php echo base_url(); ?>index.php/suplier/tambah"><button type="button" class="btn btn-primary btn-sm"><span class="fas fa-plus"></span> Tambah Suplier</button></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <th width="50">No</th>
                            <th width="150">ID Suplier</th>
                            <th width="250">Nama Suplier</th>
                            <th>Alamat Suplier</th>
                            <th width="250">Aksi</th>
                        </thead>
                        <tbody>
                          <?php 
                            $no = 1;
                            foreach($datasuplier as $data) {
                          ?>
                          <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data['id_suplier']; ?></td>
                            <td><?php echo $data['nm_suplier']; ?></td>
                            <td><?php echo $data['alamat_suplier']; ?></td>
                            <td>
                              <a href="<?php echo base_url(); ?>index.php/suplier/edit/<?php echo $data['id_suplier']; ?>" title="Edit Data"><button type="button" class="btn btn-warning btn-sm"><span class="fas fa-edit"></span></button></a>
                              <a href="<?php echo base_url(); ?>index.php/suplier/hapus/<?php echo $data['id_suplier']; ?>" title="Hapus Data" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini? ');"><button type="button" class="btn btn-danger btn-sm"><span class="fas fa-trash"></span></button></a>
                              <a href="<?php echo base_url(); ?>index.php/suplier/resetpassword/<?php echo $data['id_suplier']; ?>" title="Reset Password" onclick="return confirm('Anda Yakin Ingin Mereset Password Akun Ini? ');"><button type="button" class="btn btn-default btn-sm">Reset Password</button></a>
                            </td>
                          </tr>
                          <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
