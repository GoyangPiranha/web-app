<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchasing_detail extends CI_Controller{
  function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->model('M_User','', 'TRUE');
  }
  function index()
  {
    if (isset($_SESSION['USERNAME'])) {
      $this->load->view('purchasing_detail');
    }
    else {
      $this->load->view('login');
    }
  }
}
?>
