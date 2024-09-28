<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function index() {
        $this->load->view('template/head');
        $this->load->view('login');
        $this->load->view('template/foot');
    }
    public function ceklogin() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $level = $this->input->post('level');
       
        if($level == "suplier") {
            $where          = array(
                'username'  => $username, 
                'password'  => md5($password),  
            );
            $cek            = $this->Auth_m->cek_login('tb_suplier', $where)->num_rows();
            if($cek > 0)    {
                $data_session = array(
                    'username'  => $username,
                    'level'     => $level,
                );
                $this->session->set_userdata($data_session);
                echo "
                    <script>
                        alert('Login Berhasil');
                        window.location.href = '".base_url('index.php/suplier/dashboard')."';
                    </script>
                ";
            }
            else {
                echo "
                    <script>
                        alert('Username atau Password salah');
                        window.location.href = '".base_url('index.php/auth')."';
                    </script>
                ";
            } 
        }
        else {
            $where          = array(
                'username'  => $username, 
                'password'  => md5($password),  
                'level'     => $level,
            );
            $cek            = $this->Auth_m->cek_login('tb_user', $where)->num_rows();
            if($cek > 0)    {
                $data_session = array(
                    'username'  => $username,
                    'level'     => $level,
                );
                $this->session->set_userdata($data_session);
                echo "
                    <script>
                        alert('Login Berhasil');
                        window.location.href = '".base_url('index.php/dashboard')."';
                    </script>
                ";
            }
            else {
                echo "
                    <script>
                        alert('Username atau Password salah');
                        window.location.href = '".base_url('index.php/auth')."';
                    </script>
                ";
            } 
        }
    }
    public function logout() {
		$this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
		redirect('auth/');
	}
}