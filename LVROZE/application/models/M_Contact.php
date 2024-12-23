<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Contact extends CI_Model {

     public function getAll()
	{
		$query = $this -> db -> query ("select * from t_contact_us");
        return $query -> result();
	}

    // public function getContact($id)
	// {
	// 	$this->db->where('id_customer',$id);
	// 	$query = $this->db->get('t_contact_us');
	// 	return $query->row();
	// }
    
	public function insertPesan($data)
	{
		$this->db->insert('t_contact_us',$data);
	}
}