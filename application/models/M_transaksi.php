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

        
        function getRiwayatPembelian($id_user){
            $query = $this->db->query("SELECT t.id, t.id_user, t.id_status_transaksi, p.id_produk, p.nama_produk, u.id_user as id_user_produk, u.nama_user, p.foto_produk_depan, p.harga_produk 
            FROM transaksi t, produk p, user u 
            WHERE t.id_produk = p.id_produk AND p.id_user = u.id_user AND t.id_user = $id_user AND t.id_status_transaksi = 4");
            return $query->result();
        }

        function getUkuran(){
            $query = $this->db->query("SELECT * FROM `ukuran`");

            return $query->result();
        }

        function getRiwayatPenjualan($id_user){
            $query = $this->db->query("SELECT t.id, t.id_user, t.id_status_transaksi, p.id_produk, p.nama_produk, u.id_user as id_user_produk, u.nama_user, p.foto_produk_depan, p.harga_produk 
            FROM transaksi t, produk p, user u 
            WHERE t.id_produk = p.id_produk AND p.id_user = u.id_user AND u.id_user = $id_user AND t.id_status_transaksi = 4");
            return $query->result();
        }



    
    }