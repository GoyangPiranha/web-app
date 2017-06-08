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

        function insert($id_transaksi, $id_user, $id_produk, $id_jenis_konveksi, $id_ukuran, $id_status_transaksi, $id_tujuan, $tanggal, $jenis_pengiriman, $harga_pengiriman, $total_harga, $id_bank, $nama_pemilik, $rekening_user, $bank){

            $query = $this->db->query("INSERT INTO `transaksi`(`id_transaksi`, `id_user`, `id_produk`, `id_jenis_konveksi`, `id_ukuran`, `id_status_transaksi`, `id_tujuan`, `tanggal`, `jenis_pengiriman`, `harga_pengiriman`, `total_harga`, `id_bank`, `nama_pemilik`, `rekening_user`, `bank`) 
            VALUES ('$id_transaksi',$id_user, $id_produk, $id_jenis_konveksi, $id_ukuran, $id_status_transaksi, '$id_tujuan', '$tanggal', '$jenis_pengiriman', $harga_pengiriman, $total_harga, $id_bank, '$nama_pemilik', '$rekening_user', '$bank')");
            if ($query == true) {
				return true;
			}
        }

        
        function getRiwayatPembelian($id_user){
            $query = $this->db->query("SELECT t.id, t.id_user, t.id_status_transaksi, p.id_produk, p.nama_produk, u.id_user as id_user_produk, u.nama_user, p.foto_produk_depan, p.harga_produk 
            FROM transaksi t, produk p, user u 
            WHERE t.id_produk = p.id_produk AND p.id_user = u.id_user AND t.id_user = $id_user");
            return $query->result();
        }

        function getSalesDetail($id_transaksi){
            $query = $this->db->query("SELECT t.id, t.id_transaksi, t.id_user, t.total_harga, uk.ukuran, p.id_produk, p.id_user as id_user_produk , p.foto_produk_depan, p.nama_produk, u.nama_user as nama_user_produk, p.rating_produk, s.status_transaksi 
            FROM transaksi t, produk p, user u, status_transaksi s, ukuran uk 
            WHERE t.id_produk = p.id_produk AND p.id_user = u.id_user AND t.id_ukuran = uk.id AND t.id_status_transaksi = s.id 
            AND t.id = $id_transaksi");
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

        function updateTransaksi($id_transaksi, $fotobukti, $id_status_transaksi){
            $query = $this->db->query("UPDATE `transaksi` SET `id_status_transaksi`=$id_status_transaksi, `bukti_pembayaran_transaksi`='$fotobukti' 
            WHERE id = $id_transaksi");
            if ($query == true) {
				return true;
			}
        }



    
    }