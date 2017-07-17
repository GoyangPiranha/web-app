<?php

    if(!isset($_SESSION))
    {
        session_start();
    }

	Class M_riwayat_penjualan extends CI_Model {


		public function __construct() {
        	parent::__construct();
        	$this->load->database();
    	}
        
        function getRiwayatPenjualan($id_user){
            $query = $this->db->query("SELECT * FROM riwayat_penjualan WHERE id_user = $id_user");
            return $query->result();
        }





    
    }