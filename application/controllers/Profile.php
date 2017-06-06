<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

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
     function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_users','',TRUE);
        $this->load->model('M_produk','',TRUE);
    }
    public function index(){
        if (isset($_SESSION['ID_USER'])) {
            $id_user = $_SESSION['ID_USER'];
            $data['user_data'] = $this->M_users->getUserById($id_user);
            $data['user_produk'] = $this->M_produk->getProdukUser($id_user);
            $this->load->view('profil', $data);
            } else {
                $this->load->view('login');
            }
    }

    function show($id_user){
            $data['user_data'] = $this->M_users->getUserById($id_user);
            $data['user_produk'] = $this->M_produk->getProdukUser($id_user);
            $this->load->view('profil', $data);
    }

}
?>