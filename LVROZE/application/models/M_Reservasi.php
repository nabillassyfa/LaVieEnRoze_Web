<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Reservasi extends CI_Model {

     public function getAll()
	{
		$query = $this -> db -> query ("select * from t_reservasi");
        return $query -> result();
	}
    
	public function insertBooking($data)
	{
		$this->db->insert('t_reservasi',$data);
	}
}