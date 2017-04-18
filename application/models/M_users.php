<?php

    if(!isset($_SESSION))
    {
        session_start();
    }

	Class M_users extends CI_Model {


		public function __construct() {
        	parent::__construct();
    	}

    	function simpanData($fullname,$username,$date,$avatar,$password,$province,$city,$address,$email,$handphone){
		
			$query = $this->db->query("INSERT INTO `user`(`Fullname`, `Username`, `Date_of_birth`, `Avatar`, `Password`, `Province`, `City`, `Address`, `Email`, `Handphone`) VALUES ('$fullname','$username','$date','$avatar','$password','$province','$city','$address','$email','$handphone')");
			if ($query == true) {
				return true;
			}
		
		}

		function cekUser($username){
			$query = $this->db->query("SELECT `Username` FROM `user` WHERE `Username` = '$username'");
			if ($query->num_rows() > 0) {
				return true;

			}
		}

		function cekLogin($username, $password){
			$query = $this->db->query("SELECT `Username`, `Password`,`Fullname`, `Avatar` FROM `user` WHERE `Username` = '$username' and `Password` = '$password'");
			if ($query->num_rows()>0) {
				foreach ($query->result() as $row){
					$_SESSION['FULLNAME']= $row->Fullname;
					$_SESSION['USERNAME']= $row->Username;
					$_SESSION['AVATAR']= $row->Avatar;
					
				return true;   
				}
		
			}else{
				return false;
			}
		}

		function getUser($username){
			$query = $this->db->query("SELECT `Username`, `Password` FROM `user` WHERE `Username` = '$username' and `Password` = 'password'");

		}

	
}