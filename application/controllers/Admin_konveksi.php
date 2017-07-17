<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_konveksi extends CI_Controller {

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
		$this->load->model('M_konveksi','',TRUE);
	}

	public function index()
	{
		if (isset($_SESSION['USERNAME'])){
			$data['konveksi'] = $this->M_konveksi->getKonveksi(); 
			$this->load->view('admin_konveksi', $data);
		}
		else {
			$this->load->view('admin_login');
		}
	}

	function getById($id){
		$data = $this->M_konveksi->getById($id);
		echo json_encode($data);
		
	}

	function updateKonveksi($id){
		
	}

	function add(){
		$nama = $_POST['nama_konveksi'];
		$id_baju = 1;
		$harga_baju = $_POST['harga_kategori_baju'];
		$id_jaket = 2;
		$harga_jaket = $_POST['harga_kategori_jaket'];
		$id_topi = 3;
		$harga_topi = $_POST['harga_kategori_topi'];
		$id_celana = 4;
		$harga_celana = $_POST['harga_kategori_celana'];
		$nothing = 0;
		$deskripsi = $_POST['deskripsi_konveksi'];
		$logo = $_FILES['logo_konveksi']['name'];
		$uniqid = uniqid();
		$random_id = rand(23, 9378).rand(134, 110358);
		$logo_konveksi = $uniqid.$logo;
		$tmp_name = $_FILES['logo_konveksi']['tmp_name'];
		$logoerr = $_FILES['logo_konveksi']['error'];

		$data_konveksi = array(
						'id' => $random_id,
						'nama' => $nama,
						'deskripsi' => $deskripsi,
						'logo' => $logo_konveksi
		);

		$insert_konveksi = $this->M_konveksi->insertKonveksi($data_konveksi);
		
		if($harga_baju!=""){
			$data_harga = array(
								'id_kategori_produk' => $id_baju,
								'id_konveksi' => $random_id,
								'harga' => $harga_baju
			);
			$this->M_konveksi->insertJenisKonveksi($data_harga);
		}
		else{
			$data_harga = array(
								'id_kategori_produk' => $id_baju,
								'id_konveksi' => $random_id,
								'harga' => $nothing
			);
			$this->M_konveksi->insertJenisKonveksi($data_harga);
		}

		if($harga_jaket!=""){
			$data_harga = array(
								'id_kategori_produk' => $id_jaket,
								'id_konveksi' => $random_id,
								'harga' => $harga_jaket
			);
			$this->M_konveksi->insertJenisKonveksi($data_harga);
		}
		else {
			$data_harga = array(
								'id_kategori_produk' => $id_jaket,
								'id_konveksi' => $random_id,
								'harga' => $nothing
			);
			$this->M_konveksi->insertJenisKonveksi($data_harga);
		}

		if($harga_topi!=""){
			$data_harga = array(
								'id_kategori_produk' => $id_topi,
								'id_konveksi' => $random_id,
								'harga' => $harga_topi
			);
			$this->M_konveksi->insertJenisKonveksi($data_harga);
		}
		else {
			$data_harga = array(
								'id_kategori_produk' => $id_topi,
								'id_konveksi' => $random_id,
								'harga' => $nothing
			);
			$this->M_konveksi->insertJenisKonveksi($data_harga);
		}

		if($harga_celana!=""){
			$data_harga = array(
								'id_kategori_produk' => $id_celana,
								'id_konveksi' => $random_id,
								'harga' => $harga_celana
			);
			$this->M_konveksi->insertJenisKonveksi($data_harga);
		}
		else{
			$data_harga = array(
								'id_kategori_produk' => $id_celana,
								'id_konveksi' => $random_id,
								'harga' => $nothing
			);
			$this->M_konveksi->insertJenisKonveksi($data_harga);
		}

		if($logoerr==1){
			$data ['warning']  = "Foto gagal di upload";
			$data ['konveksi'] = $this->M_users->getKonveksi();
			$this->load->view('admin_konveksi', $data);
		}
		else{
			$location = './assets/images/Konveksi/';
			move_uploaded_file($tmp_name, $location.$logo_konveksi);
			
			redirect('Admin_konveksi','refresh');
			
			// $check = $this->M_konveksi->insertKonveksi($nama, $deskripsi, $harga_baju, $harga_jaket, $harga_topi, $harga_celana , $logo_konveksi);
			
			// if($check == true){
			// 	$data['status'] = "Data berhasil ditambahkan.";
			// 	$data['konveksi'] = $this->M_konveksi->getKonveksi(); 
			// 	$this->load->view('admin_konveksi', $data);
			// }
			// else{
			// 	$data['status'] = "Gagal menambahkan data.";
			// 	$data['konveksi'] = $this->M_konveksi->getKonveksi(); 
			// 	$this->load->view('admin_konveksi', $data);
			// }
		}
	}

	function deleteKonveksi($id)
	{
		$data = $this->M_konveksi->deleteKonveksi($id);
		echo json_encode(array('status' => $data));
	}
}
