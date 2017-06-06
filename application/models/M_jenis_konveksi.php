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
            $query = $this->db->query("SELECT k.nama, k.logo, k.deskripsi, j.harga 
                                        FROM konveksi k, jenis_konveksi j 
                                        WHERE k.id = j.id_konveksi and j.id_kategori_produk = $kategori");
            return $query->result();
        }


    }


?>