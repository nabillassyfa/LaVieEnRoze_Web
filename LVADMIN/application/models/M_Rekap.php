<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Rekap extends CI_Model {

    public function tampil_data(){
        $result = $this->db->get('t_rekap');
        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return false;
        }
    }

    public function ambil_id_rekap($id_rekap){
        $result = $this->db->where('id', $id_rekap)->limit(1)->get('t_rekap');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return false;
        }
    }

    public function ambil_id_pesanan($id_rekap){
        $result = $this->db->where('id_rekap', $id_rekap)->get('t_pesan');
        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return false;
        }
    }

    public function updateOrderStatus($orderID, $status) {
        $data = array(
            'status' => $status
        );
    
        $this->db->where('id', $orderID);
        $this->db->update('t_pesan', $data);

        return $this->db->affected_rows() > 0;
    }

    // public function updateOrderStatus($order_id, $status) {
    //     $data = array('status' => $status);
    //     $this->db->where('id', $order_id);
    //     $this->db->update('orders', $data);
    
        
    // }
    
    
}