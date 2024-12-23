<?php

class C_Rekap extends CI_Controller{ 

    public function detail($id_rekap) {
        if($this->session->flashdata('pesan')){
			echo '<script>alert("Chekout pesanan berhasil");</script>';
		}

        $data['rekap'] = $this->M_Rekap->ambil_id_rekap($id_rekap);
        $data['pesanan'] = $this->M_Rekap->ambil_id_pesanan($id_rekap);
    
        $this->load->view('V_DetailRekap', $data);
    }    

    public function selesai ($id_rekap, $status){
		if ($status == 'Pesanan%20Telah%20Selesai'){
			$this->session->set_flashdata('selesai', 1);
			$this->cart->destroy();
			redirect('C_LVRose/menulogin');
		}else {
			echo "<script>alert('Pesanan Anda belum selesai!!!');</script>";
			$this->detail ($id_rekap);
		}
	}
    
}