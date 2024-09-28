<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller { 
    public function data() {
        $data['dataobat'] = $this->Obat_m->dataobat();
        $data['username']       = $_SESSION['username'];
        $data['level']          = $_SESSION['level'];
        $this->load->view('template/head');
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('obat/data', $data);
        $this->load->view('template/footer');
        $this->load->view('template/foot');
    }
    public function tambah() {
        $data['username']       = $_SESSION['username'];
        $data['level']          = $_SESSION['level'];
        $this->load->view('template/head');
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('obat/tambah');
        $this->load->view('template/footer');
        $this->load->view('template/foot');
    }
    public function edit($kd_obat) {
        $data['dataobat'] = $this->Obat_m->dataobat_speci($kd_obat);
        $data['username']       = $_SESSION['username'];
        $data['level']          = $_SESSION['level'];
        $this->load->view('template/head');
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('obat/edit', $data);
        $this->load->view('template/footer');
        $this->load->view('template/foot');
    }
    public function simpanobat() {
        $data = array (
            'kd_obat'           => $this->input->post('kd_obat'),
            'nm_obat'           => $this->input->post('nm_obat'),
            'tgl_kadaluarsa'    => $this->input->post('tgl_kadaluarsa'),
            'stok'              => $this->input->post('stok'),
            'satuan'            => $this->input->post('satuan'),
            'harga'            => $this->input->post('harga'),
        );
        $simpan = $this->Obat_m->simpanobat($data);
        if($simpan = true) {
			echo "
				<script>
					alert('Data Obat Berhasil Ditambahkan');
					window.location.href = '".base_url('index.php/obat/tambah/')."';
				</script>
			";
		}
		else {
			echo "
				<script>
					alert('Tidak Dapat Menambahkan Data');
					window.location.href = '".base_url('index.php/obat/tambah/')."';
				</script>
			";
		}
    }
    public function updateobat() {
        $data = array (
            'kd_obat'           => $this->input->post('kd_obat'),
            'nm_obat'           => $this->input->post('nm_obat'),
            'tgl_kadaluarsa'    => $this->input->post('tgl_kadaluarsa'),
            'stok'              => $this->input->post('stok'),
            'satuan'            => $this->input->post('satuan'),
            'harga'            => $this->input->post('harga'),
        );
        $simpan = $this->Obat_m->updateobat($data);
        if($simpan = true) {
			echo "
				<script>
					alert('Data Obat Berhasil Diperbarui');
					window.location.href = '".base_url('index.php/obat/data')."';
				</script>
			";
		}
		else {
			echo "
				<script>
					alert('Tidak Dapat Memperbarui Data');
					window.location.href = '".base_url('index.php/obat/edit/').$data['kd_obat']."';
				</script>
			";
		}
    }
    public function hapusobat($kd_obat) {
        $hapus = $this->Obat_m->hapusobat($kd_obat);
        if($hapus = true) {
			echo "
				<script>
					alert('Data Obat Berhasil Dihapus');
					window.location.href = '".base_url('index.php/obat/data/')."';
				</script>
			";
		}
		else {
			echo "
				<script>
					alert('Tidak Dapat Menghapus Data');
					window.location.href = '".base_url('index.php/obat/data/')."';
				</script>
			";
		}
    }
}