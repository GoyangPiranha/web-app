<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin_produk extends CI_Controller {
   
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
    $query = $this->M_admin->daftar_produk();
    $data = array(
          "page" => "sidemenu.php",
          "query" => $query,
          "content" => "Produk/produk_view.php"
    );
    $this->load->view('Admin/admin_home', $data);
  } 
  
  public function tambah() {
    $username = $_SESSION['USERNAME'];
    $query1 = $this->M_admin->getIdUser($username);
    $query2 = $this->M_admin->getJenis();
    $query3 = $this->M_admin->getKategori();
    $data = array(
          "page" => "sidemenu.php",
          "query1" => $query1,
          "query2" => $query2,
          "query3" => $query3,
          "content" => "Produk/produk_tambah.php"
    );
    $this->load->view('Admin/admin_home', $data); 
  }

  public function prosesTambah() {
      $this->load->model('m_users');
      $this->load->model('m_admin');
      $location = './assets/images/';
      if ($_POST['nama_desain'] != "" && $_POST['id_user'] != "" && $_POST['harga'] != "") {
        $nama_produk = $_POST['nama_desain'];
        $harga_produk = $_POST['harga'];
        if (isset($_POST['deskripsi_desain'])) {
          $deskripsi = $_POST['deskripsi_desain'];
        } else{
          $deskripsi = "";  
        }
        if (isset($_FILES['gambar_depan']['name'])) {
          $foto_produk_depan = $location.$_FILES['gambar_depan']['name'];
        } else{
          $foto_produk_depan = $location;
        }
        if (isset($_FILES['gambar_belakang']['name'])) {
          $foto_produk_belakang = $location.$_FILES['gambar_belakang']['name'];
        } else{
          $foto_produk_belakang = $location;
        }
        if (isset($_POST['kategori'])) {
          $id_kategori = $_POST['kategori'];
        } else{
          $id_kategori = 0;
        } 
        if (isset($_POST['jenis_pakaian'])) {
          $id_jenis = $_POST['jenis_pakaian'];
        } else{
          $id_jenis = 0;
        }
        if (isset($_POST['tags'])) {
          $tag_produk = $_POST['tags'];
        } else{
          $tag_produk = "";
        }
        if (isset($_POST['diskon'])) {
          $diskon_produk = $_POST['diskon'];
        }
        $id_user = $_POST['id_user'];
        if (is_numeric($harga_produk)) {
          $jenis_user = 1;
          $tmp_name_depan = $_FILES['gambar_depan']['tmp_name'];
          $tmp_name_belakang = $_FILES['gambar_belakang']['tmp_name'];
          move_uploaded_file($tmp_name_depan, $foto_produk_depan);
          move_uploaded_file($tmp_name_belakang, $foto_produk_belakang);
          $p = $this->M_admin->produk_tambah($nama_produk, $deskripsi, $foto_produk_depan, $foto_produk_belakang, $id_kategori, $id_jenis, $tag_produk, $harga_produk, $diskon_produk, $id_user);
          redirect('Admin_produk/index');
        } else{
          $username = $_SESSION['USERNAME'];
          $query1 = $this->M_admin->getIdUser($username);
          $query2 = $this->M_admin->getJenis();
          $query3 = $this->M_admin->getKategori();
          $data = array(
            "warning" => "Harga & diskon harus numeric!",
            "page" => "sidemenu.php",
            "query1" => $query1,
            "query2" => $query2,
            "query3" => $query3,
            "content" => "Produk/produk_tambah.php"
          );
          $this->load->view('Admin/admin_home', $data); 
        }
      } else{
          $username = $_SESSION['USERNAME'];
          $query1 = $this->M_admin->getIdUser($username);
          $query2 = $this->M_admin->getJenis();
          $query3 = $this->M_admin->getKategori();
          $data = array(
            "warning" => "Isi nama & harga desain!",
            "page" => "sidemenu.php",
            "query1" => $query1,
            "query2" => $query2,
            "query3" => $query3,
            "content" => "Produk/produk_tambah.php"
          );
        $this->load->view('Admin/admin_home', $data); 
      } 
  }

  public function edit($id) {
    $username = $_SESSION['USERNAME'];
    $query1 = $this->M_admin->getIdUser($username);
    $query2 = $this->M_admin->getJenis();
    $query3 = $this->M_admin->getKategori();
    $data = array(
          "page" => "sidemenu.php",
          "query1" => $query1,
          "query2" => $query2,
          "query3" => $query3,
          "detail" => $this->M_admin->produk_detail($id),
          "content" => "Produk/produk_edit.php"
    );
    $data['provinsi']=$this->M_users->getProvinsiQuery();
    $this->load->view('Admin/admin_home', $data); 
  }
    
  public function prosesEdit() {
        $id_produk = $_POST['id_produk'];
        $nama_produk = $_POST['nama_desain'];
        $harga_produk = $_POST['harga'];
        if (isset($_POST['deskripsi_desain'])) {
          $deskripsi = $_POST['deskripsi_desain'];
        } else{
          $deskripsi = "";  
        }
        if (isset($_FILES['gambar_depan']['name'])) {
          $foto_produk_depan = $location.$_FILES['gambar_depan']['name'];
        } else{
          $foto_produk_depan = $location;
        }
        if (isset($_FILES['gambar_belakang']['name'])) {
          $foto_produk_belakang = $location.$_FILES['gambar_belakang']['name'];
        } else{
          $foto_produk_belakang = $location;
        }
        if (isset($_POST['kategori'])) {
          $id_kategori = $_POST['kategori'];
        } else{
          $id_kategori = 0;
        } 
        if (isset($_POST['jenis_pakaian'])) {
          $id_jenis = $_POST['jenis_pakaian'];
        } else{
          $id_jenis = 0;
        }
        if (isset($_POST['tags'])) {
          $tag_produk = $_POST['tags'];
        } else{
          $tag_produk = "";
        }
        if (isset($_POST['diskon'])) {
          $diskon_produk = $_POST['diskon'];
        }
        $id_user = $_POST['id_user'];
          $jenis_user = 1;
          $tmp_name_depan = $_FILES['gambar_depan']['tmp_name'];
          $tmp_name_belakang = $_FILES['gambar_belakang']['tmp_name'];
          move_uploaded_file($tmp_name_depan, $foto_produk_depan);
          move_uploaded_file($tmp_name_belakang, $foto_produk_belakang);
          $p = $this->M_admin->produk_edit($id_produk, $nama_produk, $deskripsi, $foto_produk_depan, $foto_produk_belakang, $id_kategori, $id_jenis, $tag_produk, $harga_produk, $diskon_produk, $id_user);
          redirect('Admin_produk/index');
  } 
  
  // fungsi hapus data
  public function delete($id) {
    $this->M_admin->delete_produk($id);
    redirect('Admin_produk');
  }

}
?>