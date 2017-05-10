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
            $query = $this->db->query('SELECT * FROM produk');
			return $query->result();
        }


    }