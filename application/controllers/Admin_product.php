<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_product extends CI_Controller {

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
		$this->load->model('M_produk','',TRUE);
	}

	public function index()
	{
		if (isset($_SESSION['USERNAME'])) {
			$data['produk'] = $this->M_produk->getUserProduct();
			$this->load->view('admin_product', $data);
		}
		else {
			$this->load->view('admin_login');
		}
	}
	
	function getProductById($id_produk){
		$data = $this->M_produk->getStatusProductById($id_produk);
		echo json_encode($data);
	}

	function changeStatus(){
		$id_produk = array(
							'id_produk' => $this->input->post('id_produk')
		);
		$data = array(
						'id_status_produk' => $this->input->post('id_status_produk')
		);

		$check = $this->M_produk->changeStatusProduct($id_produk, $data);
		echo json_encode(array("status" => $check));
	}

}
