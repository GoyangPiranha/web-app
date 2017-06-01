<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wishlist extends CI_Controller {

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
        $this->load->model('M_wishlist','',TRUE);
    }
	public function index()
	{
        if(isset($_SESSION['ID_USER'])){
            //$_SESSION['STATUS'] = "";
			$data['status'] = "";
            $id_user = $_SESSION['ID_USER'];
            $data['wishlist'] = $this->M_wishlist->getWishlistByUser($id_user);
            $this->load->view('wishlist', $data);
        }
	}

	function insert($id_produk){
		$id_user = $_SESSION['ID_USER'];
		$query = $this->M_wishlist->insert($id_produk, $id_user);
        if($query == true){
         	redirect('/Wishlist', 'refresh');
        }

	}

	function deleteWishlist($id){
		$query = $this->M_wishlist->deleteWishlist($id);
		if($query == true){
         	redirect('/Wishlist', 'refresh');
        }else{
           	redirect('/Wishlist', 'refresh');
        }
	}

}
