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

	function add(){
		$nama = $_POST['nama_konveksi'];
		$harga = $_POST['harga_konveksi'];
		$deskripsi = $_POST['deskripsi_konveksi'];
		$logo = $_FILES['logo_konveksi']['name'];
		$uniqid = uniqid();
		$logo_konveksi = $uniqid.$logo;
		$tmp_name = $_FILES['logo_konveksi']['tmp_name'];
		$logoerr = $_FILES['logo_konveksi']['error'];
		if($logoerr==1){
			$data ['warning']  = "Foto gagal di upload";
			$data ['konveksi'] = $this->M_users->getKonveksi();
			$this->load->view('admin_konveksi', $data);
		}
		else{
			$location = '.assets/images/Konveksi/';
			move_uploaded_file($tmp_name, $location.$logo_konveksi);
			$check = $this->M_konveksi->insertKonveksi($nama, $deskripsi, $harga, $logo_konveksi);
			
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
}
