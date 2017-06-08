<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert_rekening extends CI_Controller {

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
		$this->load->library('rajaongkir');
        $this->load->helper('url');
        $this->load->model('M_rekening','',TRUE);
        $this->load->model('M_transaksi','',TRUE);
        $this->load->model('M_tujuan','',TRUE);
        
		
    }

    public function index()
    {
       if(isset($_SESSION['ID_USER'])){
            // if(isset($_SESSION['STATUS'])){
			// 	$data['status'] = $_SESSION['STATUS'];
			// }
            // $id_user = $_SESSION['ID_USER'];
            // $data['users'] = $this->M_users->getUserById($id_user);
            // $data['rekening'] = $this->M_rekening->getRekeningByUser($id_user);
            // // $data['status'] = "";
            // $this->load->view('profile_edit', $data);
            // $this->session->unset_userdata('STATUS');
			$this->load->view('insert_rekening');
        }
        else{
            $this->load->view('login');
        }
    }

    public function update(){
		$rekening_user = $_POST['no_rek'];
		$nama_pemilik = $_POST['nama_pemilik'];
		$bank = $_POST['nama_bank'];
        $id_bank = $_SESSION['ID_BANK'];
        
        $tujuan = $_SESSION['tujuan'];

        $id_tujuan = $tujuan['id_tujuan'];
        $nama_tujuan = $tujuan['nama_tujuan'];
        $kota_tujuan = $tujuan['kota_tujuan'];
        $handphone_tujuan = $tujuan['handphone_tujuan'];
        $kodepos = $tujuan['kodepos'];
        $email = $tujuan['email'];
        $alamat = $tujuan['alamat'];

        $transaksi = $_SESSION['transaksi'];
        
        $id_transaksi = $transaksi['id_transaksi'];
        $id_produk = $transaksi['id_produk'];
        $id_konveksi = $transaksi['id_konveksi'];
        $ukuran = $transaksi['ukuran'];
        $status_transaksi = $transaksi['status_transaksi'];
        $tanggal = $transaksi['tanggal'];
        $jenis_pengiriman = $transaksi['jenis_pengiriman'];
        $biaya_kirim = $transaksi['biaya_kirim'];
        $harga_total = $transaksi['harga_total'];
        
        $id_user = $_SESSION['ID_USER'];

        
        $query = $this->M_tujuan->insert($id_tujuan, $nama_tujuan, $kota_tujuan, $handphone_tujuan, $kodepos, $email, $alamat);
        if($query == false){
			redirect('Insert_rekening/index','refresh');
		}else{
			$query2 = $this->M_transaksi->insert($id_transaksi, $id_user, $id_produk, $id_konveksi, $ukuran, $status_transaksi, 
                                                     $id_tujuan, $tanggal, $jenis_pengiriman, $biaya_kirim, $harga_total, 
                                                     $id_bank, $nama_pemilik, $rekening_user, $bank);
            if($query2==false){
    			redirect('Insert_rekening/index','refresh');
            }else{
                redirect('Purchasing_history','refresh');
            }
        }	
        
        
        
        
	}
    
}