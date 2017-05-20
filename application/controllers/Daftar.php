<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Daftar extends CI_Controller {

	function __construct()
		 {
		   parent::__construct();
		   $this->load->model('M_users','',TRUE);
		 }

	public function index(){
		if (isset($_SESSION['USERNAME'])) { 
			redirect('Home','refresh');
		} else { 
			$data['provinsi']=$this->M_users->getProvinsiQuery();
			$this->load->view('register', $data);
		}
	}

	public function getKota(){
		$id_provinsi = $this->input->post('id_provinsi');
		$kotas = $this->M_users->getKotaQuery($id_provinsi);
		if (count($kotas)>0) {
			$select_box = '';
			$select_box .= '<option value="">Pilih Kota</option>';
			foreach ($kotas as $kota) {
				$select_box .= '<option value="'.$kota->id_kota.'">'.$kota->nama_kota.'</option>';
			}
			echo json_encode($select_box);
		}
	}

	public function proses(){
			$nama_user = $_POST['fullname'];
			$username_user = $_POST['username'];
			$uniqid = uniqid();
			$foto = $_FILES["userfile"]["name"];
			$fotoprofile = $uniqid.$username_user.$foto;
        	$tmp_name = $_FILES['userfile']['tmp_name'];
			$fotoerror = $_FILES['userfile']['error'];
			$tanggal_lahir_user = $_POST['dateofbirth'];
			$password_user = $_POST['password'];
			$repassword_user = $_POST['confirmpassword'];
			$kota_user = $_POST['select_kota'];
			$alamat_user = $_POST['address'];
			$email_user = $_POST['email'];
			$contact_user = $_POST['handphone'];
			$this->load->model('m_users');
			$user = $this->M_users->cekUser($username_user);
			$email = $this->M_users->cekEmail($username_user);
			if ($user == true) {
				$data ['warning']  = "Username sudah ada, masukkan username lain";
				$data ['provinsi'] = $this->M_users->getProvinsiQuery();
				$this->load->view('register',$data);
			}elseif ($password_user != $repassword_user ) {
				$data ['warning']  = "Password tidak sesuai";
				$data ['provinsi'] = $this->M_users->getProvinsiQuery();
				$this->load->view('register',$data);
			}elseif($fotoerror==1){
				$data ['warning']  = "Foto gagal di upload";
				$data ['provinsi'] = $this->M_users->getProvinsiQuery();
				$this->load->view('register',$data);
			}elseif($email== true){
				$data ['warning']  = "Email sudah terdaftar";
				$data ['provinsi'] = $this->M_users->getProvinsiQuery();
				$this->load->view('register',$data);
			}else{
				$location = './assets/images/Profil/';
				move_uploaded_file($tmp_name, $location.$fotoprofile);
				$password_user = md5($password_user);
				$p = $this->M_users->registrasi($username_user, $password_user, $nama_user, $tanggal_lahir_user, $kota_user, $alamat_user, $fotoprofile, $email_user, $contact_user);
				if ($p === TRUE) {
					redirect('Login/index', 'refresh');
				}else{
					redirect('Daftar/index','refresh');
				}
			}
	}
}

