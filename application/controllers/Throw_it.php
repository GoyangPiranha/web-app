<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Throw_it extends CI_Controller {
		function __construct()
			 {
			   parent::__construct();
			   $this->load->model('M_produk','',TRUE);
			 }
		 
		function index() {
			if (isset($_SESSION['ID_USER'])) {
				if(isset($_SESSION['STATUS'])){
				$data['status'] = $_SESSION['STATUS'];
				}else{
					$data['status'] = "";
				}
				$this->load->view('throw_it', $data);
				$this->session->unset_userdata('STATUS');

			} else {
				$this->load->view('login');
			}
		}

        function insert(){
            $id_user = $_SESSION['ID_USER'];
            $nama_produk = $_POST['namabarang'];
            $deskripsi = $_POST['description'];
            
            $foto_depan = $_FILES['desaindepanname']['name'];
            $foto_belakang = $_FILES['desainbelakangname']['name'];
            $foto_depan_tmp = $_FILES['desaindepanname']['tmp_name'];
            $foto_belakang_tmp = $_FILES['desainbelakangname']['tmp_name'];
			$foto_belakang_eror = $_FILES['desainbelakangname']['error'];
			$foto_depan_eror = $_FILES['desaindepanname']['error'];

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

            if($_POST['simpan']){
                $id_status_produk = 1;
                $p = $this->M_produk->insertSave($nama_produk, $deskripsi, $foto_produk_depan, $foto_produk_belakang, $id_jenis_produk, $id_kategori_produk, $tag_produk, $harga_produk, $id_user, $id_status_produk);
				if ($p == TRUE) {
					move_uploaded_file($foto_depan_tmp, $location.$foto_produk_depan);
        			move_uploaded_file($foto_belakang_tmp, $location.$foto_produk_belakang);
					redirect('Canvass/index', 'refresh');
				}else{
					$_SESSION['STATUS'] = "Data Gagal Disimpan";				
           			redirect('/Throw_it', 'refresh');
				}

            }elseif($_POST['jual']){
				$data = $this->M_produk->hitungProduk($id_user);
				if(){

				}
				$date= date("Y/m/d");
                $id_status_produk = 3;
                $p = $this->M_produk->insert($nama_produk, $deskripsi, $foto_produk_depan, $foto_produk_belakang, $id_jenis_produk, $id_kategori_produk, $tag_produk, $harga_produk, $id_user, $id_status_produk, $date);
				if ($p == TRUE) {
					move_uploaded_file($foto_depan_tmp, $location.$foto_produk_depan);
        			move_uploaded_file($foto_belakang_tmp, $location.$foto_produk_belakang);
					redirect('Profile/index', 'refresh');
				}else{
					$_SESSION['STATUS'] = "Data Gagal Disimpan";									
					redirect('Throw_it/index','refresh');
				}
            }
        }

		function update($id_produk){
			$data['produk'] = $this->M_users->getProdukId($id_produk);
			$this->load->view('throw_it', $data);
        	foreach($user_data as $row){
				$passen = $row->password_user;
				$username = $row->username_user;
				$id_user = $row->id_user;
				$foto_user = $row->foto_profile_user;
				$foto_sampul = $row->foto_background_user;
        	}
			$id_user = $_SESSION['ID_USER'];
            $nama_produk = $_POST['namabarang'];
            $deskripsi = $_POST['description'];
            
            $foto_depan = $_FILES['desaindepanname']['name'];
            $foto_belakang = $_FILES['desainbelakangname']['name'];
            $foto_depan_tmp = $_FILES['desaindepanname']['tmp_name'];
            $foto_belakang_tmp = $_FILES['desainbelakangname']['tmp_name'];
			$foto_belakang_eror = $_FILES['desainbelakangname']['error'];
			$foto_depan_eror = $_FILES['desaindepanname']['error'];

            $uniqid = uniqid();
            $foto_produk_depan = $uniqid.$id_user.$foto_depan;
            $foto_produk_belakang = $uniqid.$id_user.$foto_belakang;

			$id_jenis_produk = $this->input->post('jenisproduk');
			$id_kategori_produk = $_POST['kategoriproduk'];
            $tag_produk = $_POST['tags'];
            $harga_produk = $_POST['harga'];
			
			$location = './assets/images/Product/';
		}

		function update($id_produk){
			$data['produk'] = $this->M_users->getProdukId($id_produk);
			$this->load->view('throw_it', $data);
		}

		
	}


?>
