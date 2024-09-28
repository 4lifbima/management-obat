<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_m extends CI_Model { 
    public function tambahobatmasuk($data) {
        $tambah = array(
            'id_suplier'        => $data['id_suplier'],
            'kd_obat'           => $data['kd_obat'],
            'tanggal'           => $data['tanggal'],
            'jml_obat_masuk'    => $data['jml_obat_masuk'],
            'satuan'            => $data['satuan'],
            'harga'             => $data['harga'],
        );
        $kd_obat = $data['kd_obat'];
        $jml_obat_masuk = $data['jml_obat_masuk'];
        $this->db->insert('tb_obat_masuk', $tambah);

        $tambah = $this->db->query("UPDATE tb_obat SET stok=stok + $jml_obat_masuk WHERE kd_obat='$kd_obat'");
        return $tambah;
    }
    public function tambahobatkeluar($data) {
        $tambah = array(
            'kd_obat'           => $data['kd_obat'],
            'tanggal'           => $data['tanggal'],
            'jml_obat_keluar'    => $data['jml_obat_keluar'],
            'satuan'            => $data['satuan'],
            'harga'            => $data['harga'],
        );
        $kd_obat = $data['kd_obat'];
        $jml_obat_keluar = $data['jml_obat_keluar'];
        $this->db->insert('tb_obat_keluar', $tambah);

        $tambah = $this->db->query("UPDATE tb_obat SET stok=stok - $jml_obat_keluar WHERE kd_obat='$kd_obat'");
        return $tambah;
    }
}