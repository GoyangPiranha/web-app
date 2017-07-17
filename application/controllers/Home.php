<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
		function __construct(){
			   parent::__construct();
			   $this->load->model('M_users','',TRUE);
			   $this->load->model('M_produk','',TRUE);
		}

		function index() {
			if (isset($_SESSION['ID_USER'])) {
				$id_user = $_SESSION['ID_USER'];
				$data['baju'] = $this->M_produk->getProdukByKategoriLimit(1);
				$data['jaket'] = $this->M_produk->getProdukByKategoriLimit(2);
				$data['topi'] = $this->M_produk->getProdukByKategoriLimit(3);				
				$data['celana'] = $this->M_produk->getProdukByKategoriLimit(4);
				$data['user'] = $this->M_users->getUserById($id_user);
				$this->load->view('home', $data);
			} else {
				$this->load->view('login');
			}
		}

		function seeAll($id_kategori_produk){
			$id_user = $_SESSION['ID_USER'];
			$data['user'] = $this->M_users->getUserById($id_user);			
			$data['produk'] = $this->M_produk->getProdukByKategori($id_kategori_produk);
			$this->load->view('home2', $data);			
		}
		
		function search(){
			$key = $this->input->post('key');
			$id_user = $_SESSION['ID_USER'];
			$data['user'] = $this->M_users->getUserById($id_user);	
			$data['produk'] = $this->M_produk->searchProduk($key);
			$this->load->view('home2', $data);
		}


		function logout(){
			session_destroy();
			redirect ('Login');
		}
		function throw_it(){
			redirect ('Throw_it');
		}
	}
?>
