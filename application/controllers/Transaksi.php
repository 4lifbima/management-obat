<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller { 
    public function obatmasuk() {
        $data['dataobat'] = $this->Obat_m->dataobat();
        $data['datasuplier'] = $this->Suplier_m->datasuplier();
        $data['username']       = $_SESSION['username'];
        $data['level']          = $_SESSION['level'];
        $this->load->view('template/head');
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('transaksi/obatmasuk', $data);
        $this->load->view('template/footer');
        $this->load->view('template/foot');
    }
    public function obatkeluar() {
        $data['dataobat'] = $this->Obat_m->dataobat();
        $data['username']       = $_SESSION['username'];
        $data['level']          = $_SESSION['level'];
        $this->load->view('template/head');
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('transaksi/obatkeluar', $data);
        $this->load->view('template/footer');
        $this->load->view('template/foot');
    }
    public function tambahobatmasuk() {
        $data = array(
            'id_suplier'        => $this->input->post('id_suplier'),
            'kd_obat'           => $this->input->post('kd_obat'),
            'tanggal'           => $this->input->post('tanggal'),
            'jml_obat_masuk'    => $this->input->post('jml_obat_masuk'),
            'satuan'            => $this->input->post('satuan'),
            'harga'            => $this->input->post('harga'),
        );
        $tambah = $this->Transaksi_m->tambahobatmasuk($data);
        if($tambah = true) {
			echo "
				<script>
					alert('Data Transaksi Obat Masuk Berhasil Ditambahkan');
					window.location.href = '".base_url('index.php/transaksi/obatmasuk')."';
				</script>
			";
		}
		else {
			echo "
				<script>
					alert('Tidak Dapat Menambahkan Data Transaksi Obat Masuk');
					window.location.href = '".base_url('index.php/transaksi/obatmasuk')."';
				</script>
			";
		}
    }
    public function tambahobatkeluar() {
        $data = array(
            'kd_obat'           => $this->input->post('kd_obat'),
            'tanggal'           => $this->input->post('tanggal'),
            'jml_obat_keluar'    => $this->input->post('jml_obat_keluar'),
            'satuan'            => $this->input->post('satuan'),
            'harga'            => $this->input->post('harga'),
        );
        $tambah = $this->Transaksi_m->tambahobatkeluar($data);
        if($tambah = true) {
			echo "
				<script>
					alert('Data Transaksi Obat Keluar Berhasil Ditambahkan');
					window.location.href = '".base_url('index.php/transaksi/obatkeluar')."';
				</script>
			";
		}
		else {
			echo "
				<script>
					alert('Tidak Dapat Menambahkan Data Transaksi Obat Keluar');
					window.location.href = '".base_url('index.php/transaksi/obatkeluar')."';
				</script>
			";
		}
    }
}