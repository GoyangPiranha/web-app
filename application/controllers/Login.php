<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
		function __construct()
			 {
			   parent::__construct();
			   $this->load->model('M_users','',TRUE);
			 }
		 
		function index() {
			if (isset($_SESSION['USERNAME'])) { 
			// $this->load->model('Thread_model');
			// $mdata['thread'] = $this->Thread_model->getSemuaThread();
				$data['username'] = $_SESSION['USERNAME'];
				$data['fullname'] = $_SESSION['FULLNAME'];
				redirect('home','refresh');
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
				redirect('home','refresh');
				//echo "aaaaaaaaa";
			}else {
				$data ['warning']  = "Data tidak ditemukan";
				$this->load->view('login',$data);
				//echo "salah";
			}
		}
	}