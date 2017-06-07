<?php

    if(!isset($_SESSION))
    {
        session_start();
    }

	Class M_konveksi extends CI_Model {

		public function __construct() {
        	parent::__construct();
        	$this->load->database();
    	}

        function insertKonveksi($nama, $deskripsi, $harga, $logo){
            $query = $this->db->query("INSERT INTO `konveksi` (`nama`, `deskripsi`, `harga`, `logo`) VALUES ('$nama', '$deskripsi', '$harga', '$logo')");
            if($query == true){
                return true;
            }
        }

        function getKonveksi(){
            $query = $this->db->query("SELECT K.id, K.nama, K.deskripsi, JK.harga, K.logo, JK.id_kategori_produk FROM konveksi K, jenis_konveksi JK, kategori_produk KP WHERE K.id = JK.id_konveksi AND JK.id_kategori_produk = KP.id");

            return $query->result();
        }

        function getById($id){
            $query = $this->db->query("SELECT K.id, JK.id, K.nama, K.deskripsi, JK.harga, K.logo, JK.id_kategori_produk FROM konveksi K, jenis_konveksi JK, kategori_produk KP WHERE K.id = JK.id_konveksi AND JK.id_kategori_produk = KP.id AND K.id = $id");

            return $query->result();
        }
        
    }