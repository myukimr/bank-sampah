<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class berita extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('text');
        $this->load->model('user/berita_model');
        
    }
    public function index()
    {
        $data['berita'] = $this->berita_model->tampilBerita();
        $this->load->view('User/berita/index',$data);
    }
}
?>