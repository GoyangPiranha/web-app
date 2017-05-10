<?php

    if(!isset($_SESSION))
    {
        session_start();
    }

	Class M_users extends CI_Model {


		public function __construct() {
        	parent::__construct();
        	$this->load->database();
    	}

    	function simpanData($fullname,$username,$date,$avatar,$password,$id_kota,$address,$email,$handphone){
		
			$query = $this->db->query("INSERT INTO `user`(`nama_user`, `username_user`, `tanggal_lahir_user`, `foto_profile_user`, `password_user`, `id_kota`, `alamat_user`, `email_user`, `contact_user`) VALUES ('$fullname','$username','$date','$avatar','$password', $id_kota,'$address','$email','$handphone')");
			if ($query == true) {
				return true;
			}
		}

		function cekUser($username){
			$query = $this->db->query("SELECT `username_user` FROM `user` WHERE `username_user` = '$username'");
			if ($query->num_rows() > 0) {
				return true;
			}
		}


		function cekLogin($username, $password){
			$query = $this->db->query("SELECT `username_user`, `password_user`,`nama_user`, `foto_profile_user`, `foto_background_user` FROM `user` WHERE `username_user` = '$username' and `password_user` = '$password'");
			if ($query->num_rows()>0) {
				foreach ($query->result() as $row){
					$_SESSION['FULLNAME']= $row->nama_user;
					$_SESSION['USERNAME']= $row->username_user;
					$_SESSION['AVATAR']= $row->foto_profile_user;
					$_SESSION['BACKGROUND']= $row->foto_background_user;
				return true;   
				}
		
			}else{
				return false;
			}
		}

		function getUser($username){
			$query = $this->db->query("SELECT `username_user`, `password_user` FROM `user` WHERE `username_user` = '$username' and `password_user` = 'password'");

		}

		function getKotaQuery($id_provinsi){
			$query = $this->db->get_where('kota', array('id_provinsi' => $id_provinsi));
			return $query->result();
		}

		function getProvinsiQuery(){
			$query = $this->db->query('SELECT * FROM provinsi');
			return $query->result();
		}

	
}