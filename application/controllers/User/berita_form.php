<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class berita_form extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/berita_model');
        
    }
    public function index($id_berita)
    {
        $data ['berita'] = $this->berita_model->tampilBeritaOne($id_berita);
        $this->load->view('User/berita_form/index',$data);
    }
}
?>