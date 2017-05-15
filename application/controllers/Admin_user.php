<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin_user extends CI_Controller {
   
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
    $query = $this->M_admin->daftar_user();
    $data = array(
          "page" => "sidemenu.php",
          "user" => $query,
          "content" => "User/user_view.php"
    );
    $this->load->view('Admin/admin_home', $data);
  } 
  
  public function tambah() {
    $data = array(
          "page" => "sidemenu.php",
          "content" => "User/user_tambah.php"
    );
    $data['provinsi']=$this->M_users->getProvinsiQuery();
    $this->load->view('Admin/admin_home', $data); 
  }

  public function getKota(){
      $id_provinsi = $this->input->post('id_provinsi');
      $kotas = $this->M_users->getKotaQuery($id_provinsi);
      if (count($kotas)>0) {
        $select_box = '';
        $select_box .= '<option value="">Pilih Kota</option>';
        foreach ($kotas as $kota) {
          $select_box .= '<option value="'.$kota->id_kota.'">'.$kota->nama_kota.'</option>';
        }
        echo json_encode($select_box);
      }
  }

  public function prosesTambah() {
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
        $repassword_user = $_POST['confirmpassword'];
        $kota_user = $_POST['city'];
        $alamat_user = $_POST['address'];
        $email_user = $_POST['email'];
        $contact_user = $_POST['handphone'];
        $rekening_user = $_POST['rekening_user'];
        $user = $this->M_users->cekUser($username_user);
        if ($user == true) {
          $data ['warning']  = "Username sudah ada, masukkan username lain";
          $data = array(
            "page" => "sidemenu.php",
            "content" => "User/user_tambah.php"
          );
          $data['provinsi']=$this->M_users->getProvinsiQuery();
          $this->load->view('Admin/admin_home', $data); 
        }elseif ($password_user != $repassword_user ) {
          $data ['warning']  = "Password tidak sesuai";
          $data = array(
            "page" => "sidemenu.php",
            "content" => "User/user_tambah.php"
          );
          $data['provinsi']=$this->M_users->getProvinsiQuery();
          $this->load->view('Admin/admin_home', $data); 
        }else{
          $location = './assets/images/';
          $foto_profile_user = $location.$name;
          move_uploaded_file($tmp_name, $location.$name);
          $jenis_user = 1;
          $p = $this->M_admin->user_tambah($username_user, $password_user, $nama_user, $jenis_kelamin_user, $tanggal_lahir_user, $kota_user, $alamat_user, $foto_profile_user, $email_user, $contact_user, $deskripsi_user, $rekening_user, $jenis_user);
          redirect('Admin_user/index');
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