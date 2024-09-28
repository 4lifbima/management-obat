<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_m extends CI_Model { 
    public function laporanobatmasuk($dari, $sampai) {
        $query = $this->db->query("SELECT * FROM view_obat_masuk WHERE tanggal BETWEEN '$dari' AND '$sampai' ORDER BY tanggal DESC");
        return $query->result_array();
    }
    public function laporanobatkeluar($dari, $sampai) {
        $query = $this->db->query("SELECT * FROM view_obat_keluar WHERE tanggal BETWEEN '$dari' AND '$sampai' ORDER BY tanggal DESC");
        return $query->result_array();
    }

}