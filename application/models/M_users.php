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

    	function registrasi($username_user, $password_user, $nama_user, $tanggal_lahir_user, $kota_user, $alamat_user, $fotoprofile, $fotobackground, $email_user, $contact_user){
			$id_jenis_user = 2;
			$result = $this->db->query("INSERT INTO `user`(`username_user`, `password_user`, `nama_user`, `tanggal_lahir_user`, `id_kota`, `alamat_user`, `foto_profile_user`, `foto_background_user`, `email_user`, `contact_user`, `id_jenis_user`) 
			VALUES ('$username_user', '$password_user', '$nama_user', '$tanggal_lahir_user', $kota_user, '$alamat_user', '$fotoprofile', '$fotobackground', '$email_user', '$contact_user', $id_jenis_user)");
			if ($result == true) {
				return true;
			}
		}

		function cekUser($username){
			$query = $this->db->query("SELECT `username_user` FROM `user` WHERE `username_user` = '$username'");
			if ($query->num_rows() > 0) {
				return true;
			}
		}

		function cekEmail($username){
			$query = $this->db->query("SELECT `email_user` FROM `user` WHERE `username_user` = '$username'");
			if ($query->num_rows() > 0) {
				return true;
			}
		}


		function cekLogin($username, $password){
			$query = $this->db->query("SELECT `id_user`, `username_user`, `password_user`,`nama_user`, `foto_profile_user`, `foto_background_user` FROM `user` WHERE `username_user` = '$username' and `password_user` = '$password'");
			if ($query->num_rows()>0) {
				foreach ($query->result() as $row){
					$_SESSION['ID_USER'] = $row->id_user;
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

		function getByUsernameQuery($username){
			$query = $this->db->query("SELECT * FROM `user` WHERE `username_user` = '$username' ");
			return $query->result();

		}

		function getUserById($id_user){
			$query = $this->db->query("SELECT * FROM `user` WHERE `id_user` = '$id_user' ");
			return $query->result();

		}

		function getKotaQuery($id_provinsi){
			$query = $this->db->get_where('kota', array('id_provinsi' => $id_provinsi));
			return $query->result();
		}

		function getProvinsiQuery(){
			$query = $this->db->query('SELECT * FROM provinsi');
			return $query->result();
		}

		function getAllUserQuery(){
			$query = $this->db->get('user');
			return $query->result();
		}

		function updateUserQuery($where, $data){
			$this->db->update('user', $data, $where);
			return $this->db->affected_rows();
		}

		function getRekeningByUser($id_user){
			$query = $this->db->query("SELECT * FROM `rekening` WHERE id_user = $id_user");
			return $query->result();
		}

		function cekAdmin($username, $password, $jenis_user){
			$query = $this->db->query("SELECT * FROM `user` WHERE `username_user` = '$username' and `password_user` = '$password' and `id_jenis_user` = '$jenis_user'");
			if ($query->num_rows()>0) {
				foreach ($query->result() as $row){
					$_SESSION['ID_USER']= $row->id_user;
					$_SESSION['FULLNAME']= $row->nama_user;
					$_SESSION['USERNAME']= $row->username_user;
					$_SESSION['AVATAR']= $row->foto_profile_user;
					$_SESSION['JENIS_USER']= $row->id_jenis_user;
				return true;   
				}
			}
			else{
				return false;
			}
		}

		//query get all user kecuali admin
		function getNoAdmin(){
			$query = $this->db->query("SELECT U.id_user, U.nama_user, U.username_user, U.tanggal_lahir_user, U.alamat_user, U.email_user, U.contact_user, K.nama_kota, P.nama_provinsi, JU.id_jenis_user FROM user U, kota K, provinsi P, jenis_user JU WHERE U.id_kota = K.id_kota AND K.id_provinsi = P.id_provinsi AND U.id_jenis_user = JU.id_jenis_user AND (JU.id_jenis_user = 1 OR JU.id_jenis_user = 2)");
			return $query->result();
		}

		function getJenisUser($id_user){
            $query = $this->db->query("SELECT U.id_user, JU.id_jenis_user, JU.jenis_user FROM user U, jenis_user JU WHERE U.id_jenis_user = JU.id_jenis_user AND U.id_user = $id_user");
			return $query->result();
        }

		public function ubahJenisUser($where, $data)
        {
            $this->db->update('user', $data, $where);
            return $this->db->affected_rows();
        }

		public function updateStatusUser($id_user, $data){
			$this->db->update('user', $data, $id_user);
			return $this->db->affected_rows();
		}

		function deleteUser($id_user){
			$this->db->where('id_user', $id_user);
			$this->db->delete('user');

			if($this->db->affected_rows() > 0){
				return TRUE;
			}
			else{
				return FALSE;
			}
		}
		function getUserCount(){
            $query = $this->db->query("SELECT COUNT(id_user) FROM user WHERE id_jenis_user != 9");
            return $query->result();
        }

}