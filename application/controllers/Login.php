<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
		function __construct()
			 {
			   parent::__construct();
			   $this->load->model('M_users','',TRUE);
			 }
		 
		function index() {
			if (isset($_SESSION['USERNAME'])) {
				redirect('home','refresh');
			} else {
			$this->load->view('login');
			}
		} 

		function cekLogin(){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$this->load->model('m_users');
			$password = md5($password);
			$user = $this->M_users->cekLogin($username, $password);
			if ($user == true) {
				redirect('home','refresh');
				//echo "aaaaaaaaa";
			}else {
				$data ['warning']  = "Data tidak ditemukan";
				$this->load->view('login',$data);
				//echo "salah";
			}
		}
	}