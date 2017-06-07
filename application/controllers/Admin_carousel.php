<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_carousel extends CI_Controller {

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
		$this->load->model('M_carousel','',TRUE);
	}
	public function index()
	{
		if (isset($_SESSION['USERNAME'])) {
			$data['carousel'] = $this->M_carousel->getCarousel();
			$this->load->view('admin_carousel', $data);
		}
		else {
			$this->load->view('admin_login');
		}
	}

	public function add_carousel(){
		$nama = $_POST['nama_carousel'];
		$foto = $_FILES['userfile']['name'];
		$uniqid = uniqid();
		$header = $uniqid.$foto; 
		$tmp_name = $_FILES['userfile']['tmp_name'];
		$logoerr = $_FILES['userfile']['error'];

		$data = array(
					'nama_carousel' => $nama,
					'foto_carousel' => $header
		);

		// echo $data['foto_carousel'];
		$location = './assets/images/Header/';
		move_uploaded_file($tmp_name, $location.$header);
		$check = $this->M_carousel->addCarousel($data);
		// echo json_encode(array("status" => TRUE));
		// if($check==true){
			
			 redirect('Admin_carousel','refresh');
			
		// }
		// else{
			// redirect('Admin_carousel','refresh');
		// }
	}

	public function delete($id){
		$location = './assets/images/Header/';
		// $data['carousel'] = $this->M_carousel->getFotoName($id);
		// $target = $data['carousel'];
		// $path = $location.$target;
		// unlink($path);
		
		$this->M_carousel->deleteCarousel($id);
		echo json_encode(array("status" => TRUE));
	}
}
