<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat_m extends CI_Model { 
    public function dataobat() {
        $query = $this->db->get('tb_obat');
        return $query->result_array();
    }
    public function dataobat_speci($kd_obat) {
        $this->db->where('kd_obat', $kd_obat);
        $query = $this->db->get('tb_obat');
        return $query->result_array();
    }
    public function jml_obat() {
        $query = $this->db->query("SELECT COUNT('kd_obat') as jml_obat FROM tb_obat");
        return $query->result_array();
    }
    public function jmlobatmasuk() {
        $query = $this->db->query("SELECT SUM(jml_obat_masuk) as jmlobatmasuk FROM tb_obat_masuk");
        return $query->result_array();
    }
    public function jmlobatkeluar() {
        $query = $this->db->query("SELECT SUM(jml_obat_keluar) as jmlobatkeluar FROM tb_obat_keluar");
        return $query->result_array();
    }
    public function monitorobat() {
        $query = $this->db->query("SELECT * from view_obat WHERE stok < 100 OR masa_kadaluarsa < 60");
        return $query->result_array();
    }
    public function simpanobat($data) {
        $simpan = array(
            'kd_obat'           =>  $data['kd_obat'],
            'nm_obat'           =>  $data['nm_obat'],
            'tgl_kadaluarsa'    =>  $data['tgl_kadaluarsa'],
            'stok'              =>  $data['stok'],
            'satuan'            =>  $data['satuan'],
            'harga'            =>  $data['harga'],
        );
        $this->db->insert('tb_obat', $simpan);
    }
    public function updateobat($data) {
        $simpan = array(
            'kd_obat'           =>  $data['kd_obat'],
            'nm_obat'           =>  $data['nm_obat'],
            'tgl_kadaluarsa'    =>  $data['tgl_kadaluarsa'],
            'stok'              =>  $data['stok'],
            'satuan'            =>  $data['satuan'],
            'harga'            =>  $data['harga'],
        );
        $this->db->where('kd_obat', $simpan['kd_obat']);
        $this->db->update('tb_obat', $simpan);
    }
    public function hapusobat($kd_obat) {
        $this->db->where('kd_obat', $kd_obat);
        $this->db->delete('tb_obat');
    }
}