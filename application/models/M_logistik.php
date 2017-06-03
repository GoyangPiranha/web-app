<?php

    if(!isset($_SESSION))
    {
        session_start();
    }

	Class M_logistik extends CI_Model {

		public function __construct() {
        	parent::__construct();
        	$this->load->database();
    	}

        function getLogistik(){
            $query = $this->db->query("SELECT * FROM logistik");
            return $query->result();
        }



    }