<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin_jenis_produk extends CI_Controller {
   
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
    $query = $this->M_admin->daftar_jenis_produk();
    $data = array(
          "page" => "sidemenu.php",
          "query" => $query,
          "content" => "Jenis Produk/jenis_produk_view.php"
    );
    $this->load->view('Admin/admin_home', $data);
  } 
  
  public function tambah() {
    $data = array(
          "page" => "sidemenu.php",
          "content" => "Jenis Produk/jenis_produk_tambah.php"
    );
    $this->load->view('Admin/admin_home', $data); 
  }

  public function prosesTambah() {
      $this->load->model('m_users');
      $this->load->model('m_admin');
      if ($_POST['jenis_produk'] != "") {
        $ijenis_produk = $_POST['jenis_produk'];
        $p = $this->M_admin->jenis_produk_tambah($jenis_produk);
        redirect('Admin_jenis_produk/index');
      } else{
        $data = array(
          "warning" => "Jenis produk harus anda isi!",
          "page" => "sidemenu.php",
          "content" => "Jenis Produk/jenis_produk_tambah.php"
        );
        $this->load->view("Admin/admin_home", $data);
      } 
  }

  public function edit($id) {
    $data = array(
          "page" => "sidemenu.php",
          "detail" => $this->M_admin->jenis_produk_detail($id),
          "content" => "Jenis Produk/jenis_produk_edit.php"
    );
    $this->load->view('Admin/admin_home', $data); 
  }
    
  public function prosesEdit() {
      $this->load->model('m_users');
      $this->load->model('m_admin');
      if ($_POST['jenis_produk'] != "" && $_POST['id'] != "") {
        $id = $_POST['id'];
        $jenis_produk = $_POST['jenis_produk'];
        $p = $this->M_admin->jenis_produk_edit($id, $jenis_produk);
        redirect('Admin_jenis_produk/index');
      } else{
        $data = array(
          "warning" => "Jenis produk harus anda isi!",
          "page" => "sidemenu.php",
          "content" => "Jenis Produk/jenis_produk_tambah.php"
        );
        $this->load->view("Admin/admin_home", $data);
      } 

  } 
  
  // fungsi hapus data
  public function delete($id) {
    $this->M_admin->delete_jenis_produk($id);
    redirect('Admin_jenis_produk');
  }
}
?>