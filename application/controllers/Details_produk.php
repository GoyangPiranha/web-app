<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Details_produk extends CI_Controller {

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
    public function index()
    {
        if (isset($_SESSION['USERNAME'])) { 
                $data['username'] = $_SESSION['USERNAME'];
                $data['fullname'] = $_SESSION['FULLNAME'];
                $data['avatar'] = $_SESSION['AVATAR'];
            $this->load->view('details', $data);
            } else {
                $this->load->view('login');
            }
    }
}
