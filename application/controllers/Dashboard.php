<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller { 
    public function index() {
        $data['jmlobat'] = $this->Obat_m->jml_obat();
        $data['jmlobatmasuk']   = $this->Obat_m->jmlobatmasuk();
        $data['jmlobatkeluar']  = $this->Obat_m->jmlobatkeluar();
        $data['monitorobat']    = $this->Obat_m->monitorobat();
        $data['username']       = $_SESSION['username'];
        $data['level']          = $_SESSION['level'];
        $this->load->view('template/head');
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('template/footer');
        $this->load->view('template/foot');
    }
}