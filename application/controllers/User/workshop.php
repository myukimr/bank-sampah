<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class workshop extends CI_Controller {

    public function index()
    {
        $this->load->view('User/workshop/index');
    }
}
?>