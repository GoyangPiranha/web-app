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
               $this->load->model('M_users','m_user',TRUE);
             }
    public function index()
    {
        if(isset($_SESSION['USERNAME'])){
            $username = $_SESSION['USERNAME'];
            $data['users'] = $this->m_user->getByUsernameQuery($username);
            $this->load->view('profile_edit', $data);
        }
        else{
            $this->load->view('login');
        }  
    }

    public function updateUser(){
        $username = $_SESSION['USERNAME'];
        $user_data = $this->m_user->getByUsernameQuery($username);
        foreach($user_data as $row){
            // echo $row->password_user;
            $nama_user = $this->input->post('name_full');
            $new_password = $this->input->post('new_password');
            $confirm_password = $this->input->post('confirm_new_password');
            $old_password = $this->input->post('old_password');
            $email = $this->input->post('email');
            $contact = $this->input->post('contact');
            if(($old_password == $row->password_user) && ($new_password == $confirm_password)){
                $change_password = $new_password;
            }
            else{
                $warning = "Password salah sesuai atau konfirmasi password salah. Coba Periksa kembali.";
                echo $warning;
            }

            $data = array('nama_user' => $nama_user,
                            'password_user' => $change_password,
                            'email_user' => $contact,
                            'contact_user' => $contact);
            $where = array('username_user' => $username);
            $check = $this->m_user->updateUserQuery($where, $data);
            redirect('Profile_edit', 'refresh');
        }
        // echo $nama_user." ".$old_password." ".$new_password." ".$confirm_password;
        
        // if($check == TRUE){
        //     redirect('Profile_edit/index', 'refresh');
        // }
    }
}