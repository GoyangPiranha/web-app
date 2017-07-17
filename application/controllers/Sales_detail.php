<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales_detail extends CI_Controller {

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
        $this->load->model('M_transaksi','', TRUE);
    }
    public function index($id_transaksi)
    {
      if (isset($_SESSION['ID_USER'])){
        $id_user = $_SESSION['ID_USER'];
        $data['transaksi'] = $this->M_transaksi->getSalesDetail($id_transaksi);
        $this->load->view('sales_detail', $data);
      }
      else{
        $this->load->view('login');
      }
    }

    function updateTransaksi($id_transaksi){
        $foto = $_FILES["fotobuktiname"]["name"];
        $uniqid = uniqid();
			  $fotobukti = $uniqid.$id_transaksi.$foto;
        $tmp_name = $_FILES['fotobuktiname']['tmp_name'];
			  $fotoerror = $_FILES['fotobuktiname']['error'];
        $id_status_transaksi = 2;

        if($fotoerror==1){
            $this->index($id_transaksi);
        }
        $query = $this->M_transaksi->updateTransaksi($id_transaksi, $fotobukti, $id_status_transaksi);
        if($query == false){
            $this->index($id_transaksi);
        }else{
            $location = './assets/images/Bukti/';
				    move_uploaded_file($tmp_name, $location.$fotobukti);
        }
        
    }



}
