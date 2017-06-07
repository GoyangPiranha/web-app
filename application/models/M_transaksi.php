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

        //ADMIN 
        function getTransaksi(){
            $query = $this->db->query("SELECT T.id, T.id_transaksi, T.tanggal, U.nama_user, P.nama_produk, jumlah_produk, UK.ukuran, KP.kategori_produk, K.nama, TJ.alamat, JP.jenis_pengiriman, ST.status_transaksi ,T.total_harga FROM transaksi T, user U, ukuran UK, produk P, jenis_konveksi JK, konveksi K, tujuan TJ, jenis_pengiriman JP, logistik LG, status_transaksi ST, kategori_produk KP WHERE T.id_user = U.id_user AND UK.id = T.id_ukuran AND P.id_produk = T.id_produk AND JK.id = T.id_jenis_konveksi AND JK.id_konveksi = K.id AND JK.id_konveksi=KP.id AND TJ.id = T.id_tujuan AND JP.id_jenis_pengiriman=T.id_jenis_pengiriman AND LG.id_logistik=JP.id_logistik AND ST.id=T.id_status_transaksi AND (U.id_jenis_user = 1 OR U.id_jenis_user=2)");
            
            return $query->result();
        }

        function getTransaksiById($id){
            $query = $this->db->query("SELECT T.id, T.id_transaksi, T.tanggal, U.nama_user, P.nama_produk, jumlah_produk, UK.ukuran, KP.kategori_produk, K.nama, TJ.alamat, JP.jenis_pengiriman, ST.status_transaksi ,T.total_harga FROM transaksi T, user U, ukuran UK, produk P, jenis_konveksi JK, konveksi K, tujuan TJ, jenis_pengiriman JP, logistik LG, status_transaksi ST, kategori_produk KP WHERE T.id_user = U.id_user AND UK.id = T.id_ukuran AND P.id_produk = T.id_produk AND JK.id = T.id_jenis_konveksi AND JK.id_konveksi = K.id AND JK.id_konveksi=KP.id AND TJ.id = T.id_tujuan AND JP.id_jenis_pengiriman=T.id_jenis_pengiriman AND LG.id_logistik=JP.id_logistik AND ST.id=T.id_status_transaksi AND (U.id_jenis_user = 1 OR U.id_jenis_user=2) AND T.id = $id");
            
            return $query->result();
        }

        function getAllTransaction(){
            $query = $this->db->query("SELECT * FROM `status_transaksi`");

            return $query->result();
        }

        public function transactionUpdate($where, $data)
        {
            $this->db->update('transaksi', $data, $where);
            return $this->db->affected_rows();
        }

        public function deleteTransaction($id){
			$this->db->where('id', $id);
			$this->db->delete('transaksi');
		}

        function getTransactionCount(){
            $query = $this->db->query("SELECT COUNT(id) FROM transaksi");
            return $query->result();
        }

    
    }