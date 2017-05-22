<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin_kategori_produk extends CI_Controller {
   
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
    $query = $this->M_admin->daftar_kategori_produk();
    $data = array(
          "page" => "sidemenu.php",
          "query" => $query,
          "content" => "Kategori Produk/kategori_produk_view.php"
    );
    $this->load->view('Admin/admin_home', $data);
  } 
  
  public function tambah() {
    $data = array(
          "page" => "sidemenu.php",
          "content" => "Kategori Produk/kategori_produk_tambah.php"
    );
    $this->load->view('Admin/admin_home', $data); 
  }

  public function prosesTambah() {
      $this->load->model('m_users');
      $this->load->model('m_admin');
      if ($_POST['kategori_produk'] != "") {
        $kategori_produk = $_POST['kategori_produk'];
        $p = $this->M_admin->kategori_produk_tambah($kategori_produk);
        redirect('Admin_kategori_produk/index');
      } else{
        $data = array(
          "warning" => "Kategori produk harus anda isi!",
          "page" => "sidemenu.php",
          "content" => "Kategori Produk/kategori_produk_tambah.php"
        );
        $this->load->view("Admin/admin_home", $data);
      } 
  }

  public function edit($id) {
    $data = array(
          "page" => "sidemenu.php",
          "detail" => $this->M_admin->kategori_produk_detail($id),
          "content" => "Kategori Produk/kategori_produk_edit.php"
    );
    $this->load->view('Admin/admin_home', $data); 
  }
    
  public function prosesEdit() {
      $this->load->model('m_users');
      $this->load->model('m_admin');
      if ($_POST['kategori_produk'] != "" && $_POST['id'] != "") {
        $id = $_POST['id'];
        $kategori_produk = $_POST['kategori_produk'];
        $p = $this->M_admin->kategori_produk_edit($id, $kategori_produk);
        redirect('Admin_kategori_produk/index');
      } else{
        $data = array(
          "warning" => "kategori produk harus anda isi!",
          "page" => "sidemenu.php",
          "content" => "Kategori Produk/kategori_produk_tambah.php"
        );
        $this->load->view("Admin/admin_home", $data);
      } 
  } 
  
  // fungsi hapus data
  public function delete($id) {
    $this->M_admin->delete_kategori_produk($id);
    redirect('Admin_kategori_produk');
  }
}
?>