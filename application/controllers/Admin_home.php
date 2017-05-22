<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('admin') != "true"){
			redirect(base_url("login"));
		}
	}

	public function index(){
		$data = array(
			"title" => "Selamat Datang di Dashboard Throw App",
			"small_title" => "admin",
			"page" => "sidemenu.php"
			);
		$this->load->view('Admin/admin_home', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */