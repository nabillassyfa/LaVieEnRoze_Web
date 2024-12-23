<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Login extends CI_Model {

	public function check_login($username, $password) {
        $this->db->where('username', $username);
        $this->db->where('pass', $password);
        $query = $this->db->get('t_daftar');
        
        if ($query->num_rows() == 1) {
            return true; // Username dan password benar
        } else {
            return false; // Username atau password salah
        }
    }

    public function get_nama($username) {
        
        $this->db->select('nama');
        $this->db->where('username', $username);
        $query = $this->db->get('t_daftar');
        
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->nama;
        } else {
            return false;
        }
    }
}