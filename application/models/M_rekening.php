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

		//BANK
		function getBank(){
			$query = $this->db->query("SELECT * FROM `bank`");
			return $query->result();
		}

		// REKENING ADMIN
		function getAdminRek(){
			$query = $this->db->query("SELECT * FROM `rekening` WHERE `id_user` = 23");
			return $query->result();
		}
		
		public function insertAdminBank($data){
			$this->db->insert('rekening', $data);
			return $this->db->insert_id();
		}

		public function delete($id){
			$this->db->where('id_rekening', $id);
			$this->db->delete('rekening');
		}
		
		// REKENING USER
        function getRekeningByUser($id_user){
			$query = $this->db->query("SELECT * FROM `rekening` WHERE id_user = $id_user");
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
			return $query->insert_id();
			if ($result == true) {
				return true;
			}
        }

        function updateRekening($where, $data){
			$this->db->update('rekening', $data, $where);
			return $this->db->affected_rows();
		}
		

    }