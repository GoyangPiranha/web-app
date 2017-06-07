<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment_method extends CI_Controller {

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

    public function index($id_transaksi)
    {
        $this->load->view('payment_method');
    }

    public function process($id_produk, $id_konveksi){
		$nama_tujuan      = $this->input->post('fullname');
		$kodepos_tujuan   = $this->input->post('kodepos');
		$handphone_tujuan = $this->input->post('nomorhp');
		$kota_tujuan	  = $this->input->post('select_kota');
		$email_tujuan     = $this->input->post('email');
		$alamat_tujuan    = $this->input->post('alamat');
		$ukuran = $this->input->post('select_ukuran');
		$jenis_pengiriman = $_POST['logistik'];
		$biaya_konveksi = $_POST['biayakonveksi'];
		$biaya_kirim = $_POST['biayakirim'];
		$harga_barang = $_POST['hargabarang'];
		$harga_total = $_POST['hargatotal'];
		$uniq = uniqid();
		$tanggal  = date('Y-m-d');
		$status_transaksi = 1;
		$id_user = $_SESSION['ID_USER'];

		// $tujuan = array(
		// 	'id_tujuan' => $uniq,
		// 	'nama' => $nama_tujuan,
		// 	'kota' => $kota_tujuan,
		// 	'handphone' => $handphone_tujuan,
		// 	'kode_pos' => $kodepos_tujuan,
		// 	'email' => $email_tujuan,
		// 	'alamat' => $alamat_tujuan 
		// );

		// $transaksi = array(
		// 	'id_user' => $id_user,
		// 	'id_produk' => $id_produk,
		// 	'id_konveksi' => $id_konveksi,
		// 	'ukuran' => $ukuran,
		// 	'status_transaksi' => $status_transaksi,
		// 	'id_tujuan' => $uniq,
		// 	'tanggal' => $tanggal,
		// 	'jenis_pengiriman' => $jenis_pengiriman,
		// 	'biaya_kirim' => $biaya_kirim,
		// 	'harga_total' => $harga_total
		// );
		

		$tujuan = $this->M_tujuan->insert($uniq, $nama_tujuan, $kota_tujuan, $handphone_tujuan, $kodepos_tujuan, $email_tujuan, $alamat_tujuan);
		if($tujuan == false){
			redirect('Sent_details/index','refresh');
		}else{
			$transaksi = $this->M_transaksi->insert($uniq, $id_user, $id_produk, $id_konveksi, $ukuran, $status_transaksi, $uniq, $tanggal, $jenis_pengiriman, $biaya_kirim, $harga_total);
			if($transaksi ==  false){
				redirect('Sent_details/index','refresh');
			}else{
				$data['rekening'] = $this->M_rekening->getRekeningAdmin();
                $data['id_transaksi'] = $uniq;
                $this->load->view('payment_method', $data);
			}
		}
		
		// echo "transaksiii: ".$transaksi['id_user'];
		// echo "nama: ".$nama_tujuan."<br>";
		// echo "kdpos: ".$kodepos_tujuan."<br>";
		// echo "handphone: ".$handphone_tujuan."<br>";
		// echo "kota: ".$kota_tujuan."<br>";
		// echo "email: ".$email_tujuan."<br>";
		// echo "alamat: ".$alamat_tujuan."<br>";
		// echo "ukuran: ".$ukuran."<br>";
		// echo "jenis: ".$jenis_pengiriman."<br>";
		// echo "produk: ".$id_produk."<br>";
		// echo "konveksi: ".$id_konveksi."<br>";
		// echo "biayakonveksi: ".$biaya_konveksi."<br>";
		// echo "biayakirim: ".$biaya_kirim."<br>";
		// echo "hargabarang: ".$harga_barang."<br>";
		// echo "hargatotal: ".$harga_total."<br>";
		// echo "uniq: ".$uniq."<br>";
		// echo "uniq: ".$tanggal."<br>";
		// echo "id: ".$id_user."<br>";
	}
    
}