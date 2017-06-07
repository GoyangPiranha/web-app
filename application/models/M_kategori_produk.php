<?php

    if(!isset($_SESSION))
    {
        session_start();
    }

	Class M_kategori_produk extends CI_Model {

		public function __construct() {
        	parent::__construct();
        	$this->load->database();
    	}

        function getKategori($id){
            $query = $this->db->query("SELECT l.logo_logistik, j.id_jenis_pengiriman, j.jenis_pengiriman, j.harga 
            FROM logistik l right OUTER join jenis_pengiriman j on l.id_logistik = j.id_logistik");
            return $query->result();
        }



    }