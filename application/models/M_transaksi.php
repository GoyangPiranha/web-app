<?php

    if(!isset($_SESSION))
    {
        session_start();
    }

	Class M_transaksi extends CI_Model {


		public function __construct() {
        	parent::__construct();
        	$this->load->database();
    	}

        function insert($id_user, $jumlah_produk, $id_produk, $id_jenis_konveksi, $id_ukuran, $id_jenis_pengiriman, $id_tujuan, $total_harga){
            $id_status_transaksi = 0;
            
            date_default_timezone_set('Asia/Jakarta');
            $tanggal  = date('Y-m-d');
            
            $query = $this->db->query("INSERT INTO `transaksi`(`id_user`, `jumlah_produk`, `id_produk`, `id_jenis_konveksi`, `id_ukuran`, `id_status_transaksi`, `id_jenis_pengiriman`, `id_tujuan`, `tanggal`, `total_harga`
            VALUES ($id_user, $jumlah_produk, $id_produk, $id_jenis_konveksi, $id_ukuran, $id_status_transaksi, $id_jenis_pengiriman, $id_tujuan, $tanggal, $total_harga)");
            if ($query == true) {
				return true;
			}
        }



    
    }