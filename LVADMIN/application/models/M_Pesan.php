<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Pesan extends CI_Model {

	public function getAll()
	{
		$query = $this -> db -> query ("select * from t_contact_us");
        return $query -> result();
	}

	public function getpesan($id)
	{
		$this->db->where('id_customer',$id);
		$query = $this->db->get('t_contact_us');
		return $query->row();
	}

	// public function deleteMitra($id)
	// {
	// 	$this->db->where('id_mitra',$id);
	// 	$this->db->delete('t_mitra');
	// }

	// public function insertMitra($data)
	// {
	// 	$this->db->insert('t_mitra',$data);
	// }

	// public function editMitra($data, $id)
	// {
	// 	$this->db->where('id_mitra',$id);
	// 	$this->db->update('t_mitra',$data);
	// }

	// public function getMitra($id)
	// {
	// 	$this->db->where('id_mitra',$id);
	// 	$query = $this->db->get('t_mitra');
	// 	return $query->row();
	// }
}