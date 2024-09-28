<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Obat Masuk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Data</a></li>
              <li class="breadcrumb-item active">Obat Masuk</li>
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
                    <h4 class="card-title">Filter Tanggal</h4>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url(); ?>index.php/laporan/laporanobatmasuk" method="get">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Dari Tanggal</label>
                                <input type="date" name="dari" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Sampai Tanggal</label>
                                <input type="date" name="sampai" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Proses</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
