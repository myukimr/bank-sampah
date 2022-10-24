<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class pendampingan extends CI_Controller {

    public function index()
    {
        $this->load->view('User/pendampingan/index');
    }
}
?>