<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class studi extends CI_Controller {

    public function index()
    {
        $this->load->view('User/studi/index');
    }
}
?>