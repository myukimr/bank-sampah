<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class galeri extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/galeri_model');
        
    }
    public function index()
    {
        $data['galeri'] = $this->galeri_model->tampilGaleri();
        $this->load->view('User/galeri/index',$data);
    }
}
?>