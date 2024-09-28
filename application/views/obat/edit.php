<?php foreach($dataobat as $data) {} ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Data Obat</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Data</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/obat/data">Data Obat</a></li>
              <li class="breadcrumb-item active">Edit Obat</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <form action="<?php echo base_url(); ?>index.php/obat/updateobat" method="post">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="card-title">Edit Obat</h4>
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
                            <label>Kode Obat</label>
                            <input type="text" name="kd_obat" class="form-control" readonly value="<?php echo $data['kd_obat']; ?>"> 
                        </div>
                        <div class="form-group">
                            <label>Nama Obat</label>
                            <input type="text" name="nm_obat" class="form-control" value="<?php echo $data['nm_obat']; ?>"> 
                        </div>
                    </div>
                     <div class="col-lg-4">
                        <div class="form-group">
                            <label>Tanggal Kadaluarsa</label>
                            <input type="date" name="tgl_kadaluarsa" class="form-control" value="<?php echo $data['tgl_kadaluarsa']; ?>"> 
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Stok</label>
                                    <input type="number" name="stok" class="form-control" value="<?php echo $data['stok']; ?>"> 
                                </div>
                                
                            </div>
                            <div class="col-md-6">
                               
                                <div class="form-group">
                                    <label>Satuan</label>
                                    <input type="text" name="satuan" class="form-control" value="<?php echo $data['satuan']; ?>"> 
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>Harga Satuan</label>
                            <input type="text" name="harga" class="form-control" value="<?php echo $data['harga']; ?>"> 
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
