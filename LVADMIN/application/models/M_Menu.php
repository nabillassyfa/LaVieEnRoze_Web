<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Menu extends CI_Model {
    
	public function getAll()
	{
		$query = $this -> db -> query ("select * from t_menu");
        return $query -> result();
	}

	public function getMakanan()
	{
		$query = $this -> db -> query ("select * from t_menu WHERE jenis_menu=1");
        return $query -> result();
	}

	public function getMinuman()
	{
		$query = $this -> db -> query ("select * from t_menu WHERE jenis_menu=2");
        return $query -> result();
	}

	public function getDessert()
	{
		$query = $this -> db -> query ("select * from t_menu WHERE jenis_menu=3");
        return $query -> result();
	}

	public function getMenu($id)
	{
		$this->db->where('id_menu',$id);
		$query = $this->db->get('t_menu');
		return $query->row();
	}

	public function insertMenu($data)
	{
		$this->db->insert('t_menu',$data);
	}

	public function editMenu($data, $id)
	{
		$this->db->where('id_menu',$id);
		$this->db->update('t_menu',$data);
	}

	public function deleteMenu($id)
	{
		$this->db->where('id_menu',$id);
		$this->db->delete('t_menu');
	}
}