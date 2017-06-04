<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_bank extends CI_Controller {

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
		$this->load->helper('url');
		$this->load->model('M_rekening','',TRUE);
	}

	public function index()
	{
		if (isset($_SESSION['USERNAME'])) {
			$data['admin_bank'] = $this->M_rekening->getAdminRek();
			$data['bank'] = $this->M_rekening->getBank();
			$this->load->view('admin_bank', $data);
		}
		else {
			$this->load->view('admin_login');
		}
	}

	public function add(){
		$id_user = $_SESSION['ID_USER'];
		$data = array(
					'no_rekening' => $this->input->post('no_rekening'),
					'nama_pemilik' => $this->input->post('nama_pemilik'),
					'id_user' => $id_user,
					'nama_bank' => $this->input->post('pilih_bank'),
		);

		$this->M_rekening->insertAdminBank($data);

		// $id_user = $_SESSION['ID_USER'];
		// $nama_pemilik = $_POST['nama_pemilik'];
		// $no_rekening = $_POST['no_rekening'];
		// $nama_bank = $_POST['pilih_bank'];

		// $this->M_rekening->insertRekening($no_rekening, $nama_pemilik, $id_user, $nama_bank);
		echo json_encode(array("status" => TRUE));
	}

	function hapus($id){
		$this->M_rekening->delete($id);
		echo json_encode(array("status" => TRUE));
	}
}
