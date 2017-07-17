<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Canvass extends CI_Controller {

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
        $this->load->model('M_produk','',TRUE);
    }
	public function index()
	{
        if(isset($_SESSION['ID_USER'])){
            //$_SESSION['STATUS'] = "";
			if(isset($_SESSION['STATUS'])){
				$data['status'] = $_SESSION['STATUS'];
			}

            $id_user = $_SESSION['ID_USER'];
            $data['produk'] = $this->M_produk->getProdukCanvass($id_user);
            $this->load->view('canvass', $data);
			$this->session->unset_userdata('STATUS');
        }else{
				$this->load->view('login');
		}
	}

	function deleteProduk($id_produk){
		$query = $this->M_produk->deleteProduk($id_produk);
		if($query == true){
			$_SESSION['STATUS'] = "Data Berhasil Dihapus";
         	redirect('/Canvass', 'refresh');
        }else{
			$_SESSION['STATUS'] = "Data Gagal Dihapus";				
           	redirect('/Canvass', 'refresh');
        }
	}

	function updateProduk($id){
		$date= date("Y/m/d");
		$query = $this->M_produk->updateStatusJual($id, $date);
		if($query == true){
         	redirect('/Home', 'refresh');
        }else{
			$_SESSION['STATUS'] = "Gagal Menjual";				
           	redirect('/Canvass', 'refresh');
        }
	}

}

?>
