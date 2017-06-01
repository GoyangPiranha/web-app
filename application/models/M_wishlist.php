<?php

    if(!isset($_SESSION))
    {
        session_start();
    }

	Class M_wishlist extends CI_Model {

		public function __construct() {
        	parent::__construct();
        	$this->load->database();
    	}

        function insert($id_produk, $id_user){
            $result = $this->db->query("INSERT INTO `whistlist`(`id_produk`, `id_user`) 
            VALUES ('$id_produk', '$id_user')");
			if ($result == true) {
				return true;
			}
        }

        function getWishlistByUser($id_user){
            $query = $this->db->query("SELECT w.id, p.nama_produk, p.foto_produk_depan, u.nama_user, p.harga_produk FROM whistlist w, produk p, user u 
            WHERE w.id_produk = p.id_produk AND p.id_user = u.id_user AND w.id_user = $id_user");
            return $query->result();
        }

        function deleteWishlist($id){
            $query = $this->db->query("DELETE FROM `whistlist` WHERE id = $id");
			if ($query == true) {
				return true;
			}
        }

    }