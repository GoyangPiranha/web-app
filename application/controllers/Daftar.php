<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Daftar extends CI_Controller {

	function __construct()
		 {
		   parent::__construct();
		   $this->load->model('M_users','',TRUE);
		 }

	public function index(){
		if (isset($_SESSION['USERNAME'])) { 
			// $this->load->model('Thread_model');
			// $mdata['thread'] = $this->Thread_model->getSemuaThread();
				$data['username'] = $_SESSION['USERNAME'];
				$data['fullname'] = $_SESSION['FULLNAME'];
				redirect('Home','refresh');
		} else {
				$this->load->view('register');
		}
	}

	public function proses(){

			$fullname = $_POST['fullname'];
					$username = $_POST['username'];
					$name = $_FILES["userfile"]["name"];
				    $tmp_name = $_FILES['userfile']['tmp_name'];
				    $error = $_FILES['userfile']['error'];

					$date = $_POST['dateofbirth'];
					$avatar = $name;
					$password = $_POST['password'];
					$repassword = $_POST['confirmpassword'];
					$province = $_POST['province'];
					$city = $_POST['city'];
					$address = $_POST['address'];
					$email = $_POST['email'];
					$handphone = $_POST['handphone'];

					$this->load->model('m_users');
					$user = $this->M_users->cekUser($username);
					if ($user == true) {
						$data ['warning']  = "Username sudah ada, masukkan username lain";
						$this->load->view('register',$data);
					}elseif ($password != $repassword ) {
						$data ['warning']  = "Password tidak sesuai";
						$this->load->view('register',$data);
					}else{
						$location = './assets/images/';
		        		move_uploaded_file($tmp_name, $location.$name);
						$p = $this->M_users->simpanData($fullname,$username,$date,$avatar,$password,$province,$city,$address,$email,$handphone);
						if ($p === TRUE) {
							redirect('Login/index', 'refresh');
						}else{
							redirect('Daftar/index','refresh');
						}
					}
	}
}