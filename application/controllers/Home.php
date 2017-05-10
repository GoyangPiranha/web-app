<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
		function __construct()
			 {
			   parent::__construct();
			   $this->load->model('M_users','',TRUE);
			 }
		 
		function index() {
			if (isset($_SESSION['USERNAME'])) {
				$this->load->view('home');
			} else {
				$this->load->view('login');
			}
		}
		function logout(){
			session_destroy();
			redirect ('Login');
		}
		function throw_it(){
			redirect ('Throw_it');
		}
	}