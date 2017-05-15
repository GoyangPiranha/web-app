<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
		function __construct()
		{
			   parent::__construct();
			   $this->load->model('M_users','',TRUE);
		}
		 
		function index() {
			if (isset($_SESSION['USERNAME'])) { 
				$data['username'] = $_SESSION['USERNAME'];
				$data['fullname'] = $_SESSION['FULLNAME'];
				$data['jenis_user'] = $_SESSION['JENIS_USER'];
				redirect('home', $data);
			} else {
				$this->load->view('login');
			}
		} 

		function cekLogin(){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$this->load->model('m_users');
			$user = $this->M_users->cekLogin($username, $password);
			if ($user == true) {
				if ($_SESSION['JENIS_USER'] == 2) {
					$this->session->set_userdata('admin', 'true');
					redirect('admin_home', 'refresh');	
				} else{
					$data['username'] = $_SESSION['USERNAME'];
					$data['fullname'] = $_SESSION['FULLNAME'];
					$data['jenis'] = $_SESSION['JENIS_USER'];
					redirect('home', $data);
				}
			}else {
				$data ['warning']  = "Data tidak ditemukan";
				$this->load->view('login',$data);
				//echo "salah";
			}
		}
	}