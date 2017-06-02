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
            $query = $this->db->query("SELECT * FROM `konveksi`");

            return $query->result();
        }
    }