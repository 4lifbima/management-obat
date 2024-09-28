<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Data</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>index.php/laporan/obatkeluar">Data Obat Keluar</a></li>
              <li class="breadcrumb-item active">Laporan Obat Keluar</li>
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
                <button type="button" class="btn btn-primary btn-sm btn-flat" onclick="printDiv('printMe')"><span class="fas fa-print"></span> Print</button>
            </div>
            <div class="card-body" id="printMe">
                <h4 class="text-center">LAPORAN OBAT KELUAR</h4>
                <h5 class="text-center">APOTEK AMALIAH FARMA TOTTONG</h5>
                <hr style="border: 2px solid;">
                <b class="text-center">Tanggal : <?php echo $dari; ?> - <?php echo $sampai; ?>  </b>
                <br/><br/>
                <table class="table table-bordered">
                    <thead>
                        <th width="50">No</th>
                        <th width="150">Tanggal</th>
                        <th>Nama Obat</th>
                        <th width="200">Jumlah Obat Keluar</th>
                        <th width="100">Satuan</th>
                        <th>Harga Satuan</th>
                        <th>Total Harga</th>
                    </thead>
                    <tbody>
                        <?php 
                            $no = 1;
                            foreach($laporanobatkeluar as $data) { 
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data['tanggal']; ?></td>
                            <td><?php echo $data['nm_obat']; ?></td>
                            <td><?php echo $data['jml_obat_keluar']; ?></td>
                            <td><?php echo $data['satuan']; ?></td>
                            <td>Rp<?php echo number_format($data['harga'],0,',','.'); ?></td>
                            <td>Rp<?php echo number_format($data['ttl_harga'],0,',','.'); ?></td>
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
  <script>
		function printDiv(divName){
			var printContents = document.getElementById(divName).innerHTML;
			var originalContents = document.body.innerHTML;

			document.body.innerHTML = printContents;

			window.print();

			document.body.innerHTML = originalContents;

		}
</script>
