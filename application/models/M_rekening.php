<?php

    if(!isset($_SESSION))
    {
        session_start();
    }   

	Class M_rekening extends CI_Model {


		public function __construct() {
        	parent::__construct();
        	$this->load->database();
    	}

		// rekening admin
		function getAdminRek(){
			$query = $this->db->query("SELECT * FROM `bank`");
		}
		
		//rekening user
        function getRekeningByUser($id_user){
			$query = $this->db->query("SELECT * FROM `rekening` WHERE id_user = $id_user");
			return $query->result();
		}

		function getRekeningAdmin(){
			$query = $this->db->query("SELECT * FROM bank");
			return $query->result();
		}

        function deleteRekening($id_rekening){
            $query = $this->db->query("DELETE FROM `rekening` WHERE id_rekening = $id_rekening");
			if ($query == true) {
				return true;
			}
        }

        function insertRekening($no_rekening, $nama_pemilik, $id_user, $nama_bank){
            $result = $this->db->query("INSERT INTO `rekening`(`no_rekening`, `nama_pemilik`, `id_user`, `nama_bank`) 
            VALUES ('$no_rekening', '$nama_pemilik', $id_user, '$nama_bank')");
			if ($result == true) {
				return true;
			}
        }

        function updateRekening($where, $data){
			$this->db->update('rekening', $data, $where);
			return $this->db->affected_rows();
		}
		

    }