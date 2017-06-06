<?php

    if(!isset($_SESSION))
    {
        session_start();
    }

	Class M_produk extends CI_Model {


		public function __construct() {
        	parent::__construct();
        	$this->load->database();
    	}

        function getProduk(){
            $query = $this->db->query("SELECT * FROM `produk`");
			return $query->result();
        }

        function getProdukId($id_produk){
            $query = $this->db->query("SELECT * FROM `produk` WHERE id_produk = $id_produk");
			return $query->result();
        }

        function getProdukUser($id_user){
            $query = $this->db->query("SELECT p.*, u.* FROM produk p join user u ON p.id_user = u.id_user WHERE p.id_user = $id_user AND p.id_status_produk = 3");
			return $query->result();
        }

        function getProdukCanvass($id_user){
            $query = $this->db->query("SELECT p.*, u.* FROM produk p join user u ON p.id_user = u.id_user WHERE p.id_user = $id_user AND p.id_status_produk = 1");
			return $query->result();
        }

        function get_produk_by_id($id){
            $query = $this->db->query("SELECT p.*, u.* FROM produk p join user u ON p.id_user = u.id_user WHERE `id_produk`= $id");
			return $query->result();
        }

        function get_produk_by_id_status($id_status_produk){
            $query = $this->db->query("SELECT * FROM `produk` WHERE `id_status_produk`=$id_status_produk");
			return $query->result();
        }
        
        function getProdukByKategoriLimit($id_kategori_produk){
            $query = $this->db->query("SELECT p.*, u.* FROM produk p join user u ON p.id_user = u.id_user WHERE p.id_kategori_produk=$id_kategori_produk AND p.id_status_produk = 3 LIMIT 4");
			return $query->result();
        }

        function searchProduk($key){
            $query = $this->db->query("SELECT * FROM `produk` WHERE nama_produk LIKE %$key%");
			return $query->result();
        }

        function insert($nama_produk, $deskripsi, $foto_produk_depan, $foto_produk_belakang, $id_jenis_produk, $id_kategori_produk, $tag_produk, $harga_produk, $id_user, $id_status_produk, $date){
            $query = $this->db->query("INSERT INTO `produk`(`nama_produk`, `deskripsi`, `foto_produk_depan`, `foto_produk_belakang`, `id_jenis_produk`, `id_kategori_produk`, `tag_produk`, `harga_produk`, `id_user`, `id_status_produk`, `date`)
            VALUES ('$nama_produk', '$deskripsi', '$foto_produk_depan', '$foto_produk_belakang', $id_jenis_produk, $id_kategori_produk, '$tag_produk', '$harga_produk', $id_user,$id_status_produk, $date)");
            if ($query == true) {
				return true;
			}
        }

        function insertSave($nama_produk, $deskripsi, $foto_produk_depan, $foto_produk_belakang, $id_jenis_produk, $id_kategori_produk, $tag_produk, $harga_produk, $id_user, $id_status_produk){
            $query = $this->db->query("INSERT INTO `produk`(`nama_produk`, `deskripsi`, `foto_produk_depan`, `foto_produk_belakang`, `id_jenis_produk`, `id_kategori_produk`, `tag_produk`, `harga_produk`, `id_user`, `id_status_produk`)
            VALUES ('$nama_produk', '$deskripsi', '$foto_produk_depan', '$foto_produk_belakang', $id_jenis_produk, $id_kategori_produk, '$tag_produk', '$harga_produk', $id_user,$id_status_produk)");
            if ($query == true) {
				return true;
			}
        }

        function update_status_product($id, $id_status_produk){
            $query = $this->db->query("UPDATE `produk` SET `id_status_produk`=$id_status_produk WHERE `id_produk` = $id ");
            if ($query == true) {
				return true;
			}
        }

        function updateStatusJual($id, $date){
            $query = $this->db->query("UPDATE `produk` SET `id_status_produk`=3, `date` = $date WHERE `id_produk` = $id ");
            if ($query == true) {
				return true;
			}
        }

        function update_diskon_produk($id, $diskon){
             $query = $this->db->query("UPDATE `produk` SET `diskon_produk`=$diskon WHERE `id_produk` = $id ");
            if ($query == true) {
				return true;
			}
        }

        function update_rating_produk($id, $rating){
            $query = $this->db->query("UPDATE `produk` SET `rating_produk`=$rating WHERE `id_produk` = $id ");
            if ($query == true) {
				return true;
			}
        }

        function deleteProduk($id){
            $query = $this->db->query("DELETE FROM produk where id_produk = $id");
            if ($query == true) {
				return true;
			}
        }

        function hitungProduk($id_user){
            $query = $this->db->query("SELECT COUNT(id_produk) as jumlah FROM `produk` WHERE id_user = $id_user");
			return $query->result();
        }

        

    }