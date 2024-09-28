<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan_m extends CI_Model { 
    public function dataprofile($username) {
        $this->db->where('username', $username);
        $query = $this->db->get('tb_user');
        return $query->result_array();
    }
    public function updateprofile($id_user, $nm_user, $alamat_user, $username) {
        $update = array(
            'nm_user'       => $nm_user,
            'alamat_user'   => $alamat_user,
            'username'      => $username,
        );
        $this->db->where('id_user', $id_user);
        $this->db->update('tb_user', $update);
    }
    public function updateprofilesuplier($id_suplier, $nm_suplier, $alamat_suplier, $username) {
        $update = array(
            'nm_suplier'       => $nm_suplier,
            'alamat_suplier'   => $alamat_suplier,
            'username'      => $username,
        );
        $this->db->where('id_suplier', $id_suplier);
        $this->db->update('tb_suplier', $update);
    }
    public function updatepassword($username, $password_hash) {
        $update = array(
            'password' => $password_hash,
        );
        $this->db->where('username', $username);
        $this->db->update('tb_user', $update);
    }
    public function updatepasswordsuplier($username, $password_hash) {
        $update = array(
            'password' => $password_hash,
        );
        $this->db->where('username', $username);
        $this->db->update('tb_suplier', $update);
    }
}