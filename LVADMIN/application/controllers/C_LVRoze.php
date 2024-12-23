<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_LVRoze extends CI_Controller {


	public function index()
	{
		if($this->session->flashdata('logout')){
			echo '<script>alert("Logout berhasil!");</script>';
		}
		$this->load->view('V_Loginadmin');
	}

	public function ceklogin (){
		$user = $_POST['user'];
		$pass = $_POST ['pw'];
		
		if ($user == "rere" && $pass == "nab"){
			echo "<script>alert('Login Berhasil');</script>";
			$this -> menuadmin ();
		}else {
			echo "<script>alert('Login Gagal Coba lagi');</script>";
			$this -> index ();
		}
	}

	public function menuadmin() {

		$dt = $this -> M_Menu -> getMakanan ();
		//menampung data 
		$temp['data'] = $dt;

		$dt = $this -> M_Menu -> getMinuman ();
		//menampung data   
		$temp['isi'] = $dt;

		$dt = $this -> M_Menu -> getDessert ();
		//menampung data 
		$temp['dat'] = $dt;	
		//membuka view produk dan menampilkannya
		$this->load->view('V_Menuadmin', $temp);
	}

	public function deletemn($id){
		$menu_deleted = $this->M_Menu->deleteMenu($id);
		$this->session->set_flashdata('delete',1);
		
		//mengarahkan kembali ke tampilan semula
		redirect (base_url('/index.php/C_LVRoze/linkmenu'));
	}

	public function linkmenu() {
		if($this->session->flashdata('update')){
			echo '<script>alert("Update data berhasil ");</script>';
		}else if($this->session->flashdata('delete')){
			echo '<script>alert("Delete data berhasil");</script>';
		}else if($this->session->flashdata('tambah')){
			echo '<script>alert("Tambah menu berhasil");</script>';
		}
		$dt = $this -> M_Menu -> getMakanan ();
		//menampung data 
		$temp['data'] = $dt;

		$dt = $this -> M_Menu -> getMinuman ();
		//menampung data   
		$temp['isi'] = $dt;

		$dt = $this -> M_Menu -> getDessert ();
		//menampung data 
		$temp['dat'] = $dt;	

		//membuka view mitra dnegan membawa data temp
		$this -> load -> view ('V_Menuadmin', $temp);
	}

	public function updatemenu(){
		//mnampilkan data yang ada, engambil seluruh variabel pada form
		$id = $this->input->post('id_menu');
		$nama_menu = $this->input->post('nama_menu');
		$harga_menu = $this->input->post('harga_menu');
		$jenis_menu = $this->input->post('jenis_menu');
		$keterangan = $this->input->post('keterangan');

		//memasukkan data kedalam array
		$updateaction = array(
			'nama_menu' => $nama_menu,
			'harga_menu' => $harga_menu,
			'jenis_menu' => $jenis_menu,
			'keterangan' => $keterangan
		);
		$this->session->set_flashdata('update',1);
		$this->M_Menu->editMenu($updateaction, $id);
		redirect (base_url('/index.php/C_LVRoze/linkmenu'));
	}

	public function updateForm($id){
		$createmitra = $this->M_Menu->getMenu($id);
		
		//memasukan data mitra ke dalam array
		$data=array('data_menu'=>$createmitra);

		//membuka view update mitra dengan membawa data 
		$this->load->view('V_Updatemenu', $data);
	}

	public function createAction(){
		//menampung data inputan nama_menu yang telah dimasukan user
		$nama = $this->input->post('nama_menu');
		//menampung data inputan harga_menu yang telah dimasukan user
		$harga = $this->input->post('harga_menu');
		//menampung data inputan jenis_menu yang telah dimasukan user
		$keterangan = $this->input->post('keterangan');
		//menampung data inputan keterangan yang telah dimasukan user
		$jenis = $this->input->post('jenis_menu');

		//memasukan data kedalam array
		$createaction = array(
			'nama_menu' => $nama,
			'harga_menu' => $harga,
			'keterangan' => $keterangan,
			'jenis_menu' => $jenis
		);

		//memuat model mitra
		//$M_Mitra = $this->load->model('M_Mitra');

		//memanggil fungsi indertmitra dengan membawa prameter createaction
		$this->session->set_flashdata('tambah',1);
		$this->M_Menu->insertMenu($createaction);
		//mengarahkan kembali ke tampilan semula
		redirect (base_url('/index.php/C_LVRoze/linkmenu'));
	}

	public function reservasi() {
		//memanggil fungsi getall yang ad di mdel mitra
		$dt = $this -> M_Reservasi -> getAll ();

		//menampung data 
		$temp['data'] = $dt;				//menampung data kedalam temp

		//membuka view mitra dnegan membawa data temp
		$this -> load -> view ('V_Reservasiadmin', $temp);
	}

	public function detailrev($id) {
		//memanggil fungsi getall yang ad di mdel mitra
		$dt = $this -> M_Reservasi -> getreservasi ($id);

		//menampung data 
		$temp['data'] = $dt;				//menampung data kedalam temp

		//membuka view mitra dnegan membawa data temp
		$this -> load -> view ('V_Detail', $temp);
	}

	public function kontak() {
		//memanggil fungsi getall yang ad di mdel mitra
		$dt = $this -> M_Pesan -> getAll ();

		//menampung data 
		$temp['data'] = $dt;				//menampung data kedalam temp

		//membuka view mitra dnegan membawa data temp
		$this -> load -> view ('V_kontak', $temp);
	}

	public function dtuser() {
		//memanggil fungsi getall yang ad di mdel mitra
		$dt = $this -> M_User -> getAll ();

		//menampung data 
		$temp['data'] = $dt;				//menampung data kedalam temp

		//membuka view mitra dnegan membawa data temp
		$this -> load -> view ('V_user', $temp);
	}

	public function pesan($id) {
		//memanggil fungsi getall yang ad di mdel mitra
		$dt = $this -> M_Pesan -> getpesan ($id);

		//menampung data 
		$temp['data'] = $dt;				//menampung data kedalam temp

		//membuka view mitra dnegan membawa data temp
		$this -> load -> view ('V_isipesanadmin', $temp);
	}

	public function dataus($id) {
		//memanggil fungsi getall yang ad di mdel mitra
		$dt = $this -> M_User -> getuser ($id);

		//menampung data 
		$temp['data'] = $dt;				//menampung data kedalam temp

		//membuka view mitra dnegan membawa data temp
		$this -> load -> view ('V_datauser', $temp);
	}

	public function gotoKontak (){
		$this->load->view('V_Contact');
	}

	public function logout() {
		$this->session->set_flashdata('logout',1);
		// Redirect ke halaman berikutnya
		redirect(base_url('/index.php/C_LVRoze/index'));
	}
}
	
