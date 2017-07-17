<?php

    if(!isset($_SESSION))
    {
        session_start();
    }

	Class M_jenis_konveksi extends CI_Model {

		public function __construct() {
        	parent::__construct();
        	$this->load->database();
    	}

        function getJenisKonveksi($kategori){
            $query = $this->db->query("SELECT j.id, k.nama, k.logo, k.deskripsi, j.harga FROM konveksi k, jenis_konveksi j WHERE k.id = j.id_konveksi and j.id_kategori_produk = $kategori");
            return $query->result();
        }

        function getHarga($id_produk, $id_jenis_konveksi){
            $query = $this->db->query("SELECT p.id_produk, p.harga_produk, k.id, k.harga FROM produk p JOIN jenis_konveksi k WHERE p.id_produk = $id_produk AND k.id =$id_jenis_konveksi");
            return $query->result();
        }


    }


?>