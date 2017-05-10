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

			$fullname = $_POST['fullname'];
			$username = $_POST['username'];
			$name = $username.$_FILES["userfile"]["name"];
		    $tmp_name = $_FILES['userfile']['tmp_name'];
		    $error = $_FILES['userfile']['error'];
			$date = $_POST['dateofbirth'];
			$avatar = $name;
			$password = $_POST['password'];
			$repassword = $_POST['confirmpassword'];
			$city = $_POST['select_kota'];
			$address = $_POST['address'];
			$email = $_POST['email'];
			$handphone = $_POST['handphone'];

			$this->load->model('m_users');
			$user = $this->M_users->cekUser($username);
			if ($user == true) {
				$data ['warning']  = "Username sudah ada, masukkan username lain";
				$this->load->view('register', $data);
			}elseif ($password != $repassword ) {
				$data ['warning']  = "Password tidak sesuai";
				$this->load->view('register', $data);
			}else{
				$location = './assets/images/';
        		move_uploaded_file($tmp_name, $location.$name);
				$p = $this->M_users->simpanData($fullname, $username, $date, $avatar, $password, $city, $address, $email, $handphone);
				if ($p === TRUE) {
					redirect('Login/index', 'refresh');
				}else{
					redirect('Daftar/index','refresh');
				}
			}
	}
}