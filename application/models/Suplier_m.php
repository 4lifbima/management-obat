<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suplier_m extends CI_Model { 
    public function datasuplier() {
        $query = $this->db->get('tb_suplier');
        return $query->result_array();
    }
    public function datasuplier_speci($id_suplier) {
        $this->db->where('id_suplier', $id_suplier);
        $query = $this->db->get('tb_suplier');
        return $query->result_array();
    }
    public function dataprofile($username) {
        $this->db->where('username', $username);
        $query = $this->db->get('tb_suplier');
        return $query->result_array();
    }
    public function simpansuplier($data) {
        $simpan = array(
            'id_suplier'        => $data['id_suplier'],
            'nm_suplier'        => $data['nm_suplier'],
            'alamat_suplier'    => $data['alamat_suplier'],
            'username'          => $data['username'],
            'password'          => $data['password'],
        );
        $this->db->insert('tb_suplier', $simpan);

    }
    public function updatesuplier($data) {
        $simpan = array(
            'id_suplier'        => $data['id_suplier'],
            'nm_suplier'        => $data['nm_suplier'],
            'alamat_suplier'    => $data['alamat_suplier'],
            'username'          => $data['username'],
        );
        $this->db->where('id_suplier', $simpan['id_suplier']);
        $this->db->update('tb_suplier', $simpan);
    }
    public function hapussuplier($id_suplier) {
        $this->db->where('id_suplier', $id_suplier);
        $this->db->delete('tb_suplier');
    }
    public function resetpassword($id_suplier, $password) {
        $data = array(
            'password' => $password,
        );
        $this->db->where('id_suplier', $id_suplier);
        $this->db->update('tb_suplier', $data);

    }
}