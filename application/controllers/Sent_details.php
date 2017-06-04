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
		$this->load->library('rajaongkir');
        $this->load->helper('url');
        $this->load->model('M_users','',TRUE);
		$this->load->model('M_transaksi','',TRUE);
		$this->load->model('M_jenis_pengiriman','',TRUE);
		$this->load->model('M_logistik','',TRUE);
		
    }
	
	public function index()
	{

		if(isset($_SESSION['USERNAME'])){
			$username = $_SESSION['USERNAME'];
			// $data['provinsi'] = $this->m_user->getProvinsiQuery(); //from db

			$data['provinsi'] = $this->rajaongkir->province(); //from api
			$data['ukuran'] = $this->M_transaksi->getUkuran();
			$prov_obj = json_decode($data['provinsi']);
			$data['provinsi'] = $prov_obj->rajaongkir->results;		

			$this->load->view('sent_details', $data);
		}
		else{
			$this->load->view('login');
		}
		
	}
	public function getKota(){
		//use API
		$this->load->library('rajaongkir');
		$id_provinsi = $this->input->post('id_provinsi');
		// $kotas = $this->M_users->getKotaQuery($id_provinsi);
		$kotas = $this->rajaongkir->city($id_provinsi);
		// echo $kota;
		$kota_objct = json_decode($kotas);
		$kotas = $kota_objct->rajaongkir->results;
		// echo json_encode('dffdfdfd');

		if (count($kotas)>0) {
			$select_box = '';
			$select_box .= '<option value="null">Pilih Kota</option>';
			foreach ($kotas as $kota) {
				if($kota->type == 'Kabupaten'){
					$nama ='Kab.'.$kota->city_name;
				}else{
					$nama = $kota->type.' '.$kota->city_name;
				}
				$select_box .= '<option value="'.$kota->city_id.'">'.$nama.'</option>';
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
		$alamat_tujuan    = $this->input->post('alamat');
	}

	public function getHarga(){
		$this->load->library('rajaongkir');
		$kota_tujuan = 	$this->input->post('id_kota');
		$koata_asal = 256;
		$berat = 1000;
		$kurir_id = ["jne","pos","tiki"];
		foreach ($kurir_id as $value) {
			$temp = $this->rajaongkir->cost($koata_asal, $kota_tujuan, $berat, $value);
			$temp = json_decode($temp);
			$cost[$value] = $temp->rajaongkir->results;  
		}	
			echo json_encode($cost);
	}

}
