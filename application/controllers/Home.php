<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {
		function __construct()
			 {
			   parent::__construct();
			   $this->load->model('M_users','',TRUE);
			 }
		 
		function index() {
			if (isset($_SESSION['USERNAME'])) { 
				$data['username'] = $_SESSION['USERNAME'];
				$data['fullname'] = $_SESSION['FULLNAME'];
				$this->load->view('home', $data);
			} else {
				$this->load->view('login');
			}
		}

		function logout(){
			session_destroy();
			redirect ('Login');
		}
	}