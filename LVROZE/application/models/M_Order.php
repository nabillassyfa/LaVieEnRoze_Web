<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Order extends CI_Model {

    public function insertOrder($data) {
        $this->db->insert('t_order', $data);
    }
    
    public function getAll ($id){
        $query = $this->db->query("SELECT
                                    t_daftar.nama, 
                                    t_daftar.no_telp, 
                                    t_order.alamat, 
                                    t_order.total, 
                                    t_order.pembayaran, 
                                    t_order.pengiriman
                                FROM
                                    t_order
                                    INNER JOIN
                                    t_daftar
                                    ON 
                                        t_order.id_user = t_daftar.id_user
                                WHERE
                                    t_order.id_order = $id");
        return $query->result();
    }
    
}
