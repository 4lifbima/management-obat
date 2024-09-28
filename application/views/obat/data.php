<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Obat</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Data</a></li>
              <li class="breadcrumb-item active">Data Obat</li>
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
                            <h4 class="card-title">Data Obat</h4>
                        </div>
                        <div class="col-lg-6 text-right">
                            <a href="<?php echo base_url(); ?>index.php/obat/tambah"><button type="button" class="btn btn-sm btn-primary"><span class="fas fa-plus"></span> Tambah Data</button></a>
                        </div>
                    </div>
                    
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <th width="50">No</th>
                            <th width="150">Kode Obat</th>
                            <th>Nama Obat</th>
                            <th width="180">Tanggal Kadaluarsa</th>
                            <th width="150">Stok Obat</th>
                            <th>Harga Satuan</th>
                            <th width="150">Aksi</th>
                        </thead>
                        <tbody>
                          <?php 
                            $no =1;
                            foreach($dataobat as $data) {
                          ?>
                          <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data['kd_obat']; ?></td>
                            <td><?php echo $data['nm_obat']; ?></td>
                            <td><?php echo $data['tgl_kadaluarsa']; ?></td>
                            <td><?php echo $data['stok']." ".$data['satuan']; ?></td>
                            <td>Rp<?php echo number_format($data['harga'],0,',','.'); ?></td>
                            <td>
                              <a href="<?php echo base_url(); ?>index.php/obat/edit/<?php echo $data['kd_obat']; ?>" title="Edit Data"><button type="button" class="btn btn-warning btn-sm"><span class="fas fa-edit"></span></button></a>
                              <a href="<?php echo base_url(); ?>index.php/obat/hapusobat/<?php echo $data['kd_obat']; ?>" onclick="return confirm('Anda Yakin Ingin Menghapus Data ini ?');" title="Hapus Data"><button type="button" class="btn btn-danger btn-sm"><span class="fas fa-trash"></span></button></a>
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
