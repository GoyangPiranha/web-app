<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_transaction extends CI_Controller {

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
		$this->load->model('M_transaksi','',TRUE);
	}
	public function index()
	{
		if (isset($_SESSION['USERNAME'])) {
			$data['transaksi'] = $this->M_transaksi->getTransaksi();
			$data['status'] = $this->M_transaksi->getAllTransaction();
			$this->load->view('admin_transaction', $data);
		}
		else {
			$this->load->view('admin_login');
		}
	}

	public function detail($id){
		$data = $this->M_transaksi->getTransaksiById($id);
		echo json_encode($data);
	}

	public function updateStatus(){
		$id = array(
					'id' => $this->input->post('id')
		);
		$data = array(
						'id_status_transaksi' => $this->input->post('status_transaksi')
		);

		// $id = $this->input->post('id');
		// $id_status_transaksi = $this->input->post('status_transaksi');
		$this->M_transaksi->transactionUpdate($id, $data);
		echo json_encode(array("status" => TRUE));
	}

	function deleteTransaction($id){
		$this->M_transaksi->deleteTransaction($id);
		echo json_encode(array("status" => TRUE));
	}
}
