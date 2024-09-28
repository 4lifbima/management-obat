<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Transaksi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Transaksi</a></li>
              <li class="breadcrumb-item active">Obat Masuk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="continer-fluid">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Transaksi Obat Masuk</h4>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url(); ?>index.php/transaksi/tambahobatmasuk" method="post">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Suplier</label>
                                <select class="form-control" name="id_suplier">
                                    <option selected disabled>--Pilih Suplier--</option>
                                    <?php foreach($datasuplier as $data_suplier) { ?> 
                                        <option value="<?php echo $data_suplier['id_suplier']; ?>"><?php echo $data_suplier['id_suplier']; ?> - <?php echo $data_suplier['nm_suplier']; ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Obat</label>
                                <select class="form-control" name="kd_obat">
                                    <option selected disabled>--Pilih Obat--</option>
                                    <?php foreach($dataobat as $data_obat) { ?>
                                        <option value="<?php echo $data_obat['kd_obat']; ?>"> <?php echo $data_obat['kd_obat']; ?> - <?php echo $data_obat['nm_obat']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date" name="tanggal" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Jumlah Obat Masuk</label>
                                        <input type="number" class="form-control" name="jml_obat_masuk">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Satuan</label>
                                        <input type="text" class="form-control" name="satuan" value="<?php echo $data_obat['satuan']; ?>" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Harga Satuan</label>
                                <input type="text" name="harga" class="form-control" value="<?php echo $data_obat['harga']; ?>"> 
                            </div>
                         </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success"><span class="fas fa-save"></span> Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
