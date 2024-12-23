<?php

class C_Rekap extends CI_Controller{

    public function index(){
        if($this->session->flashdata('berhasil')){
			echo '<script>alert("Status berhasil diganti ");</script>';
		}else if($this->session->flashdata('tidak')){
			echo '<script>alert("Status gagal");</script>';
		}


        $data['rekap'] = $this->M_Rekap->tampil_data(); // Get the rekap data from the model
    
        if ($data['rekap']) {
            $this->load->view('V_Rekap', $data); // Pass the data to the view
        } else {
            $data['rekap'] = array(); // Set an empty array if no rekap data is available
            $this->load->view('V_Rekap', $data); // Pass the empty array to the view
        }
    }

    public function detail($id_rekap){
        $data['rekap'] = $this->M_Rekap->ambil_id_rekap($id_rekap);
        $data['pesanan'] = $this->M_Rekap->ambil_id_pesanan($id_rekap);

        $this->load->view('V_DetailRekap', $data);
    }
   
    public function status($order_id, $status) {
        if ($status == 1) {
            $status = 'Pesanan Sedang di Siapkan';
        } else if ($status == 2) {
            $status = 'Pesanan Sedang di Jalan';
        } else if ($status == 3) {
            $status = 'Pesanan Telah Selesai';
        }
        
        $result = $this->M_Rekap->updateOrderStatus($order_id, $status);
    
        if ($result) {
            $this->session->set_flashdata('berhasil',1);
        } else {
            $this->session->set_flashdata('tidak',1);
        }
    
        // Redirect back to the order details page
        redirect('C_Rekap/index');
    }    
    
}