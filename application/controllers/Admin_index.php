<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_index extends CI_Controller {

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
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_users','',TRUE);
		$this->load->model('M_produk','',TRUE);
		$this->load->model('M_konveksi','',TRUE);
		$this->load->model('M_transaksi','',TRUE);
		
	}
	public function index()
	{
		if (isset($_SESSION['USERNAME'])) {
			$data['user'] = $this->M_user->getUserCount();
			$data['produk'] = $this->M_user->getProductCount();
			$data['transaksi'] = $this->M_user->getTransactionCount();
			$this->load->view('admin_index');
		}
		else {
			$this->load->view('admin_login');
		}
	}
	
	function logout(){
		session_destroy();
		redirect ('admin_login');
	}
}
