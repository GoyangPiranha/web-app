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

        function get_produk($id){
            $query = $this->db->query("SELECT * FROM `produk` WHERE `id_produk`= $id");
			return $query->result();
        }

        function get_produk($id, $id_status_produk){
            $query = $this->db->query("SELECT * FROM `produk` WHERE `id_produk`= $id AND `id_status_produk`=$id_status_produk");
			return $query->result();
        }

        function insert($nama_produk, $deskripsi, $foto_produk_depan, $foto_produk_belakang, $id_jenis_produk, $id_kategori_produk, $tag_produk, $harga_produk, $id_user){
            $id_status_produk = 0;
            $query = $this->db->query("INSERT INTO `produk`(`nama_produk`, `deskripsi`, `foto_produk_depan`, `foto_produk_belakang`, `id_jenis_produk`, `id_kategori_produk`, `tag_produk`, `harga_produk`, `id_user`, `id_status_produk`) 
            VALUES ('$nama_produk', '$deskripsi', '$foto_produk_depan', '$foto_produk_belakang', $id_jenis_produk, $id_kategori_produk, '$tag_produk', $harga_produk, $id_user, $id_status_produk)");
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

    }