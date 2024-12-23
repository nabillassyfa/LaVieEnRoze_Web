<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_LVRose extends CI_Controller {


	public function index()
	{
		if($this->session->flashdata('keluar')){
			echo '<script>alert("Berhasil  logout");</script>';
		}

		$dt = $this -> M_Menu -> getMakanan ();
		//menampung data 
		$temp['data'] = $dt;

		$dt = $this -> M_Menu -> getMinuman ();
		//menampung data   
		$temp['isi'] = $dt;

		$dt = $this -> M_Menu -> getDessert ();
		//menampung data 
		$temp['dataa'] = $dt;

		//membuka view mitra dnegan membawa data temp
		$this -> load -> view ('V_Home', $temp);
	}

	public function menu() {
		//membuka view produk dan menampilkannya
		$this->load->view('V_Menu');
	}

	public function goToHome() {
		//membuka view produk dan menampilkannya
		$this->load->view('V_HomeLogin');
	}

	public function booking() {
		//membuka view produk dan menampilkannya
		$this->load->view('V_Booking');
	}

	public function linklogin() {
		if($this->session->flashdata('edit')){
			echo '<script>alert("Update Password berhasil ");</script>';
		}else if($this->session->flashdata('daftar')){
			echo '<script>alert("Pendaftaran akun berhasil, silahkan login");</script>';
		}
		//membuka view produk dan menampilkannya
		$this->load->view('V_Login');
	}

	public function menulogin(){
		
		if($this->session->flashdata('contact')){
			echo '<script>alert("Terimakasih atas kritik dan saran anda");</script>';
		}else if($this->session->flashdata('hapus')){
			echo '<script>alert("Hapus Pesanan Berhasil");</script>';
		}else if($this->session->flashdata('selesai')){
			echo '<script>alert("Pesanan selesai di proses, Pelanggan Setia Terimakasih");</script>';
		}

		$dt = $this -> M_Menu -> getMakanan ();
		//menampung data 
		$temp['data'] = $dt;

		$dt = $this -> M_Menu -> getMinuman ();
		//menampung data   
		$temp['isi'] = $dt;

		$dt = $this -> M_Menu -> getDessert ();
		//menampung data 
		$temp['dataa'] = $dt;

		//membuka view mitra dnegan membawa data temp
		$this -> load -> view ('V_menulogin', $temp);
	}

	public function ceklogin(){
		$username = $this->input->post('username');
		$pass = $this->input->post('pass');
	
		$login = $this->M_Login->check_login($username, $pass);
	
		if ($login) {
			$nama = $this->M_Login->get_nama($username); // Mengambil nama pengguna dari database atau sumber lainnya
			echo "<script>alert('Selamat datang $nama! Login Berhasil');</script>";
			$this->menulogin();
		} else {
			echo "<script>alert('Login Gagal!!');</script>";
			$this->linklogin();
		}
	}
	

	public function linksignup() {
		//membuka view produk dan menampilkannya
		$this->load->view('V_SignUp');
	}

	public function linkpesan() {
		//membuka view produk dan menampilkannya
		$this->load->view('V_Pesan');
	}

	public function linkMenu() {
		$dt = $this -> M_Menu -> getMakanan ();
		//menampung data 
		$temp['data'] = $dt;

		$dt = $this -> M_Menu -> getMinuman ();
		//menampung data   
		$temp['isi'] = $dt;

		$dt = $this -> M_Menu -> getDessert ();
		//menampung data 
		$temp['dataa'] = $dt;	

		//membuka view mitra dnegan membawa data temp
		$this -> load -> view ('V_Menu', $temp);
	}

	public function logout(){
		$this->session->set_flashdata('keluar',1);
		$this->session->unset_userdata('id_user');
		redirect (base_url('/index.php/C_LVRose/index'));
	}

	public function kontak() {
		//memanggil fungsi getall yang ad di mdel mitra
		$dt = $this -> M_Contact -> getAll ();

		//menampung data 
		$temp['data'] = $dt;				//menampung data kedalam temp

		//membuka view mitra dnegan membawa data temp
		$this -> load -> view ('V_Contact', $temp);
	}

	public function klogin() {
		$this -> load -> view ('V_Klogin');
	}

	public function reservasi() {
		if($this->session->flashdata('reservasi')){
			echo '<script>alert("Data Reservasi telah tersimpan, Pelanggan Seria Terimakasih ");</script>';
		}
		$this -> load -> view ('V_Reservasi');
	}

	public function about() {
		//membuka view produk dan menampilkannya
		$this->load->view('V_About');
	}

	public function createAction(){
		//menampung data inputan perusahaan yang telah dimasukan user
		$nama_pelanggan = $this->input->post('nama_pelanggan');
		//menampung data inputan alamat yang telah dimasukan user
		$no_telp_pelanggan = $this->input->post('no_telp_pelanggan');
		//menampung data inputan email yang telah dimasukan user
		$no_meja = $this->input->post('no_meja');
		//menampung data inputan perusahaan yang telah dimasukan user
		$email = $this->input->post('email');
		//menampung data inputan kemitraan yang telah dimasukan user
		$tanggal_reservasi = $this->input->post('tanggal_reservasi');
		//menampung data inputan alamat yang telah dimasukan user
		$jam_reservasi = $this->input->post('jam_reservasi');
		//menampung data inputan email yang telah dimasukan user
		$jumlah_orang = $this->input->post('jumlah_orang');

		//memasukan data kedalam array
		$createaction = array(
			'nama_pelanggan' => $nama_pelanggan,
			'no_telp_pelanggan' => $no_telp_pelanggan,
			'no_meja' => $no_meja,
			'email' => $email,
			'tanggal_reservasi' => $tanggal_reservasi,
			'jam_reservasi' => $jam_reservasi,
			'jumlah_orang' => $jumlah_orang
		);

		$this->session->set_flashdata('reservasi',1);
		$this->M_Reservasi->insertBooking($createaction);
		//mengarahkan kembali ke tampilan semula
		redirect (base_url('/index.php/C_LVRose/reservasi'));
	}

	public function createActionContact(){
		//menampung data inputan perusahaan yang telah dimasukan user
		$nama_pengirim = $this->input->post('nama_pengirim');
		//menampung data inputan alamat yang telah dimasukan user
		$isi_pesan = $this->input->post('isi_pesan');
		//menampung data inputan email yang telah dimasukan user
		$subjek_pesan = $this->input->post('subjek_pesan');

		//memasukan data kedalam array
		$createaction = array(
			'nama_pengirim' => $nama_pengirim,
			'isi_pesan' => $isi_pesan,
			'subjek_pesan' => $subjek_pesan,
		);

		$this->session->set_flashdata('contact', 1);
		$this->M_Contact->insertPesan($createaction);
		//mengarahkan kembali ke tampilan semula
		redirect (base_url('/index.php/C_LVRose/menulogin'));
	}

	public function daftar() {
		//memanggil fungsi getall yang ad di mdel mitra
		$dt = $this -> M_Daftar -> getAll ();

		//menampung data 
		$temp['data'] = $dt;				//menampung data kedalam temp

		//membuka view mitra dnegan membawa data temp
		$this -> load -> view ('V_Login', $temp);
	}

	public function createActionDaftar(){
		//menampung data inputan perusahaan yang telah dimasukan user
		$nama = $this->input->post('nama');
		//menampung data inputan alamat yang telah dimasukan user
		$email = $this->input->post('email');
		//menampung data inputan perusahaan yang telah dimasukan user
		$no_telp = $this->input->post('no_telp');
		//menampung data inputan kemitraan yang telah dimasukan user
		$username = $this->input->post('username');
		//menampung data inputan alamat yang telah dimasukan user
		$pass = $this->input->post('pass');

		//memasukan data kedalam array
		$createaction = array(
			'nama' => $nama,
			'email' => $email,
			'no_telp' => $no_telp,
			'username' => $username,
			'pass' => $pass
		);

		$this->session->set_flashdata('daftar', 1);
		$this->M_Daftar->insertDaftar($createaction);
		//mengarahkan kembali ke tampilan semula
		redirect (base_url('/index.php/C_LVRose/linklogin'));
	}
	
	public function resetpw (){
		$this -> load -> view ('V_Email');
	}
	
	public function reset_password() {
		$email = $this->input->post('email');
		$user = $this->M_Daftar->getemail($email);
	
		if ($user) {
			$dt = $this->M_Daftar->get_idd($email);
			$temp['id_user'] = $dt;
			$this->load->view('V_lupapw', $temp);
		} else {
			echo "<script>alert('Email tidak terdaftar!');</script>";
			$this->linklogin();
		}
	}
	
	public function updatepw($id_user) {
		$pass = $this->input->post('pass');
	
		// Memasukkan data ke dalam array
		$updateaction = array(
			'pass' => $pass,
		);
		$this->session->set_flashdata('edit', 1);
		//Melakukan pembaruan password menggunakan model atau logika bisnis yang sesuai
		$this->M_Daftar->edit($id_user, $updateaction);
	
		// Redirect atau tampilkan pesan sukses, sesuai dengan kebutuhan Anda
		redirect(base_url('index.php/C_LVRose/linklogin'));
	}

	public function tambah_keranjang($id) {
		$menu = $this->M_Menu->find($id);
		$data = array(
			'id' => $menu->id_menu,
			'qty' => 1,
			'price' => $menu->harga_menu,
			'name' => $menu->nama_menu,
		);
		$this->cart->insert($data);
	
		redirect('C_LVRose/menulogin');
	}	
	
	public function detail() {
		if ($this->cart->total_items() == 0) {
			echo "<script>alert('Tidak ada pesanan yang anda masukan!');</script>";
			$this->menulogin();
		} else {
			$this->load->view('V_Keranjang');
		}
	}

	public function hapus_keranjang (){
		$this->session->set_flashdata('hapus', 1);
		$this->cart->destroy();
		redirect(base_url('index.php/C_LVRose/menulogin'));
	}

	public function lanjut_belanja(){
		$this-> load-> view ('V_menulogin');
	}

	public function cekout (){
		$this-> load-> view ('V_Checkout');
	}

	public function pesanan() {
		date_default_timezone_set('Asia/Jakarta');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
	
		$rekap = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'tgl_pesan' => date('Y-m-d H:i:s'),
		);
	
		$this->db->insert('t_rekap', $rekap);
		$id_rekap = $this->db->insert_id();
		$pembayaran = $this->input->post('pembayaran');
		$pengiriman = $this->input->post('pengiriman');
	
		foreach ($this->cart->contents() as $item) {
			$data = array(
				'id_rekap' => $id_rekap,
				'id_menu' => $item['id'],
				'nama_menu' => $item['name'],
				'jumlah' => $item['qty'],
				'harga' => $item['price'],
				'pembayaran' => $pembayaran,
				'pengiriman' => $pengiriman,
			);
	
			$this->db->insert('t_pesan', $data);
		}
		$this->session->set_flashdata('pesan', 1);
		$this->cart->destroy();
		redirect('C_Rekap/detail/' . $id_rekap);
	}

	public function psn(){
        if ($this->cart->total_items() == 0) {
			echo "<script>alert('Tidak ada pesanan yang anda masukan!');</script>";
			$this->menulogin ();
		} else {
			$this->load->view('V_DetailRekap');
		}
    }  
	
}
