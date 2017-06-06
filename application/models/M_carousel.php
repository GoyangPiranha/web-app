<?php

    if(!isset($_SESSION))
    {
        session_start();
    }

	Class M_carousel extends CI_Model {

		public function __construct() {
        	parent::__construct();
        	$this->load->database();
    	}

        function getCarousel(){
            $query = $this->db->query("SELECT * FROM `carousel`");
            return $query->result();
        }

        function deleteCarousel($id){
            $this->db->where('id_carousel', $id);
            $this->db->delete('carousel');
        }

        function addCarousel($data){
            $query = $this->db->insert('carousel', $data);
            if($query = TRUE){
                return true;
            }
        }

        function getSameName($id){
            $query = $this->db->query("SELECT `foto_carousel` FROM `carousel` WHERE `id_carousel` = $id");
            return $query->result();
        }



    }