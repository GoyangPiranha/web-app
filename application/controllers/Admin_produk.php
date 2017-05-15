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
        $nama_produk = $_POST['nama_desain'];
        $deskripsi = $_POST['deskripsi_desain'];
        $foto_produk_depan = $location.$_FILES['gambar_depan']['name'];
        $foto_produk_belakang = $location.$_FILES['gambar_belakang']['name'];
        $id_kategori = $_POST['kategori'];
        $id_jenis = $_POST['jenis_pakaian'];
        $tag_produk = $_POST['tags'];
        $harga_produk = $_POST['harga'];
        $diskon_produk = $_POST['diskon'];
        $id_user = $_POST['id_user'];
        if (is_numeric($harga_produk) AND is_numeric($diskon_produk)) {
          $jenis_user = 1;
          $p = $this->M_admin->produk_tambah($nama_produk, $deskripsi, $foto_produk_depan, $foto_produk_belakang, $id_kategori, $id_jenis, $tag_produk, $harga_produk, $diskon_produk, $id_user);
          redirect('Admin_produk/index');
        } else{
          $tmp_name_depan = $_FILES['gambar_depan']['tmp_name'];
          $tmp_name_belakang = $_FILES['gambar_belakang']['tmp_name'];
          move_uploaded_file($tmp_name_depan, $foto_produk_depan);
          move_uploaded_file($tmp_name_belakang, $foto_produk_belakang);
          $data ['warning']  = "harga & diskon produk harus numeric!";
          $data = array(
            "page" => "sidemenu.php",
            "content" => "Produk/produk_view.php"
          );
          $this->load->view('Admin/admin_home', $data); 
        }
         
  }

  public function edit($id) {
    $data = array(
          "page" => "sidemenu.php",
          "detail" => $this->M_admin->user_detail($id),
          "content" => "User/user_edit.php"
    );
    $data['provinsi']=$this->M_users->getProvinsiQuery();
    $this->load->view('Admin/admin_home', $data); 
  }
    
  public function prosesEdit() {
        $id_user = $_POST['id_user'];
        $this->load->model('m_users');
        $this->load->model('m_admin');
        $nama_user = $_POST['fullname'];
        $username_user = $_POST['username'];
        $jenis_kelamin_user = $_POST['genre'];
        $deskripsi_user = $_POST['deskripsi_user'];
        $name = $_FILES["userfile"]["name"];
        $tmp_name = $_FILES['userfile']['tmp_name'];
        $tanggal_lahir_user = $_POST['dateofbirth'];
        $password_user = $_POST['password'];
        $kota_user = $_POST['city'];
        $alamat_user = $_POST['address'];
        $email_user = $_POST['email'];
        $contact_user = $_POST['handphone'];
        $rekening_user = $_POST['rekening_user'];
          $location = './assets/images/';
          $foto_profile_user = $location.$name;
          move_uploaded_file($tmp_name, $location.$name);
          $jenis_user = 1;
          $p = $this->M_admin->user_edit($id_user, $username_user, $password_user, $nama_user, $jenis_kelamin_user, $tanggal_lahir_user, $kota_user, $alamat_user, $foto_profile_user, $email_user, $contact_user, $deskripsi_user, $rekening_user, $jenis_user);
          redirect('Admin_user/index');
  } 
  
  // fungsi hapus data
  public function delete($id) {
    $this->M_admin->delete_user($id);
    redirect('Admin_user');
  }

}
?>