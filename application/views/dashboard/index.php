<!-- Content Wrapper. Contains page content -->
<?php 
  foreach($jmlobat as $data_obat) {}
  foreach($jmlobatmasuk as $datamasuk) {}
  foreach($jmlobatkeluar as $datakelaur) {}


 

  if(empty($datamasuk['jmlobatmasuk']))
  {
    $jml_obatmasuk = 0;
  }
  else {
    $jml_obatmasuk = $datamasuk['jmlobatmasuk'];
  }

  if(empty($datakeluar['jmlobatkeluar']))
  {
    $jml_obatkeluar = 0;
  }
  else {
    $jml_obatkeluar = $datakeluar['jmlobatkeluar'];
  }
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-box"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Jumlah Obat</span>
                <span class="info-box-number">
                  <?php echo $data_obat['jml_obat']; ?>
                  <small>Jenis</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div> 

          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-box-open"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Jumlah Obat Masuk</span>
                <span class="info-box-number">
                  <?php echo $jml_obatmasuk; ?>
                  <small>Pack</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div> 

          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-people-carry"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Jumlah Obat Keluar</span>
                <span class="info-box-number">
                <?php echo $jml_obatkeluar; ?>
                  <small>Pack</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div> 


        </div> 

        <div class="row">

          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Monitor Obat</h4>
              </div>
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <th width="50">No</th>
                    <th width="100">Kode Obat</th>
                    <th>Nama Obat</th>
                    <th width="180">Tanggal Kadaluarsa</th>
                    <th wdith="150">Stok</th>
                    <th>Keterangan</th>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;
                      foreach($monitorobat as $monitor) { 
                      if($monitor['stok'] <=100 AND $monitor['stok'] > 0  )
                      {
                        $keterangan_stok = 'Stok Obat Hampir Habis';
                        $warnaobat       = 'orange';
                      }
                      elseif($monitor['stok'] == 0)  {
                        $keterangan_stok = 'Stok Obat Habis';
                        $warnaobat       = 'red';
                      }
                      else {
                        $keterangan_stok = '';
                        $warnaobat       = '';
                      }

                      if($monitor['masa_kadaluarsa'] <= 60 AND $monitor['masa_kadaluarsa'] > 0) {
                        $keterangan_masa = 'Obat Hampir Kadaluarsa';
                        $warnamasa       = 'orange';
                      }
                      elseif($monitor['masa_kadaluarsa'] <= 0) {
                        $keterangan_masa = 'Obat Sudah Kadaluarsa';
                        $warnamasa       = 'red';
                      }
                      else {
                        $keterangan_masa = '';
                        $warnamasa       = '';
                      }
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $monitor['kd_obat']; ?></td>
                        <td><?php echo $monitor['nm_obat']; ?></td>
                        <td><?php echo $monitor['tgl_kadaluarsa']; ?></td>
                        <td><?php echo $monitor['stok']; ?></td>
                        <td>
                          <p style="background-color: <?php echo $warnaobat; ?>; padding: 5px; color: #fff;"> <?php echo $keterangan_stok; ?> </p>
                          <p style="background-color: <?php echo $warnamasa; ?>; padding: 5px; color: #fff;"> <?php echo $keterangan_masa; ?> </p>
                        </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
