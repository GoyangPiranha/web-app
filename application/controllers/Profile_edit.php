<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_edit extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    function __construct()
             {
               parent::__construct();
               $this->load->helper('url');
               
			   $this->load->model('M_rekening','',TRUE);
			   $this->load->model('M_users','',TRUE);
             }
    public function index()
    {
        if(isset($_SESSION['USERNAME'])){
            $id_user = $_SESSION['ID_USER'];
            $data['users'] = $this->M_users->getUserById($id_user);
            $data['rekening'] = $this->M_rekening->getRekeningByUser($id_user);
            $data['status'] = "";
            $this->load->view('profile_edit', $data);
        }
        else{
            $this->load->view('login');
        }  
    }

    function deleteRekening($id_rekening){
        $query = $this->M_rekening->deleteRekening($id_rekening);
        if($query == true){
            $data['status'] = "Delete Rekening Berhasil";
            $id_user = $_SESSION['ID_USER'];
            $data['users'] = $this->M_users->getUserById($id_user);
            $data['rekening'] = $this->M_rekening->getRekeningByUser($id_user);
            $this->load->view('profile_edit', $data);
        }else{
            $data['status'] = "Delete Rekening Gagal";
            $id_user = $_SESSION['ID_USER'];
            $data['users'] = $this->M_users->getUserById($id_user);
            $data['rekening'] = $this->M_rekening->getRekeningByUser($id_user);
            $this->load->view('profile_edit', $data);
        }
    }

    public function updateUser(){
        $id_user = $_SESSION['ID_USER'];
        $user_data = $this->M_users->getUserById($id_user);
        foreach($user_data as $row){
            $pass = $row->password_user;
            $username = $row->username_user;
            $id_user = $row->id_user;
            $foto_user = $row->foto_profile_user;
            $foto_sampul = $row->foto_background_user;
        }
            
            $nama_user = $_POST['name_full'];
            $new_password = $_POST['new_password'];
            $confirm_password = $_POST['confirm_new_password'];
            $foto_profile = $_FILES['fotoprofile']['name'];
            $foto_background = $_FILES['fotosampul']['name'];
            $tmp1 = $_FILES['fotoprofile']['tmp_name'];
            $tmp2 = $_FILES['fotosampul']['tmp_name'];            
            $foto_error = $_FILES['fotoprofile']['error'];
            $background_error = $_FILES['fotosampul']['error'];
            $uniq = uniqid();
            $fotoname = $uniq.$username.$foto_profile;
            $backgroundname = $uniq.$username.$foto_background;
            $email = $_POST['email'];
            $contact = $_POST['contact'];
            $nama_bank = $_POST['nama_bank'];
            $nama_pemilik = $_POST['nama_pemilik'];
            $no_rekening = $_POST['no_rekening'];


            if($new_password == null || $confirm_password == null){
                $password = $pass;
            }elseif($foto_profile == null || $foto_background == null){
                $foto_profile = $foto_user;
                $foto_background = $foto_sampul;
            }
            echo $nama_user;
            $password = $confirm_password;
            
            // if($new_password != $confirm_password){
            //     $data['status'] = "Password tidak sesuai, silahkan cek kembali";
            //     $id_user = $_SESSION['ID_USER'];
            //     $data['users'] = $this->M_users->getUserById($id_user);
            //     $data['rekening'] = $this->M_rekening->getRekeningByUser($id_user);
            //     $this->load->view('profile_edit', $data);
            // }elseif($no_rekening == null && $nama_pemilik == null && $nama_bank == null){
            //     $password = $confirm_password;
            //     $data = array('nama_user' => $nama_user,
            //                 'password_user' => $password,
            //                 'email_user' => $contact,
            //                 'foto_profile_user' => $fotoname,
            //                 'foto_background_user' => $backgroundname,
            //                 'contact_user' => $contact);
            //     $where = array('id_user' => $id_user);
                
            //     $check = $this->M_users->updateUserQuery($where, $data);
            //     $location1 = './assets/images/Profil/';
            //     $location2 = './assets/images/Sampul/';
            //     move_uploaded_file($tmp1, $location1.$fotoname);
            //     move_uploaded_file($tmp2, $location2.$backgroundname);
            //     if($check == true){
            //         $data['status'] = "Data Berhasil Diupdate";
            //         $id_user = $_SESSION['ID_USER'];
            //         $data['users'] = $this->M_users->getUserById($id_user);
            //         $data['rekening'] = $this->M_rekening->getRekeningByUser($id_user);
            //         $this->load->view('profile_edit', $data);
            //     }else{
            //         $data['status'] = "Data Tidak Berhasil Diupdate. Coba Periksa Kembali Data Anda.";
            //         $id_user = $_SESSION['ID_USER'];
            //         $data['users'] = $this->M_users->getUserById($id_user);
            //         $data['rekening'] = $this->M_rekening->getRekeningByUser($id_user);
            //         $this->load->view('profile_edit', $data);
            //     }
            // }elseif($no_rekening != null && $nama_pemilik != null && $nama_bank != null){
            //     $password_user = md5($new_password);
            //     $data = array('nama_user' => $nama_user,
            //                 'password_user' => $password_user,
            //                 'email_user' => $email,
            //                 'foto_profile_user' => $fotoname,
            //                 'foto_background_user' => $backgroundname,
            //                 'contact_user' => $contact);
            //     $where = array('id_user' => $id_user);
                
            //     $check = $this->M_users->updateUserQuery($where, $data);
            //     $location1 = './assets/images/Profil/';
            //     $location2 = './assets/images/Sampul/';
            //     move_uploaded_file($tmp1, $location1.$fotoname);
            //     move_uploaded_file($tmp2, $location2.$backgroundname);

            //     $check2 = $this->M_rekening->insertRekening($no_rekening, $nama_pemilik, $id_user, $nama_bank);
            //     if($check == true){
            //         $data['status'] = "Data Berhasil Diupdate";
            //         $id_user = $_SESSION['ID_USER'];
            //         $data['users'] = $this->M_users->getUserById($id_user);
            //         $data['rekening'] = $this->M_rekening->getRekeningByUser($id_user);
            //         $this->load->view('profile_edit', $data);
            //     }else{
            //         $data['status'] = "Data Tidak Berhasil Diupdate. Coba Periksa Kembali Data Anda.";
            //         $id_user = $_SESSION['ID_USER'];
            //         $data['users'] = $this->M_users->getUserById($id_user);
            //         $data['rekening'] = $this->M_rekening->getRekeningByUser($id_user);
            //         $this->load->view('profile_edit', $data);
            //     }

            // }
            
        
    }
}