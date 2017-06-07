<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konveksi_list extends CI_Controller {

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
        $this->load->model('M_jenis_konveksi','',TRUE);
        $this->load->model('M_produk','',TRUE);
        
    }
	public function index($kategori)
	{
        if(isset($_SESSION['ID_USER'])){
            //$_SESSION['STATUS'] = "";
            $this->load->view('konveksi_list');
        }else{
			$this->load->view('login');
		}
	}


    function konveksi($id_produk, $id_kategori){
        $data['konveksi'] = $this->M_jenis_konveksi->getJenisKonveksi($id_kategori);
        $data['id_produk'] = $id_produk;
        
        $this->load->view('konveksi_list', $data);
    }

}