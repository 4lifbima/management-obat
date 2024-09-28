<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suplier extends CI_Controller { 
    public function dashboard() {
        $data['jmlobat'] = $this->Obat_m->jml_obat();
        $data['jmlobatmasuk']   = $this->Obat_m->jmlobatmasuk();
        $data['jmlobatkeluar']  = $this->Obat_m->jmlobatkeluar();
        $data['monitorobat']    = $this->Obat_m->monitorobat();
        $data['username']       = $_SESSION['username'];
        $data['level']          = $_SESSION['level'];
        $this->load->view('template/head');
        $this->load->view('template/navbar', $data);
        $this->load->view('suplier/sidebar', $data);
        $this->load->view('suplier/index', $data);
        $this->load->view('template/footer');
        $this->load->view('template/foot');
    }
    public function data() { 
        $data['datasuplier'] = $this->Suplier_m->datasuplier();
        $data['username']       = $_SESSION['username'];
        $data['level']          = $_SESSION['level'];
        $this->load->view('template/head');
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('suplier/data', $data);
        $this->load->view('template/footer');
        $this->load->view('template/foot');
    } 
    public function tambah() { 
        $data['username']       = $_SESSION['username'];
        $data['level']          = $_SESSION['level'];
        $this->load->view('template/head');
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('suplier/tambah');
        $this->load->view('template/footer');
        $this->load->view('template/foot');
    } 
    public function edit($id_suplier) { 
        $data['datasuplier'] = $this->Suplier_m->datasuplier_speci($id_suplier);
        $data['username']       = $_SESSION['username'];
        $data['level']          = $_SESSION['level'];
        $this->load->view('template/head');
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('suplier/edit', $data);
        $this->load->view('template/footer');
        $this->load->view('template/foot');
    }
    public function simpansuplier() {
        $data = array(
            'id_suplier'        => $this->input->post('id_suplier'),
            'nm_suplier'        => $this->input->post('nm_suplier'),
            'alamat_suplier'    => $this->input->post('alamat_suplier'),
            'username'          => $this->input->post('username'),
            'password'          => md5($this->input->post('password')),

        );
        $simpan = $this->Suplier_m->simpansuplier($data);
        if($simpan = true) {
			echo "
				<script>
					alert('Data Suplier Berhasil Ditambahkan');
					window.location.href = '".base_url('index.php/suplier/data')."';
				</script>
			";
		}
		else {
			echo "
				<script>
					alert('Tidak Dapat Menambahkan Data');
					window.location.href = '".base_url('index.php/suplier/tambah/')."';
			";
		}
    }
    public function updatesuplier() {
        $data = array(
            'id_suplier'        => $this->input->post('id_suplier'),
            'nm_suplier'        => $this->input->post('nm_suplier'),
            'alamat_suplier'    => $this->input->post('alamat_suplier'),
            'username'          => $this->input->post('username'),
        );
        $simpan = $this->Suplier_m->updatesuplier($data);
        if($simpan = true) {
			echo "
				<script>
					alert('Data Suplier Berhasil Diperbarui');
					window.location.href = '".base_url('index.php/suplier/data')."';
				</script>
			";
		}
		else {
			echo "
				<script>
					alert('Tidak Dapat Memperbarui Data');
					window.location.href = '".base_url('index.php/suplier/edit/').$data['id_suplier']."';
			";
		}
    }
    public function hapus($id_suplier) {
        $hapus = $this->Suplier_m->hapussuplier($id_suplier);
        if($hapus = true) {
			echo "
				<script>
					alert('Data Suplier Berhasil Dihapus');
					window.location.href = '".base_url('index.php/suplier/data')."';
				</script>
			";
		}
		else {
			echo "
				<script>
					alert('Tidak Dapat Menghapus Data');
					window.location.href = '".base_url('index.php/suplier/data/')."';
			";
		}

    }
    public function resetpassword($id_suplier) {
        $password = md5('123456');
        $reset = $this->Suplier_m->resetpassword($id_suplier, $password);
        if($reset = true) {
			echo "
				<script>
					alert('Password Berhasil di Reset');
					window.location.href = '".base_url('index.php/suplier/data')."';
				</script>
			";
		}
		else {
			echo "
				<script>
					alert('Tidak Dapat Mereset Password');
					window.location.href = '".base_url('index.php/suplier/data/')."';
			";
		}
    }
}