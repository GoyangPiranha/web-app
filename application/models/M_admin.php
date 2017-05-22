<?php

    if(!isset($_SESSION)){
        session_start();
    }

	Class M_admin extends CI_Model {


		public function __construct() {
        	parent::__construct();
    	}

    	// get ID user
    	public function getIdUser($username_user){
    		$query = $this->db->query("select * from user where username_user = '$username_user'");
    		return $query->row_array();
    	} 

    	// get Jenis
    	public function getJenis(){
    		$query = $this->db->query("select * from jenis_produk");
    		return $query->result_array();
    	}

    	// get Kategori 
    	public function getKategori(){
    		$query = $this->db->query("select * from kategori_produk");
    		return $query->result_array();
    	}

    	// get User
    	public function getUser(){
    		$query = $this->db->query("select * from user");
    		return $query->result();
    	}

    	// get Produk
    	public function getProduk(){
    		$query = $this->db->query("select * from produk");
    		return $query->result();
    	}
// USER
    	// Menampilkan data user
		public function daftar_user() {
		    $query = $this->db->query('SELECT * from user as s, provinsi as p, kota as k where p.id_provinsi = k.id_provinsi AND k.id_kota = s.id_kota AND s.jenis_user <> 2');
			return $query->result_array();
		}

		// menambahkan user
		public function user_tambah($username_user, $password_user, $nama_user, $jenis_kelamin_user, $tanggal_lahir_user, $kota_user, $alamat_user, $foto_profile_user, $email_user, $contact_user, $deskripsi_user, $rekening_user, $jenis_user){
			$hasil = $this->db->query("SELECT `id_kota` FROM `kota` as k, `provinsi` as p WHERE  p.id_provinsi = k.id_provinsi AND p.nama_provinsi = '$provinsi_user' AND k.nama_kota = '$kota_user'");
			$query = $this->db->query("INSERT INTO `user`(`username_user`, `password_user`, `nama_user`, `jenis_kelamin_user`, `tanggal_lahir_user`, `id_kota`, `alamat_user`, `foto_profile_user`, `email_user`, `contact_user`, `deskripsi_user`, `rekening_user`, `jumlah_pelangan_user`, `jenis_user`) 
				VALUES ('$username_user', '$password_user', '$nama_user', '$jenis_kelamin_user', '$tanggal_lahir_user', '$kota_user', '$alamat_user', '$foto_profile_user', '$email_user', '$contact_user', '$deskripsi_user', '$rekening_user', 0, $jenis_user)");
		}
		  
		// Detail  gambar
		public function user_detail($id) {
		 	$query = $this->db->query("SELECT * FROM `user` as s, `kota` as k, `provinsi` as p WHERE s.`id_user` = '$id' AND s.`id_kota` = k.`id_kota` AND k.`id_provinsi` = p.`id_provinsi`");
		  	return $query->row_array();
		}
		  
		// menambahkan user
		public function user_edit($id_user, $username_user, $password_user, $nama_user, $jenis_kelamin_user, $tanggal_lahir_user, $kota_user, $alamat_user, $foto_profile_user, $email_user, $contact_user, $deskripsi_user, $rekening_user, $jenis_user){
			$query = $this->db->query("UPDATE `user` SET `username_user` = '$username_user', `password_user` = '$password_user', `nama_user` = '$nama_user', `jenis_kelamin_user` = '$jenis_kelamin_user',
			 `tanggal_lahir_user` = '$tanggal_lahir_user', `id_kota` = '$kota_user', `alamat_user` = '$alamat_user', `foto_profile_user` = '$foto_profile_user', `email_user` = '$email_user' ,
			  `contact_user` = '$contact_user', `deskripsi_user` = '$deskripsi_user', `rekening_user` = '$rekening_user', `jumlah_pelangan_user` = 0, `jenis_user` = '$jenis_user'  
				where `id_user` = '$id_user'");
		}
		  
		// Hapus  gambar
		public function delete_user($id) {
		    $query = $this->db->query("DELETE FROM `user` WHERE `id_user` = '$id'");
		}

// PRODUK
    	// Menampilkan data produk
		public function daftar_produk() {
		    $query = $this->db->query("SELECT * from produk as pr, user as s, jenis_produk as jp, kategori_produk as kp, status_produk as sp where s.jenis_user = 2 AND jp.id = pr.id_jenis_produk AND kp.id = pr.id_kategori_produk AND pr.id_user = s.id_user AND pr.id_status_produk = sp.id");
			return $query->result_array();
		}

		// menambahkan produk
		public function produk_tambah($nama_produk, $deskripsi, $foto_produk_depan, $foto_produk_belakang, $id_kategori, $id_jenis, $tag_produk, $harga_produk, $diskon_produk, $id_user){			
			$query = $this->db->query("INSERT INTO `produk`(`nama_produk`, `deskripsi`, `foto_produk_depan`, `foto_produk_belakang`, `id_jenis_produk`, `id_kategori_produk`, `tag_produk`, `harga_produk`, `diskon_produk`, `id_user`, `id_status_produk`) 
				VALUES ('$nama_produk', '$deskripsi', '$foto_produk_depan', '$foto_produk_belakang', '$id_jenis', '$id_kategori', '$tag_produk', '$harga_produk', '$diskon_produk', '$id_user', 3) ");
		}

		// Detail  produk
		public function produk_detail($id) {
		 	$query = $this->db->query("SELECT * from produk as pr, user as s, jenis_produk as jp, kategori_produk as kp, status_produk as sp where jp.id = pr.id_jenis_produk AND kp.id = pr.id_kategori_produk AND pr.id_user = s.id_user AND pr.id_status_produk = sp.id AND pr.id_produk = '$id'");
		  	return $query->row_array();
		}

		// Edit  produk
		public function produk_edit($id_produk, $nama_produk, $deskripsi, $foto_produk_depan, $foto_produk_belakang, $id_kategori, $id_jenis, $tag_produk, $harga_produk, $diskon_produk, $id_user) {
		 	$query = $this->db->query("UPDATE produk SET `nama_produk` = '$nama_produk', `deskripsi` = '$deskripsi', `foto_produk_depan` = '$foto_produk_depan', `foto_produk_belakang` = '$foto_produk_belakang',
		 	 `id_jenis_produk` = '$id_jenis_produk', `id_kategori_produk` = '$id_kategori_produk', `tag_produk` = '$tag_produk', `harga_produk` = '$harga_produk', `diskon_produk` = '$diskon_produk', `id_user` = '$id_user'
		 	 where `id_status_produk` = '$id_produk'");
		}

		// Hapus  produk
		public function delete_produk($id) {
		    $query = $this->db->query("DELETE FROM `produk` WHERE `id_produk` = '$id'");
		}

// JENIS PRODUK
    	// Menampilkan data jenis produk
		public function daftar_jenis_produk() {
		    $query = $this->db->query("SELECT * from jenis_produk");
			return $query->result_array();
		}

		// menambahkan jenis produk
		public function jenis_produk_tambah($jenis_produk){			
			$query = $this->db->query("INSERT INTO `jenis_produk`(`jenis_produk`) VALUES ('$jenis_produk')");
		}

		// Detail jenis produk
		public function jenis_produk_detail($id) {
		 	$query = $this->db->query("SELECT * from jenis_produk where id = '$id'");
		  	return $query->row_array();
		}

		// Edit jeni produk
		public function jenis_produk_edit($id_produk, $jenis_produk) {
		 	$query = $this->db->query("UPDATE jenis_produk SET `jenis_produk` = '$jenis_produk' where `id` = '$id_produk'");
		}

		// Hapus jenis produk
		public function delete_jenis_produk($id) {
		    $query = $this->db->query("DELETE FROM `jenis_produk` WHERE `id` = '$id'");
		}

// KATEGORI PRODUK
    	// Menampilkan data kategori produk
		public function daftar_kategori_produk() {
		    $query = $this->db->query("SELECT * from kategori_produk");
			return $query->result_array();
		}

		// menambahkan kategori produk
		public function kategori_produk_tambah($kategori_produk){			
			$query = $this->db->query("INSERT INTO `kategori_produk`(`kategori_produk`) VALUES ('$kategori_produk')");
		}

		// Detail kategori produk
		public function kategori_produk_detail($id) {
		 	$query = $this->db->query("SELECT * from kategori_produk where id = '$id'");
		  	return $query->row_array();
		}

		// Edit kategori produk
		public function kategori_produk_edit($id, $kategori_produk) {
		 	$query = $this->db->query("UPDATE kategori_produk SET `kategori_produk` = '$kategori_produk' where `id` = '$id'");
		}

		// Hapus kategori produk
		public function delete_kategori_produk($id) {
		    $query = $this->db->query("DELETE FROM `kategori_produk` WHERE `id` = '$id'");
		}

// TRANSAKSI
		public function daftar_transaksi(){
			$query = $this->db->query("SELECT * from `transaksi` as t, `user` as u, `produk` as p, `status_transaksi` as st, `jenis_pengiriman` as jp, `tujuan` as tu, `jenis_konveksi` as jk, `konveksi` as kk, `ukuran` as uu  where t.id_user = u.id_user AND t.id_produk = p.id_produk AND t.id_status_transaksi = st.id AND t.id_jenis_pengiriman = jp.id_jenis_pengiriman AND t.id_tujuan = tu.id AND jk.id = t.id_jenis_konveksi AND jk.id_konveksi = kk.id AND t.id_ukuran = uu.id");
			return $query->result_array();
		}

		// Hapus transaksi
		public function delete_transaksi($id) {
		    $query = $this->db->query("DELETE FROM `transaksi` WHERE `id` = '$id'");
		}
}