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

    	function registrasi($username_user, $password_user, $nama_user, $jenis_kelamin_user, $tanggal_lahir_user, $provinsi_user, $kota_user, $alamat_user, $kode_pos_user, $foto_profile_user, $email_user, $contact_user, $deskripsi_user, $rekening_user, $jenis_user){
    		$id_kota = $this->db->query("select id_kota from provinsi as p, kota as k where p.nama_provinsi = '$provinsi_user' AND k.nama_kota = '$kota_user'");
			$result = $this->db->query("INSERT INTO `user`(`id_user`, `username_user`, `password_user`, `nama_user`, `jenis_kelamin_user`, `tanggal_lahir_user`, `id_kota`, `alamat_user`, `kode_pos_user`, `foto_profile_user`, `foto_background_user`, `email_user`, `contact_user`, `deskripsi_user`, `rekening_user`, `jumlah_pelangan_user`, `jenis_user`) VALUES ('$username_user', '$password_user', '$nama_user', '$jenis_kelamin_user', '$tanggal_lahir_user', '$id_kota', '$alamat_user', '$kode_pos_user', '$foto_profile_user', '$email_user', '$contact_user', '$deskripsi_user', '$rekening_user', '$jenis_user') ");
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

}
