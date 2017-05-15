<?php

    if(!isset($_SESSION))
    {
        session_start();
    }

	Class M_users extends CI_Model {


		public function __construct() {
        	parent::__construct();
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
			$query = $this->db->query("SELECT nama_user, username_user, jenis_user FROM user WHERE username_user = '$username' and `password_user` = '$password'");
			if ($query->num_rows()>0) {
				foreach ($query->result() as $row){
					$_SESSION['FULLNAME']= $row->nama_user;
					$_SESSION['USERNAME']= $row->username_user;
					$_SESSION['JENIS_USER'] = $row->jenis_user;
				return true;   
				}
		
			}else{
				return false;
			}
		}

		function getUser($username){
			$query = $this->db->query("SELECT `Username`, `Password` FROM `user` WHERE `Username` = '$username' and `Password` = 'password'");

		}

		function getIdUser($username_user){
			$query = $this->db->query("SELECT id_user FROM `user` WHERE `username_user`= '$username_user'");
			return $query->result_array();
		}

		function simpan_desain($gambar_depan, $gambar_belakang, $nama_desain, $deskripsi_desain, $kategori, $jenis_pakaian, $tags, $harga, $diskon, $id_user, $acc){
			$query = $this->db->query("INSERT INTO `produk`(`nama_produk`, `gambar_depan`, `gambar_belakang`, `kategori`, `jenis_pakaian`, `tag_produk`, `harga_produk`, `diskon_produk`, `id_user`, `acc_produk`) 
				VALUES ('$nama_desain', '$gambar_depan', '$gambar_belakang', '$kategori', '$jenis_pakaian', '$tags', '$harga', '$diskon', '$id_user', '$acc');");
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