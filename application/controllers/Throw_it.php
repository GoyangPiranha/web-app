<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Throw_it extends CI_Controller {
		function __construct()
			 {
			   parent::__construct();
			   $this->load->model('M_produk','',TRUE);
			 }
		 
		function index() {
			if (isset($_SESSION['ID_USER'])) {
				$this->load->view('throw_it');
			} else {
				$this->load->view('login');
			}
		}

        function insert(){
            $id_user = $_SESSION['ID_USER'];
            $nama_produk = $_POST['namabarang'];
            $deskripsi = $_POST['description'];
            
            $foto_depan = $_FILES['desaindepan']['name'];
            $foto_belakang = $_FILES['desainbelakang']['name'];
            $foto_depan_tmp = $_FILES['desaindepan']['tmp_name'];
            $foto_belakang_tmp = $_FILES['desainbelakang']['tmp_name'];
			$foto_belakang_eror = $_FILES['desainbelakang']['error'];
			$foto_depan_eror = $_FILES['desaindepan']['error'];

            $uniqid = uniqid();
            $foto_produk_depan = $uniqid.$id_user.$foto_depan;
            $foto_produk_belakang = $uniqid.$id_user.$foto_belakang;

            // $id_jenis_produk = $_POST[''];
            // $id_kategori_produk = $_POST[''];
			$id_jenis_produk = $this->input->post('jenisproduk');
			$id_kategori_produk = $_POST['kategoriproduk'];
            $tag_produk = $_POST['tags'];
            $harga_produk = $_POST['harga'];
			 $location = './assets/images/Product/';
        	move_uploaded_file($foto_depan_tmp, $location.$foto_produk_depan);
        	move_uploaded_file($foto_belakang_tmp, $location.$foto_produk_belakang);
            if($_POST['simpan']){
                $id_status_produk = 0;
                $p = $this->M_produk->insert($nama_produk, $deskripsi, $foto_produk_depan, $foto_produk_belakang, $id_jenis_produk, $id_kategori_produk, $tag_produk, $harga_produk, $id_user, $id_status_produk);
				if ($p == TRUE) {
					// redirect('Login/index', 'refresh');
					echo("tru");
				}else{
					// redirect('Daftar/index','refresh');
						echo("false");
				}

            }elseif($_POST['jual']){
                $id_status_produk = 1;
                $p = $this->M_produk->insert($nama_produk, $deskripsi, $foto_produk_depan, $foto_produk_belakang, $id_jenis_produk, $id_kategori_produk, $tag_produk, $harga_produk, $id_user, $id_status_produk);
				if ($p == TRUE) {
					// redirect('Login/index', 'refresh');
				}else{
					// redirect('Daftar/index','refresh');
					echo("tru");
				}
            }



        }
		
	}


?>
