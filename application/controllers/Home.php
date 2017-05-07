<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
		function __construct()
			 {
			   parent::__construct();
			   $this->load->model('M_users','',TRUE);
			 }
		 
		function index() {
			if (isset($_SESSION['USERNAME'])) { 
				$data['username'] = $_SESSION['USERNAME'];
				$data['fullname'] = $_SESSION['FULLNAME'];
				$data['avatar'] = $_SESSION['AVATAR'];
			$this->load->view('home', $data);
			} else {
				$this->load->view('login');
			}
		}
ff
		function logout(){
			session_destroy();
			redirect ('Login');
		}
		function throw_it(){
			redirect ('Throw_it');
		}
	}