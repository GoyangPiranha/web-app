<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class throw_it extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_users','',TRUE);
    }

    public function index()
    {
        if (isset($_SESSION['USERNAME'])) { 
            $data['username'] = $_SESSION['USERNAME'];
            $data['fullname'] = $_SESSION['FULLNAME'];
            $this->load->view('throw_it', $data);
        } else {
            $this->load->view('login');
        }
    }

    public function simpan_desain(){
        if ($_POST['submit'] == "Simpan Desain") {
            // field yang diinputkan
            $location = './assets/images/';
            // kondisi gambar depan
            if (isset($_FILES["gambar_depan"]["name"])) {
                $nama_gambar_depan = $_FILES["gambar_depan"]["name"];
                $tmp_gambar_depan = $_FILES['gambar_depan']['tmp_name'];
                $gambar_depan = $location.$nama_gambar_depan;
                move_uploaded_file($tmp_gambar_depan, $gambar_depan);
            } else{
                $gambar_depan = $location;
            }
            // kondisi gambar belakang
            if (isset($_FILES["gambar_belakang"]["name"])) {
                $nama_gambar_belakang = $_FILES["gambar_belakang"]["name"];
                $tmp_gambar_belakang = $_FILES['gambar_belakang']['tmp_name'];
                $gambar_belakang = $location.$nama_gambar_belakang;
                move_uploaded_file($tmp_gambar_belakang, $gambar_belakang);
            } else{
                $gambar_belakang =  $location;
            }
            // kondisi nama desain
            if (isset($_POST['nama_desain'])) {
                $nama_desain = $_POST['nama_desain'];
            } else{
                $nama_desain = "";
            }
            // kondisi deskripsi desain
            if (isset($_POST['deskripsi_desain'])) {
                $deskripsi_desain = $_POST['deskripsi_desain'];
            } else{
                $deskripsi_desain = "";
            }
            // kondisi kategori
            if (isset($_POST['kategori'])) {
                $kategori = $_POST['kategori'];
            } else{
                $kategori = "";
            }
            // kondisi jenis pakaian
            if (isset($_POST['jenis_pakaian'])) {
                $jenis_pakaian = $_POST['jenis_pakaian'];
            } else{
                $jenis_pakaian = "";
            }
            // kondisi tags
            if (isset($_POST['tags'])) {
                $tags = $_POST['tags'];
            } else{
                $tags = "";
            }
            // kondisi harga
            if (isset($_POST['harga'])) {
                $harga = $_POST['harga'];
            } else{
                $harga = "";
            }
            // kondisi diskon
            if (isset($_POST['diskon'])) {
                $diskon = $_POST['diskon'];
            } else{
                $diskon = 0;    
            }
            // kondisi kategori
            if ($kategori == "pakaian pria") {
                $kategori = 1; // untuk pakaian pria
            } elseif($kategori == "pakaian wanita"){
                $kategori = 2; // untuk pakaian wanita
            }
            // kondisi jenis pakaian
            if ($jenis_pakaian == "baju") {
               $jenis_pakaian = 1; // untuk jenis baju
            } elseif ($jenis_pakaian == "jaket") {
               $jenis_pakaian = 2; // untuk jenis jaket
            } elseif ($jenis_pakaian == "topi") {
               $jenis_pakaian = 3; // untuk jenis topi
            } elseif ($jenis_pakaian == "celana") {
                $jenis_pakaian = 4; // untuk jenis celana
            }
            $this->load->model('m_users');
            $username_user = $_POST['username'];
            $user = $this->M_users->getIdUser($username_user);
                foreach ($user as $key) {
                    $id_user = $key['id_user'];
                }
                $acc = 0;
            $this->M_users->simpan_desain($gambar_depan, $gambar_belakang, $nama_desain, $deskripsi_desain, $kategori, $jenis_pakaian, $tags, $harga, $diskon, $id_user, $acc);
            redirect('throw_it/index','refresh');
        } elseif ($_POST['submit'] == "Jual") {
                        // field yang diinputkan
            $location = './assets/images/';
            // kondisi gambar depan
            if (isset($_FILES["gambar_depan"]["name"])) {
                $nama_gambar_depan = $_FILES["gambar_depan"]["name"];
                $tmp_gambar_depan = $_FILES['gambar_depan']['tmp_name'];
                $gambar_depan = $location.$nama_gambar_depan;
                move_uploaded_file($tmp_gambar_depan, $gambar_depan);
            } else{
                $gambar_depan = $location;
            }
            // kondisi gambar belakang
            if (isset($_FILES["gambar_belakang"]["name"])) {
                $nama_gambar_belakang = $_FILES["gambar_belakang"]["name"];
                $tmp_gambar_belakang = $_FILES['gambar_belakang']['tmp_name'];
                $gambar_belakang = $location.$nama_gambar_belakang;
                move_uploaded_file($tmp_gambar_belakang, $gambar_belakang);
            } else{
                $gambar_belakang =  $location;
            }
            // kondisi nama desain
            if (isset($_POST['nama_desain'])) {
                $nama_desain = $_POST['nama_desain'];
            } else{
                $nama_desain = "";
            }
            // kondisi deskripsi desain
            if (isset($_POST['deskripsi_desain'])) {
                $deskripsi_desain = $_POST['deskripsi_desain'];
            } else{
                $deskripsi_desain = "";
            }
            // kondisi kategori
            if (isset($_POST['kategori'])) {
                $kategori = $_POST['kategori'];
            } else{
                $kategori = "";
            }
            // kondisi jenis pakaian
            if (isset($_POST['jenis_pakaian'])) {
                $jenis_pakaian = $_POST['jenis_pakaian'];
            } else{
                $jenis_pakaian = "";
            }
            // kondisi tags
            if (isset($_POST['tags'])) {
                $tags = $_POST['tags'];
            } else{
                $tags = "";
            }
            // kondisi harga
            if (isset($_POST['harga'])) {
                $harga = $_POST['harga'];
            } else{
                $harga = "";
            }
            // kondisi diskon
            if (isset($_POST['diskon'])) {
                $diskon = $_POST['diskon'];
            } else{
                $diskon = 0;    
            }
            // kondisi kategori
            if ($kategori == "pakaian pria") {
                $kategori = 1; // untuk pakaian pria
            } elseif($kategori == "pakaian wanita"){
                $kategori = 2; // untuk pakaian wanita
            }
            // kondisi jenis pakaian
            if ($jenis_pakaian == "baju") {
               $jenis_pakaian = 1; // untuk jenis baju
            } elseif ($jenis_pakaian == "jaket") {
               $jenis_pakaian = 2; // untuk jenis jaket
            } elseif ($jenis_pakaian == "topi") {
               $jenis_pakaian = 3; // untuk jenis topi
            } elseif ($jenis_pakaian == "celana") {
                $jenis_pakaian = 4; // untuk jenis celana
            }
            $this->load->model('m_users');
            $username_user = $_POST['username'];
            $user = $this->M_users->getIdUser($username_user);
                foreach ($user as $key) {
                    $id_user = $key['id_user'];
                }
                $acc = 1;
            $this->M_users->simpan_desain($gambar_depan, $gambar_belakang, $nama_desain, $deskripsi_desain, $kategori, $jenis_pakaian, $tags, $harga, $diskon, $id_user, $acc);
            redirect('throw_it/index','refresh');
        }
    }
}