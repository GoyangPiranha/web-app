<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//required_once('/Home/');
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
		$this->load->model('M_produk','',TRUE);
		$this->load->model('M_jenis_konveksi','',TRUE);
		$this->load->model('M_tujuan','',TRUE);
		
		
		
		
    }
	
	public function index($id_konveksi, $id_produk)
	{

		if(isset($_SESSION['ID_USER'])){
			$username = $_SESSION['ID_USER'];
			// $data['provinsi'] = $this->m_user->getProvinsiQuery(); //from db
			$data['harga'] = $this->M_jenis_konveksi->getHarga($id_produk, $id_konveksi);
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

	// function proses($id_konveksi, $id_produk){
	// 	echo $id_konveksi."========".$id_produk;
	// }

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

	public function process($id_produk, $id_konveksi){
		$nama_tujuan      = $this->input->post('fullname');
		$kodepos_tujuan   = $this->input->post('kodepos');
		$handphone_tujuan = $this->input->post('nomorhp');
		$kota_tujuan	  = $this->input->post('select_kota');
		$email_tujuan     = $this->input->post('email');
		$alamat_tujuan    = $this->input->post('alamat');
		$ukuran = $this->input->post('select_ukuran');
		$jenis_pengiriman = $_POST['logistik'];
		$biaya_konveksi = $_POST['biayakonveksi'];
		$biaya_kirim = $_POST['biayakirim'];
		$harga_barang = $_POST['hargabarang'];
		$harga_total = $_POST['hargatotal'];
		$uniq = uniqid();
		$tanggal  = date('Y-m-d');
		$status_transaksi = 1;
		$id_user = $_SESSION['ID_USER'];

		$tujuan = array(
			'id_tujuan' => $uniq,
			'nama_tujuan' => $nama_tujuan,
			'kota_tujuan' => $kota_tujuan,
			'handphone_tujuan' => $handphone_tujuan,
			'kodepos' => $kodepos_tujuan,
			'email' => $email_tujuan,
			'alamat' => $alamat_tujuan
		);

		$transaksi = array(
			'id_transaksi' => $uniq,
			'id_produk' => $id_produk,
			'id_konveksi' => $id_konveksi,
			'ukuran' => $ukuran,
			'status_transaksi' => $status_transaksi,
			'tanggal' => $tanggal,
			'jenis_pengiriman' => $jenis_pengiriman,
			'biaya_kirim' => $biaya_kirim,
			'harga_total' => $harga_total
		);

		$_SESSION['tujuan'] = $tujuan;
		$_SESSION['transaksi'] = $transaksi;
		

		redirect('Payment_method/index', 'refresh');

		// $tujuan = $this->M_tujuan->insert($uniq, $nama_tujuan, $kota_tujuan, $handphone_tujuan, $kodepos_tujuan, $email_tujuan, $alamat_tujuan);
		// if($tujuan == false){
		// 	redirect('Sent_details/index','refresh');
		// }else{
		// 	$transaksi = $this->M_transaksi->insert($uniq, $id_user, $id_produk, $id_konveksi, $ukuran, $status_transaksi, $uniq, $tanggal, $jenis_pengiriman, $biaya_kirim, $harga_total);
		// 	if($transaksi ==  false){
		// 		redirect('Sent_details/index','refresh');
		// 	}else{
		// 		$_SESSION['ID_TRANSAKSI'] = $uniq;
		// 		redirect('Payment_method/index', 'refresh');
		// 		// $data['rekening'] = $this->M_rekening->getRekeningAdmin();
        //         // $data['id_transaksi'] = $uniq;
        //         // $this->load->view('payment_method', $data);
		// 	}
		// }
		
	}


}
