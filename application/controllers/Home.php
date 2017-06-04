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
				$data['produkkaos'] = $this->M_produk->getProdukByKategoriLimit(4);
				$data['user'] = $this->M_users->getUserById($id_user);
				$this->load->view('home', $data);
			} else {
				$this->load->view('login');
			}
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
