<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sent_details extends CI_Controller {

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
        $this->load->helper('url');
        $this->load->model('M_users','m_user',TRUE);
    }
	public function index()
	{
		if(isset($_SESSION['USERNAME'])){
			$username = $_SESSION['USERNAME'];
			$data['provinsi'] = $this->m_user->getProvinsiQuery();
			$this->load->view('sent_details', $data);
		}
		else{
			$this->load->view('login');
		}
		
	}

	public function getKota(){
		$id_provinsi = $this->input->post('id_provinsi');
		$kotas = $this->M_users->getKotaQuery($id_provinsi);
		if (count($kotas)>0) {
			$select_box = '';
			$select_box .= '<option value="">Pilih Kota</option>';
			foreach ($kotas as $kota) {
				$select_box .= '<option value="'.$kota->id_kota.'">'.$kota->nama_kota.'</option>';
			}
			echo json_encode($select_box);
		}
	}

	public function process(){
		$nama_tujuan      = $this->input->post('fullname');
		$kodepos_tujuan   = $this->input->post('kodepos');
		$handphone_tujuan = $this->input->post('nomorhp');
		$kota_tujuan	  = $this->input->post('select_kota');
		$email_tujuan     = $this->input->post('email');
		$alamat_tujuan    = $this->input->pos('alamat');
	}
}
