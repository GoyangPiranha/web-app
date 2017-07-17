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

        // function insertKonveksi($nama, $deskripsi, $harga_baju, $harga_jaket, $harga_topi, $harga_celana , $logo){
        //     $query = $this->db->query("INSERT INTO `konveksi` (`nama`, `deskripsi`, `harga`, `logo`) VALUES ('$nama', '$deskripsi', '$harga', '$logo')");
        //     if($query == true){
        //         return true;
        //     }
        // }

        function getKonveksi(){
            $query = $this->db->query("SELECT K.id, K.nama, K.deskripsi, (SELECT JK.harga FROM jenis_konveksi JK WHERE JK.id_kategori_produk = 1 AND K.id=JK.id_konveksi ) as harga_baju, (SELECT JK.harga FROM jenis_konveksi JK WHERE JK.id_kategori_produk = 2 AND K.id=JK.id_konveksi ) as harga_jaket, (SELECT JK.harga FROM jenis_konveksi JK WHERE JK.id_kategori_produk = 3 AND K.id=JK.id_konveksi ) as harga_topi, (SELECT JK.harga FROM jenis_konveksi JK WHERE JK.id_kategori_produk = 4 AND K.id=JK.id_konveksi ) as harga_celana FROM konveksi K");

            return $query->result();
        }

        function getById($id){
            $query = $this->db->query("SELECT K.id, K.nama, K.deskripsi, (SELECT JK.harga FROM jenis_konveksi JK WHERE JK.id_kategori_produk = 1 AND K.id=JK.id_konveksi ) as harga_baju, (SELECT JK.harga FROM jenis_konveksi JK WHERE JK.id_kategori_produk = 2 AND K.id=JK.id_konveksi ) as harga_jaket, (SELECT JK.harga FROM jenis_konveksi JK WHERE JK.id_kategori_produk = 3 AND K.id=JK.id_konveksi ) as harga_topi, (SELECT JK.harga FROM jenis_konveksi JK WHERE JK.id_kategori_produk = 4 AND K.id=JK.id_konveksi ) as harga_celana FROM konveksi K WHERE K.id = $id");

            return $query->result();
        }

        function insertKonveksi($data){
            $this->db->insert('konveksi', $data);
            if($this->db->affected_rows() > 0){
                return TRUE;
            }
            else {
                return FALSE;
            }
        }

        function insertJenisKonveksi($data){
            $this->db->insert('jenis_konveksi', $data);
            if($this->db->affected_rows() > 0){
                return TRUE;
            }
            else {
                return FALSE;
            }
        }

        function deleteKonveksi($id){
            $this->db->query("DELETE jenis_konveksi, konveksi FROM jenis_konveksi LEFT JOIN konveksi ON jenis_konveksi.id_konveksi = konveksi.id WHERE konveksi.id = $id");
            if($this->db->affected_rows() > 0){
                return TRUE;
            }
            else {
                return FALSE;
            }
        }

        
    }