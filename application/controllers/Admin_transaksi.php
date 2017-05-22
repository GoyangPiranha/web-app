<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin_transaksi extends CI_Controller {
   
  public function __construct() {
      parent::__construct();
      $this->load->model('M_admin');
      $this->load->model('M_users');
      $this->load->library(array('pagination','form_validation','upload'));
      if($this->session->userdata('admin') != "true"){
        redirect(base_url("login"));
      }
  }
   
  public function index() {
    $query = $this->M_admin->daftar_transaksi();
    $data = array(
          "page" => "sidemenu.php",
          "query" => $query,
          "content" => "Transaksi/transaksi_view.php"
    );
    $this->load->view('Admin/admin_home', $data);
  } 
  
  public function tambah() {
    $data = array(
          "page" => "sidemenu.php",
          "content" => "Transaksi/transaksi_tambah.php"
    );
    $data['user']=$this->M_admin->getUser();
    $data['produk']=$this->M_admin->getProduk();
    $this->load->view('Admin/admin_home', $data); 
  }

  public function prosesTambah() {
      
  }

  public function edit($id) {
  }
    
  public function prosesEdit() {
  
  } 
  
  // fungsi hapus data
  public function delete($id) {
    $this->M_admin->delete_transaksi($id);
    redirect('admin_transaksi');
  }
}
?>