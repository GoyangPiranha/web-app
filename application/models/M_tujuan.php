<?php

    if(!isset($_SESSION))
    {
        session_start();
    }

	Class M_tujuan extends CI_Model {


		public function __construct() {
        	parent::__construct();
        	$this->load->database();
    	}

        function insert($id, $nama, $id_kota, $telefon, $zipcode, $email, $alamat){
            
            $query = $this->db->query("INSERT INTO `tujuan`(`id`, `nama`, `id_kota`, `telefon`, `zipcode`, `email`, `alamat`) 
            VALUES ('$id','$nama',$id_kota,'$telefon','$zipcode','$email','$alamat')");
            if ($query == true) {
				return true;
			}
        }

        



    
    }

?>