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

	public function find($id){
		$result = $this->db->where('id_menu', $id)
							->limit(1)
						   	->get('t_menu');
		
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}
	}

	// public function insertBooking($data)
	// {
	// 	$this->db->insert('t_reservasi',$data);
	// }
}