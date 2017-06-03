<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 	function __construct(){
			   parent::__construct();
			   $this->load->model('M_users','',TRUE);
			 }
			 
		function index() {
			if (isset($_SESSION['USERNAME'])) {
				redirect('admin_index','refresh');
			} else{
				$this->load->view('admin_login');
			}
		} 

		function cekAdminLogin(){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$jenis_user = 9;
			$this->load->model('M_users');
			$password = md5($password);
			$user = $this->M_users->cekAdmin($username, $password, $jenis_user);
			if ($user == true) {
				redirect('admin_index','refresh');
				// echo "aaaaaaaaa";
			}else {
				$data ['warning']  = "Data tidak ditemukan";
				$this->load->view('admin_login', $data);
				// echo "salah";
			}
		}
} 
