<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {  
    public function obatmasuk() {
        $data['username']       = $_SESSION['username'];
        $data['level']          = $_SESSION['level'];
        $this->load->view('template/head');
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('laporan/obatmasuk/filter');
        $this->load->view('template/footer');
        $this->load->view('template/foot');
    }
    public function obatkeluar() {
        $data['username']       = $_SESSION['username'];
        $data['level']          = $_SESSION['level'];
        $this->load->view('template/head');
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('laporan/obatkeluar/filter');
        $this->load->view('template/footer');
        $this->load->view('template/foot');
    }
    public function laporanobatmasuk() {
        $dari = $this->input->get('dari');
        $sampai = $this->input->get('sampai');
        $data['dari'] = $dari;
        $data['sampai'] = $sampai;
        $data['laporanobatmasuk'] = $this->Laporan_m->laporanobatmasuk($dari, $sampai);
        $data['username']       = $_SESSION['username'];
        $data['level']          = $_SESSION['level'];
        $this->load->view('template/head');
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('laporan/laporanobatmasuk', $data);
        $this->load->view('template/footer');
        $this->load->view('template/foot');
    }
    
    public function laporanobatkeluar() {
        $dari = $this->input->get('dari');
        $sampai = $this->input->get('sampai');
        $data['dari'] = $dari;
        $data['sampai'] = $sampai;
        $data['laporanobatkeluar'] = $this->Laporan_m->laporanobatkeluar($dari, $sampai);
        $data['username']       = $_SESSION['username'];
        $data['level']          = $_SESSION['level'];
        $this->load->view('template/head');
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('laporan/laporanobatkeluar', $data);
        $this->load->view('template/footer');
        $this->load->view('template/foot');
    }
}