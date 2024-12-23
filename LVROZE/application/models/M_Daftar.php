<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Daftar extends CI_Model {

     public function getAll()
	{
		$query = $this -> db -> query ("select * from t_daftar");
        return $query -> result();
	}
    
	public function insertDaftar($data)
	{
		$this->db->insert('t_daftar',$data);
	}

	public function getemail($email) {
        $this->db->where('email', $email);
        $query = $this->db->get('t_daftar');
        
        if ($query->num_rows() == 1) {
            return true; // email dan password benar
        } else {
            return false; // email atau password salah
        }
    }

	public function get_id($id_user) {
        $this->db->where('id_user', $id_user);
        $query = $this->db->get('t_daftar');
        
        if ($query->num_rows() == 1) {
            return true; // email dan password benar
        } else {
            return false; // email atau password salah
        }
    }

	public function edit($id, $data)
	{
		$this->db->where('id_user',$id);
		$this->db->update('t_daftar',$data);
	}

    public function setResetToken($id_user, $token) {
        $data = array(
            'reset_token' => $token,
            'reset_token_expiration' => date('Y-m-d H:i:s', strtotime('+1 hour'))
        );

        $this->db->where('id_user', $id_user);
        $this->db->update('t_daftar', $data);
    }

    public function get_idd($email) {
        $query = $this->db->query("SELECT id_user FROM t_daftar WHERE email = '$email'");
        if ($query->num_rows() > 0) {
            $result = $query->row();
            $dt = $result->id_user; // Set the $nama property to the value of id_user
            return $dt;
        } else {
            return false;
        }
    }
    

    public function getid($nama) {
        $query = $this->db->query("SELECT id_user FROM t_daftar WHERE nama = '$nama'");
        if ($query->num_rows() > 0) {
            $result = $query->row();
            return $result; // Return the entire row
        } else {
            return false;
        }
    }    

    public function getnama($nama) {
        
        //$this->db->select('id_user');
        $this->db->where('nama', $nama);
        $query = $this->db->get('t_daftar');
        
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->nama;
        } else {
            return false;
        }
    }

    // public function getemail($email) {

    //     $this->db->where('email', $email);
    //     $query = $this->db->get('t_daftar');

    //     if ($query->num_rows() > 0) {
    //         return $query->row_array();
    //     } else {
    //         return null;
    //     }
    // }

}
