<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller { 
    public function profile() {
        $data['username']       = $_SESSION['username'];
        $data['level']          = $_SESSION['level'];
        $username = $_SESSION['username'];
        $data['dataprofile']    = $this->Pengaturan_m->dataprofile($username);
        $this->load->view('template/head');
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('pengaturan/profile', $data);
        $this->load->view('template/footer');
        $this->load->view('template/foot');
    }
    public function profilesuplier() {
        $data['username']       = $_SESSION['username'];
        $data['level']          = $_SESSION['level'];
        $username = $_SESSION['username'];
        $data['dataprofile']    = $this->Suplier_m->dataprofile($username);
        $this->load->view('template/head');
        $this->load->view('template/navbar', $data);
        $this->load->view('suplier/sidebar', $data);
        $this->load->view('suplier/profile', $data);
        $this->load->view('template/footer');
        $this->load->view('template/foot');
    }
    public function ubahpassword() {
        $data['username']       = $_SESSION['username'];
        $data['level']          = $_SESSION['level'];
        $this->load->view('template/head');
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('pengaturan/ubahpassword');
        $this->load->view('template/footer');
        $this->load->view('template/foot');
    }
    public function ubahpasswordsuplier() {
        $data['username']       = $_SESSION['username'];
        $data['level']          = $_SESSION['level'];
        $this->load->view('template/head');
        $this->load->view('template/navbar', $data);
        $this->load->view('suplier/sidebar', $data);
        $this->load->view('suplier/ubahpassword');
        $this->load->view('template/footer');
        $this->load->view('template/foot');
    }
    public function updateprofile() {
        $id_user     = $this->input->post('id_user');
        $nm_user     = $this->input->post('nm_user');
        $alamat_user = $this->input->post('alamat_user');
        $username    = $this->input->post('username');
        $simpan = $this->Pengaturan_m->updateprofile($id_user, $nm_user, $alamat_user, $username);
        if($simpan = true) {
			echo "
				<script>
					alert('Profile Berhasil Diperbarui, Silahkan Login Kembali');
					window.location.href = '".base_url('index.php/auth/logout/')."';
				</script>
			";
		}
		else {
			echo "
				<script>
					alert('Tidak Dapat Memperbarui Profile');
					window.location.href = '".base_url('index.php/pengaturan/profile/')."';
				</script>
			";
		}
    }
    public function updateprofilesuplier() {
        $id_suplier     = $this->input->post('id_suplier');
        $nm_suplier     = $this->input->post('nm_suplier');
        $alamat_suplier = $this->input->post('alamat_suplier');
        $username    = $this->input->post('username');
        $simpan = $this->Pengaturan_m->updateprofilesuplier($id_suplier, $nm_suplier, $alamat_suplier, $username);
        if($simpan = true) {
			echo "
				<script>
					alert('Profile Berhasil Diperbarui, Silahkan Login Kembali');
					window.location.href = '".base_url('index.php/auth/logout/')."';
				</script>
			";
		}
		else {
			echo "
				<script>
					alert('Tidak Dapat Memperbarui Profile');
					window.location.href = '".base_url('index.php/pengaturan/profilesuplier/')."';
				</script>
			";
		}
    }
    public function updatepassword() {
        $username    = $this->input->post('username');
        $password    = $this->input->post('password');
        $konfirmasi_password = $this->input->post('konfirmasi_password');
        $password_hash = md5($password);

        if($password == $konfirmasi_password) {
            $simpan = $this->Pengaturan_m->updatepassword($username, $password_hash);
            if($simpan = true) {
                echo "
                    <script>
                        alert('Profile Berhasil Diperbarui, Silahkan Login Kembali');
                        window.location.href = '".base_url('index.php/auth/logout/')."';
                    </script>
                ";
            }
            else {
                echo "
                    <script>
                        alert('Tidak Dapat Memperbarui Profile');
                        window.location.href = '".base_url('index.php/pengaturan/ubahpassword/')."';
                    </script>
                ";
            }
        }
        else {
            echo "
				<script>
					alert('Password dan Konfirmasi Password Tidak Sama');
					window.location.href = '".base_url('index.php/pengaturan/ubahpassword/')."';
				</script>
			";
        }
    }
    public function updatepasswordsuplier() {
        $username    = $this->input->post('username');
        $password    = $this->input->post('password');
        $konfirmasi_password = $this->input->post('konfirmasi_password');
        $password_hash = md5($password);

        if($password == $konfirmasi_password) {
            $simpan = $this->Pengaturan_m->updatepasswordsuplier($username, $password_hash);
            if($simpan = true) {
                echo "
                    <script>
                        alert('Profile Berhasil Diperbarui, Silahkan Login Kembali');
                        window.location.href = '".base_url('index.php/auth/logout/')."';
                    </script>
                ";
            }
            else {
                echo "
                    <script>
                        alert('Tidak Dapat Memperbarui Profile');
                        window.location.href = '".base_url('index.php/pengaturan/ubahpasswordsuplier/')."';
                    </script>
                ";
            }
        }
        else {
            echo "
				<script>
					alert('Password dan Konfirmasi Password Tidak Sama');
					window.location.href = '".base_url('index.php/pengaturan/ubahpasswordsuplier/')."';
				</script>
			";
        }
    }

}