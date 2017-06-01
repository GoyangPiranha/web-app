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

        function getKonveksi(){
            $query = $this->db->query("SELECT * FROM konveksi");
            return $query->result();
        }


    }